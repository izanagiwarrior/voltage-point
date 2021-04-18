@extends('layout.master')

@section('title', 'QRCode')
@section('contents')
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-8 d-flex justify-content-center flex-column align-items-center">
            <h4 style="color: #AB6353">Voltage Point</h4>
            <img src="{{asset('img/charge-receipt.png')}}" alt="charge-point">
            <p class="text-center">It would take diffForHumans to charge your battery</p>
        </div>
        <div class="col-4">
            <div class="card mx-auto" style="width:22rem">
                <div class="card-body">
                    @foreach ($transaction as $index)
                    @if($loop->last)
                    <h4 class="text-center" style="color: #AB6353">Receipt</h4>
                    <hr />
                    <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Date</p>
                        <p>{{$index->date}}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Car Type</p>
                        <p>{{$index->car_type}}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">License Plate</p>
                        <p>{{$index->license_plat}}</p>
                    </div>
                    <hr />
                    <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Charging Type</p>
                        <p>Rp.50.000</p>
                    </div>
                    <p class="font-weight-bold">Amount</p>
                    <p class="text-danger">Rp.2.500/Menit</p>
                    <hr />
                    <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Total</p>
                        <p>{{$index->time*200}}</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{route('home')}}" class="btn btn-success mx-auto px-5 mt-5">Finish</a>
        {{-- <p> Time : </p>
            {{ $index -> time}}
        <p> Price : </p>
        Rp.{{ $index -> time * 200 }} --}}
        @endif
        @endforeach
    </div>
</div>

@endsection