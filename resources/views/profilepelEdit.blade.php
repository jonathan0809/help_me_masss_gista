@extends('layouts.editProfilePel')
@section('content')

  <div class="card">
    <form action="" method="POST"
    {{-- {{ route('data_pemilik.update_profile', $data_pemilik->id) }} --}}
        enctype="multipart/form-data">
        @csrf
        @method('patch')
        {{ csrf_field() }}
        <div class="card-header">
            <strong class="card-title">Edit Profil</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-8 col-12">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="pemilik_nama"
                        value="{{$data->nama}}" required="">
                        {{-- {{old('name', $user->name)}} --}}
                        {{-- {{ $data_pemilik->pemilik_nama }} --}}
                    <div class="invalid-feedback">
                        Please fill in the first name
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-12 col-12">
                    <label>Email</label>
                    <input type="email" class="form-control" name="pemilik_email"
                        value="{{$data->email}}" required="">
                        {{-- {{old('name', $user->email)}} --}}
                        {{-- {{ $data_pemilik->pemilik_email }} --}}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12 col-12">
                    <label>no hp</label>
                    <input type="text" class="form-control" name="pemilik_telepon"
                        value="">
                        {{-- {{old('name', $user->no_hp)}} --}}
                        {{-- {{ $data_pemilik->pemilik_telepon }} --}}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12 col-12">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="pemilik_alamat"
                        value="" required="">
                        {{-- {{old('name', $user->alamat)}} --}}
                        {{-- {{ $data_pemilik->pemilik_alamat }} --}}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12 col-12">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="avatar" value="">
                </div>
            </div>
            <button class="btn btn-success"><i class="fa fa-check-square" type="submit"></i>&nbsp;
                Edit</a></button>
            {{-- <a href="profile" class="btn btn-primary"><i class="fa fa-times"></i>&nbsp;Batal</a> --}}
        </div>



@endsection
