@extends('layout.master')
@section('title', 'running station')
@section('contents')

<h2 class="text-center my-5" style="color: #AB6353">Running Voltage Point Station</h2>
<div class="container mt-3 p-3 splide" id="card-slider">

     <div class="splide__track">
          <ul class="splide__list">
               @foreach ($transaction as $ts)
               <li class="splide__slide d-flex justify-content-center">
                    <div class="card splide__slide" style="width:25rem; margin:0 5px;">
                         <div class="card-body">
                              <h4 class="text-center" style="color: #AB6353">Receipt</h4>
                              <hr />
                              <div class="d-flex justify-content-between">
                                   <p class="font-weight-bold">Date</p>
                                   <p>{{$ts->date}}</p>
                              </div>
                              <div class="d-flex justify-content-between">
                                   <p class="font-weight-bold">Car Type</p>
                                   <p>{{$ts->car_type}}</p>
                              </div>
                              <div class="d-flex justify-content-between">
                                   <p class="font-weight-bold">License Plate</p>
                                   <p>{{$ts->license_plat}}</p>
                              </div>
                              <hr />
                              <!-- <div class="d-flex justify-content-between">
                                       <p class="font-weight-bold">Charging Type</p>
                                       <p>Rp.50.000</p>
                                   </div> -->
                              <p class="font-weight-bold">Price</p>
                              <p class="text-danger">Rp.2.500/Menit</p>
                              <p class="font-weight-bold">Transaction</p>
                              <p class="text-danger">Rp. {{$ts->time}}</p>
                              <hr />
                              <div class="d-flex justify-content-between">
                                   <p class="font-weight-bold">Total</p>
                                   <p>{{$ts->time/2500}} Menit</p>
                              </div>
                         </div>
                    </div>
               </li>
               @endforeach
          </ul>
     </div>
</div>


@endsection