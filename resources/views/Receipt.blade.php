@extends('layout.master')

@section('title', 'QRCode')
@section('contents')
<div class="container">
    <div class="row mt-5">
        <div class="col d-flex justify-content-center">
            <h1>Receipt</h1>
            <div>
                @foreach ($transaction as $index)
                @if($loop->last)
                <p> Time : </p>
                {{ $index -> time}}
                <p> Price : </p>
                Rp.{{ $index -> time * 200 }}
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection