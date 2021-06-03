@extends('layout.admin')

@section('title', 'History')
@section('contents')
@php
$i = 0
@endphp
<h1 class="text-center">D2D : Transaction</h1>
<br><br>
<div class="container d-flex justify-content-center">
    <table class="table table-striped">
        <tr class="bg-dark text-white">
            <th>#</th>
            <th>Tanggal</th>
            <th>Total</th>
        </tr>
        @foreach ($transaction as $index => $order)
        <tr>
            <td>{{ $i += 1 }}</td>
            <td>{{ $order->date }}</td>
            <td>Rp. {{number_format($order->time,2,',','.')}}</td>
        </tr>
        @endforeach
    </table>
}
</div>
@endsection
