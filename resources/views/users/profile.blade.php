@extends('layout.master')
@section('title', 'QRCode')
@section('contents')
<div class="container mt-5 border" style="height: 80vh;">
    <div class="row">
        <div class="col bg-primary" style="height: 150px;background-image: url(https://picsum.photos/1500/300);">
        </div>
    </div>
    <div class="row">
        <div class="col-4 p-3 text-center">
            <div class="profile-img"></div>
            <h3>Nama Lengkap</h3>
            <button class="btn btn-secondary">User</button>
            <div class="row mt-4">
                <div class="col">
                    Registration Date:
                </div>
                <div class="col">
                    26 May 2021
                </div>
            </div>
        </div>
        <div class="col p-3">
            <div>
                <b>Personal Information</b>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="nama_lengkap">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Birth Date</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Birth date" name="tanggal_lahir">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Region</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Region" name="domisili">
                </div>
            </div>
            <div>
                <b>Contact Information</b>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email address" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Phone Number</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="phone number" name="no_hp">
                </div>
            </div>
            <div class="text-right">
            <button class="btn btn-warning">Edit</button>
            </div>
        </div>
    </div>
</div>
@endsection