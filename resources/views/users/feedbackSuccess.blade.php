@extends('layout.master')
@section('title', 'QRCode')
@section('contents')
<div class="container mt-5" style="height: 80vh;">
    <div class="row py-4 border" style="height: 100%;">
    <div class="col d-flex align-items-center justify-content-between flex-column">
    <h2 style="color: #AB6353;">Your Feedback Is Successfully Sent!</h2>
    <img src="{{asset('img/checklist.png')}}" alt="" width="300px">
        <p>Thank you, your feedback would make us much better.</p>
    </div>
    </div>
</div>
@endsection