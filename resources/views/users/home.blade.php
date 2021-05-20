@extends('layout.master')

@section('title', 'Home')
@section('contents')
<div class="container">
     <div class="row mt-5">
          @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block">
               <button type="button" class="close" data-dismiss="alert">×</button>
               <strong>{{ $message }}</strong>
          </div>
          @endif
          <div class="col">
               <img src="{{asset('img/charging-station 1.png')}}">
          </div>
          <div class="col">
               <h2 class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, est!</h2>
               <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br /> Corporis labore
                    sapiente sed similique iure
                    assumenda inventore doloribus rem ab? Quasi optio sequi provident! Fuga quidem dicta veniam fugit
                    numquam
                    facilis?</p>
          </div>
     </div>
</div>
<!-- Scripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection