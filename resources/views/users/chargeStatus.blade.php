@extends('layout.master')
@section('title', 'QRCode')
@section('contents')
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col d-flex justify-content-center flex-column align-items-center">
            <h4 style="color: #AB6353">Your Battrey is fully charged </h4>
            <img src="{{asset('img/charge-receipt.png')}}" alt="charge-point">
            <p class="text-center">Please disconnect your charge port</p>
        <a href="{{route('confirmation')}}" class="btn btn-success mx-auto px-5 mt-5">Disconnect</a>
        </div>
    </div>
</div>
@endsection