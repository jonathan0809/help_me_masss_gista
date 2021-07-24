@extends('layouts.editProfilePel')
@section('content')

{{-- form1 --}}
{{-- <div class="card">
    <div class="card-header">Update Profile</div>
    <div class="card-body">
        <form id="editProfilePelForm" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="nama">
            </div>
            <div class="form-group">
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="alamat">
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" id="email" placeholder="email">
            </div>

            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</div> --}}
{{-- form2 --}}
{{-- <div class="card body">
    <form action="{{ route('editProfilePel') }}"method="POST"></form>
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nama">nama</label>
        <input type="text" class="form-control" nama="nama" id="nama" value="">
    </div>

    <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control" email="email" id="email" value="">
    </div>

    <div class="form-group">
        <label for="alamat">alamat</label>
        <input type="text" class="form-control" email="alamat" id="alamat" value="">
    </div>

    <button type="submit" class="btn btn-success">Update Profile</button>

</div> --}}
{{-- Form3 --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method = 'POST' action = '/check_profile'>
                        {{ csrf_field() }}
                        <label>Name</label>
                        <input class = 'form-control' name = 'textbox1' id = 'p1' type = 'text' value = "{{Auth::user()->name}}"/>

                        <label>Email</label>
                        <input class = 'form-control' name = 'textbox2' type = 'text' id = 'p1' value = "{{Auth::user()->email}}"/>

                        <input class = 'btn btn-primary' name = 'button1' type = 'submit' value = 'Change'/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="card">
    <form action="" method="POST"
    {{-- {{ route('data_pemilik.update_profile', $data_pemilik->id) }} --}}
        enctype="multipart/form-data">
        {{-- @csrf --}}
        @method('patch')
        {{ csrf_field() }}
        <div class="card-header">
            <strong class="card-title">Edit Profil</strong>
        </div>
        <div class="card-body">
            <div class="card-body">
                @if (Session::get('success'))
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success') }}
                    <span class="badge badge-pill badge-success">Success</span>&nbsp;Berhasil edit profil.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if (Session::get('failed'))
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('failed') }}
                    <span class="badge badge-pill badge-danger">Failed</span>&nbsp;Gagal edit profil.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
            <div class="row">
                <div class="form-group col-md-8 col-12">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="pemilik_nama"
                        value="" required="">
                        {{-- {{ $data_pemilik->pemilik_nama }} --}}
                    <div class="invalid-feedback">
                        Please fill in the first name
                    </div>
                </div>
                {{-- <div class="form-group col-md-4 col-12">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="" --}}
                    {{-- {{ $data_pemilik->username }} --}}
                        {{-- required=""> --}}
                    {{-- <div class="invalid-feedback">
                        Please fill in the first name
                    </div>
                </div> --}}
            </div>

            <div class="row">
                <div class="form-group col-md-12 col-12">
                    <label>Email</label>
                    <input type="email" class="form-control" name="pemilik_email"
                        value="" required="">
                        {{-- {{ $data_pemilik->pemilik_email }} --}}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12 col-12">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="pemilik_telepon"
                        value="">
                        {{-- {{ $data_pemilik->pemilik_telepon }} --}}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12 col-12">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="pemilik_alamat"
                        value="" required="">
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
