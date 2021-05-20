@extends('layout.master')

@section('title', 'History')
@section('contents')
@if (count($transaction) === 0)

<div class="d-flex justify-content-center">
    <p class="text-muted">There is no data...</p>
</div>
<div class="d-flex justify-content-center">
    <a href="{{ route('find') }}" class="btn btn-dark">Order Now</a>
</div>
@elseif (count($transaction) > 0)
@php
$i = 0
@endphp
<h1 class="text-center">History</h1>
<br><br>
<div class="container d-flex justify-content-center">
    <table class="table table-striped">
        <tr class="bg-dark text-white">
            <th>#</th>
            <th>Location</th>
            <th>Car Type</th>
            <th>Lincense Plat</th>
            <th>Amount</th>
            <th>Start</th>
            <th>End</th>
        </tr>
        @foreach ($transaction as $index => $order)
        @if($order->status === "Completed")
        @if($order->user === Auth::user()->nama_lengkap)
        <tr>
            <td>{{ $i += 1 }}</td>
            <td>{{ $order->location }}</td>
            <td>{{ $order->car_type }}</td>
            <td>{{ $order->license_plat }}</td>
            <td>Rp. {{ $order->time}}</td>
            <td>{{ $order->created_at }}</td>
            <td>{{ $order->selesai }}</td>
        </tr>
        @endif
        @endif
        @endforeach
    </table>
</div>
@endif
@endsection
