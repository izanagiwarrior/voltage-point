@extends('layout.master')

@section('title', 'QRCode')
@section('contents')
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-8 d-flex justify-content-center flex-column align-items-center">
            <h4 style="color: #AB6353">Voltage Point</h4>
            <img src="{{asset('img/charge-receipt.png')}}" alt="charge-point">
            <p class="text-center">It would take {{$transaction->time/2500}} Minutes to charge your battery</p>
        </div>
        <div class="col-4">
            <div class="card mx-auto" style="width:22rem">
                <div class="card-body">
                    <h4 class="text-center" style="color: #AB6353">Receipt</h4>
                    <hr />
                    <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Date</p>
                        <p>{{$transaction->created_at}}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Car Type</p>
                        <p>{{$transaction->car_type}}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">License Plate</p>
                        <p>{{$transaction->license_plat}}</p>
                    </div>
                    <hr />
                    <p class="font-weight-bold">Price</p>
                    <p class="text-danger">Rp.2.500/Menit</p>
                    <p class="font-weight-bold">Transaction</p>
                    <p class="text-danger">Rp. {{$transaction->time}}</p>
                    <hr />
                    <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Total (Time)</p>
                        <p>{{$transaction->time/2500}} Menit</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Total (kWh)</p>
                        <p>{{number_format($transaction->time/1500, 2, '.', '')}} kWh</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="font-weight-bold">Sisa Saldo</p>
                        <p>Rp. {{number_format($saldo->saldo,2,',','.')}}</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{route('chargeStatus')}}" class="btn btn-success mx-auto px-5 mt-5">Finish</a>
    </div>
</div>

@endsection