@extends('layout.admin')

@section('title', 'Admin : Home')
@section('contents')
<div class="container">
     <div class="row mt-5">
          <div class="col">
               <img src="{{asset('img/charging-station 1.png')}}">
          </div>
          <div class="col">
               <h2 class="text-left">ADMIN PANEL</h2>
               <p class="text-justify">You're Admin</p>
          </div>
     </div>
</div>

@endsection
