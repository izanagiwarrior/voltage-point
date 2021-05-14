@extends('layout.master')

@section('title', 'find location')
@section('contents')
<div class="container">
     <div class="row">
          <div class="col mt-3" style="box-shadow: 0px 4px 4px #888;padding: 200px 10px">
               @if(session()->has('error'))
               <div class="alert alert-danger">
                    {{ session()->get('error') }}
               </div>
               @endif
               <h4 class="text-center mb-4" style="color: #AB6353">Temukan Voltage Point di kota anda!</h4>
               <div class="input-group col-7 mx-auto">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    <div class="input-group-append">
                         <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                         <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Bandung</a>
                              <a class="dropdown-item" href="#">Bogor</a>
                         </div>
                    </div>
               </div>
               <div class="d-flex justify-content-center mt-4">
                    <button class="btn btn-success">Temukan</button>
               </div>
          </div>
     </div>
</div>

@endsection