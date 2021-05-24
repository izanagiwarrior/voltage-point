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
               <?php
               $check = false;
               ?>
               @foreach($dompet as $dp)
               @if (Auth::user()->id === $dp->id)
               <?php
               $check = true;
               ?>
               @endif
               @endforeach
               @if ($check === false)
               <form action="{{ route('addDompet') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ Auth::user()->id }}" name="id">
                    <button class="btn btn-success">Click Here to Active your Saldo</button>
               </form>
               @endif
          </div>
     </div>
</div>
<!-- Scripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection