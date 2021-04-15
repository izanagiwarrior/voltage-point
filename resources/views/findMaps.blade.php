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
               <p class="text-center"><b>Lat</b> : {{ $point->lat }}    <b>Lang</b> : {{ $point->lang }}</p>
               <form action="">
                    <div class="form-group">
                         <label for="exampleFormControlInput1" class="font-weight-bold">Car Name</label>
                         <input type="text" class="form-control" id="exampleFormControlInput1"
                              placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                         <label for="exampleFormControlInput1" class="font-weight-bold">License Plate</label>
                         <input type="text" class="form-control" id="exampleFormControlInput1"
                              placeholder="name@example.com">
                    </div>
                    <label for="" class="d-block font-weight-bold">Charging Type</label>
                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="amount"
                              value="amount">
                         <label class="form-check-label" for="inlineRadio1">Amount</label>
                    </div>
                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="full" value="full">
                         <label class="form-check-label" for="inlineRadio2">Full</label>
                    </div>
                    {{-- onclick amount --}}
                    <div class="form-group amount-radio" style="display: none">
                         <input type="text" class="form-control" id="exampleFormControlInput1"
                              placeholder="Please enter amount (Rupiah)">
                    </div>
                    {{-- end onclick amount --}}
                    <button type="submit" class="btn btn-success d-block mt-3 mx-auto">Continue</button>
               </form>
          </div>
     </div>
</div>
@endsection
@section('scripts')
<script
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN96YT7cFxiOkedfmvxokFIgq-XgwDKXE&callback=initMap&libraries=&v=weekly"
     async>
</script>
<script>
     $("#amount").click(function () {
          $('.amount-radio').show();
     });
     $("#full").click(function(){
          $('.amount-radio').hide();
     })
</script>
<script>
     function initMap() {
    // The location of Uluru
    const uluru = { lat: {{$point->lat}}, lng: {{$point->lang}} };
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

</script>
@endsection