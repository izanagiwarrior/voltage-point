@extends('layout.master')

@section('title', 'Maps')

@section('contents')
<div class="container-fluid">
     <div id="map"></div>
</div>
<div class="container">
     <div class="row">
          <div class="col mt-3" style="box-shadow: 0px 4px 4px #888;padding: 20px 10px">
               <h4 class="text-center mb-4" style="color: #AB6353">{{$point->location}}</h4>
               <p class="text-center">{{ $point->alamat}}</p>

               <form action="{{ route('transactionProcess',$point->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                         <label for="exampleFormControlInput1" class="font-weight-bold">Location</label>
                         <input type="text" value="{{$point->location}}" name="location" class="form-control" id="exampleFormControlInput1" readonly>
                    </div>

                    <div class="form-group">
                         <label for="exampleFormControlInput1" class="font-weight-bold">Car Name</label>
                         <input type="text" name="car_type" class="form-control" id="exampleFormControlInput1" placeholder="Suzuki, Honda, Yamaha" required>
                    </div>

                    <div class="form-group">
                         <label for="exampleFormControlInput1" class="font-weight-bold">License Plate</label>
                         <input type="text" name="license_plat" class="form-control" id="exampleFormControlInput1" placeholder="XX 1234 XX" required>
                    </div>

                    <label for="" class="d-block font-weight-bold">Charging Type</label>
                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="amount" value="amount">
                         <label class="form-check-label" for="inlineRadio1">Amount </label>
                    </div>

                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="full" value="full">
                         <label class="form-check-label" for="inlineRadio2">Full <small>(Rp. 200.000)</small></label>
                    </div>
                    {{-- onclick amount --}}
                    <div class="form-group amount-radio2" style="display: none">
                         <input type="text" name="time" value="200000" class="form-control" id="exampleFormControlInput1" placeholder="Please enter amount (Rupiah)" readonly>
                    </div>
                    <div class="form-group amount-radio" style="display: none">
                         <input type="text" name="time" class="form-control" id="exampleFormControlInput1" placeholder="Please enter amount (Rupiah)">
                    </div>
                    {{-- end onclick amount --}}
                    <br><br><small>Information :</small>
                    <br><small>Rp. 2.500 / Minute</small>
                    <br><small>Rp. 1.500 / kWh</small>
                    <div class="form-check form-check-inline">
                         <input type="hidden" name="user" value="{{Auth::user()->nama_lengkap}}" id="amount">
                    </div>

                    <button type="submit" class="btn btn-success d-block mt-3 mx-auto">Continue</button>
               </form>
          </div>
     </div>
</div>
<script>
     mapboxgl.accessToken = 'pk.eyJ1IjoiaXphbmFnaXdhcnJpb3IiLCJhIjoiY2twNGRoYWZvMDE4YjJvcDJiaTI2b3c4YSJ9.Uw4QJvNl8OCfTSNQeBfM6Q';
     var lat = {{$point->lang}}
     var lang = {{$point -> lat}}

     var map = new mapboxgl.Map({
          container: 'map', // container ID
          style: 'mapbox://styles/mapbox/streets-v11', // style URL
          center: [lat, lang], // starting position [lng, lat]
          zoom: 20 // starting zoom
     });
     map.on('load', function() {
          map.addSource('places', {
               // This GeoJSON contains features that include an "icon"
               // property. The value of the "icon" property corresponds
               // to an image in the Mapbox Streets style's sprite.
               'type': 'geojson',
               'data': {
                    'type': 'FeatureCollection',
                    'features': [{
                         'type': 'Feature',
                         'properties': {
                              'description': '<p class="text-center"><b>{{$point->location}}<br></b> {{ $point->alamat}}</p>',
                              'icon': 'rocket-15'
                         },
                         'geometry': {
                              'type': 'Point',
                              'coordinates': [lat, lang]
                         }
                    }]
               }
          });
          map.addLayer({
               'id': 'places',
               'type': 'symbol',
               'source': 'places',
               'layout': {
                    'icon-image': '{icon}',
                    'icon-allow-overlap': true
               }
          });
          map.on('click', 'places', function(e) {
               var coordinates = e.features[0].geometry.coordinates.slice();
               var description = e.features[0].properties.description;

               // Ensure that if the map is zoomed out such that multiple
               // copies of the feature are visible, the popup appears
               // over the copy being pointed to.
               while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                    coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
               }

               new mapboxgl.Popup()
                    .setLngLat(coordinates)
                    .setHTML(description)
                    .addTo(map);
          });
          map.on('mouseenter', 'places', function() {
               map.getCanvas().style.cursor = 'pointer';
          });

          // Change it back to a pointer when it leaves.
          map.on('mouseleave', 'places', function() {
               map.getCanvas().style.cursor = '';
          });
     });
</script>
@endsection
@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN96YT7cFxiOkedfmvxokFIgq-XgwDKXE&callback=initMap&libraries=&v=weekly" async>
</script>
<script>
     $("#amount").click(function() {
          $('.amount-radio').show();
          $('.amount-radio2').hide();
     });
     $("#full").click(function() {
          $('.amount-radio').hide();
          $('.amount-radio2').show();
     })
</script>
<!-- <script>
     function initMap() {
    // The location of Uluru
    const uluru = { lat: , lng:  };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
}
</script> -->
@endsection