@extends('layout.admin')
@section('title', 'running station')
@section('contents')

@php
$i = 0
@endphp

<h1 class="text-center">User</h1>
<br><br>
<div class="container d-flex justify-content-center">
    <table class="table table-striped">
        <tr class="bg-dark text-white text-center">
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
            <th>NIK</th>
            <th>No Handphone</th>
            <th>Tanggal Pembuatan</th>
            <th>Action</th>
        </tr>
        @foreach ($user as $index => $order)
        <tr class="text-center">
            <td>{{ $i += 1 }}</td>
            <td>{{ $order->nama_lengkap }}</td>
            <td>{{ $order->email }}</td>
            <td>{{ date('d-m-Y', strtotime($order->tanggal_lahir))}}</td>
            <td>{{ $order->nik }}</td>
            <td>{{ $order->no_handphone}}</td>
            <td>{{ date('d-m-Y', strtotime($order->created_at))}}</td>
            @if($order->id === 1)
            <td><p href="" class="">Admin</p></td>
            @else
            <td><a href="{{route('update.user', $order->id)}}" class="btn btn-warning">Perbarui</a></td>
            @endif
        </tr>
        @endforeach
    </table>
</div>
@endsection
