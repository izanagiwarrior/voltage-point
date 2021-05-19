@extends('layout.master')

@section('title', 'Transaction')
@section('contents')
@if (count($transaction) === 0)

<div class="d-flex justify-content-center">
    <p class="text-muted">There is no data...</p>
</div>
<div class="d-flex justify-content-center">
    <a href="{{ route('home') }}" class="btn btn-dark">Order Now</a>
</div>
@elseif (count($transaction) > 0)
@php
$i = 0
@endphp
<h1 class="text-center">Transaction</h1>
<br><br>
<div class="container d-flex justify-content-center">
    <table class="table table-striped">
        <tr class="bg-dark text-white">
            <th>#</th>
            <th>Location</th>
            <th>Car Type</th>
            <th>Lincense Plat</th>
            <th>Date</th>
            <th>Amount</th>
        </tr>
        @foreach ($transaction as $index => $order)
        <tr>
            <td>{{ $i += 1 }}</td>
            <td>{{ $order->location }}</td>
            <td>{{ $order->car_type }}</td>
            <td>{{ $order->license_plat }}</td>
            <td>{{ $order->date }}</td>
            <td>{{ $order->time}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endif
@endsection
