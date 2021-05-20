@extends('layout.master')

@section('title', 'Charging Point')
@section('contents')
<div class="container">
     <div class="row">
          <div class="col mt-3" style="padding: 20px 10px">
               @if(session()->has('error'))
               <div class="alert alert-danger">
                    {{ session()->get('error') }}
               </div>
               @endif
               <h4 class="text-center mb-4" style="color: #AB6353">Temukan Voltage Point di kota anda!</h4>
               <div class="input-group col-7 mx-auto mb-5">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    <div class="input-group-append">
                         <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pilih Kota</button>
                         <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Bandung</a>
                              <a class="dropdown-item" href="#">Bogor</a>
                         </div>
                    </div>
               </div>
               @if (count($point) === 0)
               <div class="d-flex justify-content-center">
                    <p class="text-muted">There is no data...</p>
               </div>
               @elseif (count($point) > 0)
               <div class="card-deck">
                    @foreach ($point as $index)
                    <div class="card">
                         <a href="{{ route('findMaps',$index->id) }}" class="card-find">
                              <div class="card-body">
                                   <h5 class="card-title">{{ $index->location }}</h5>
                                   <p class="card-text">{{ $index->alamat }}</p>
                              </div>
                         </a>
                    </div>
                    @endforeach
               </div>
               @endif
          </div>
     </div>
</div>
@endsection