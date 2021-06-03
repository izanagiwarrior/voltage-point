@extends('layout.admin')

@section('title', 'endsection')
@section('contents')
<div class="container">
     <div class="row mt-5">
          <form action="{{ route('update.user.process',$user->id) }}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="form-group">
                    <label for="exampleFormControlInput1" class="font-weight-bold">Nama Lengkap</label>
                    <input type="text" value="{{$user->nama_lengkap}}" name="nama_lengkap" class="form-control" id="exampleFormControlInput1">
               </div>

               <div class="form-group">
                    <label for="exampleFormControlInput1" class="font-weight-bold">NIK</label>
                    <input type="text" value="{{$user->nik}}" name="nik" class="form-control" id="exampleFormControlInput1">
               </div>

               <div class="form-group">
                    <label for="exampleFormControlInput1" class="font-weight-bold">No Handphone</label>
                    <input type="text" value="{{$user->no_handphone}}" name="no_handphone" class="form-control" id="exampleFormControlInput1">
               </div>
               <div class="form-group">
                    <button type="submit" class="btn btn-success d-block mt-3 mx-auto">Edit</button>
                    <a href="{{ route('admin.user') }}" class="btn btn-gray d-block mt-3 mx-auto">Back</a>
               </div>
               </from>
     </div>
</div>

@endsection