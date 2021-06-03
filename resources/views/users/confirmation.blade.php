@extends('layout.master')
@section('title', 'QRCode')
@section('contents')
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col d-flex justify-content-center flex-column align-items-center">
            <h4 style="color: #AB6353">Payment Confirmed</h4>
            <img src="{{asset('img/charge-receipt.png')}}" alt="charge-point">
            <p class="text-center">Thank you, your payment has been successful.</p>
        <a href="{{route('feedback')}}" class="btn btn-success mx-auto px-5 mt-5">Finish</a>
        </div>
    </div>
</div>
@endsection