@extends('layout.master')
@section('title', 'QRCode')
@section('contents')
<div class="container mt-5" style="height: 80vh;">
    <div class="row">
        <div class="col bg-primary" style="height: 150px;background-image: url(https://picsum.photos/1500/300);">
        </div>
    </div>
    <div class="row border">
        <div class="col-4 p-3 text-center">
            <div class="profile-img"></div>
            <h3>Nama Lengkap</h3>
            <button class="btn btn-secondary">User</button>
            <div class="row mt-4">
                <div class="col">
                    Registration Date:
                </div>
                <div class="col">
                {{date('d-m-Y', strtotime($data->created_at))}}
                </div>
            </div>
        </div>
        <div class="col p-3">
            <div>
                <b>Personal Information</b>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="nama_lengkap" value="{{$data->nama_lengkap}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Birth Date</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Birth date" name="tanggal_lahir" value="{{$data->tanggal_lahir}}" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">NIK</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Region" name="domisili" value="{{$data->nik}}">
                </div>
            </div>
            <div>
                <b>Contact Information</b>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email address" name="email" value="{{$data->email}}" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Phone Number</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="phone number" name="no_hp" value="{{$data->no_handphone}}">
                </div>
            </div>
            <div class="text-right">
            <button class="btn btn-success">Confirm</button>
            <button class="btn btn-danger">Back</button>
            </div>
        </div>
    </div>
</div>
@endsection