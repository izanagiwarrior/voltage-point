@extends('layout.master')

@section('title', 'QRCode')
@section('contents')
<div class="container">
    <div class="row mt-5">
        <div class="col d-flex justify-content-center">
            <h2>Scan to Payment
                <img src="{{asset('img/FakeQR.png')}}" width="500px" height="500px">
                <p>Total Pembayaran : Rp. {{number_format($transaction->time,2,',','.')}}</p>
                <p>Saldo : Rp. {{number_format($saldo->saldo,2,',','.')}}</p>
            </h2>
        </div>
    </div>
    <div class="text-center">
    <a href="{{ route('Receipt') }}" class="btn btn-primary">Done</a>
    </div>
</div>

@endsection