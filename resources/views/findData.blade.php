@extends('layout.master')

@section('title', 'find location')
@section('contents')
<div class="container">
     <div class="row">
          <div class="col mt-3" style="padding: 20px 10px">
               <h4 class="text-center mb-4" style="color: #AB6353">Temukan Voltage Point di kota anda!</h4>
               <div class="input-group col-7 mx-auto mb-5">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    <div class="input-group-append">
                         <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">Dropdown</button>
                         <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Bandung</a>
                              <a class="dropdown-item" href="#">Bogor</a>
                         </div>
                    </div>
               </div>
               <div class="card-deck">
                    <div class="card">
                         <a href="" class="card-find">
                              <div class="card-body">
                                   <h5 class="card-title">Voltage Point 31.402.01</h5>
                                   <p class="card-text">Jl. Kiaracondong, Binong, Batununggal, Bandung</p>
                              </div>
                         </a>
                    </div>
                    <div class="card">
                         <a href="" class="card-find">
                              <div class="card-body">
                                   <h5 class="card-title">Voltage Point 31.402.02</h5>
                                   <p class="card-text">Jl. Jend. Sudirman, Sukahaji, Kec. Babakan Ciparay, Bandung</p>
                              </div>
                         </a>
                    </div>
                    <div class="card">
                         <a href="" class="card-find">
                              <div class="card-body">
                                   <h5 class="card-title">Voltage Point 31.406.01</h5>
                                   <p class="card-text">Jl. Soekarno Hatta No. 728
                                   </p>
                              </div>
                         </a>
                    </div>
               </div>
          </div>
     </div>
</div>

@endsection