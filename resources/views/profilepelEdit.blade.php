@extends('layouts.editProfilePel')
@section('content')


<!-- tampilan form add data -->
  <!-- Content Header (Page header) -->

  <!-- Main content -->
  {{-- <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="" method="POST">
           @method('patch')
          @csrf
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nama" autocomplete="off" required value="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Username</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="username" autocomplete="off" required value="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="password" autocomplete="off" required value="">
                </div>
              </div>


            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content --> --}}

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
                        value="" required="">
                        {{-- {{old('name', $user->email)}} --}}
                        {{-- {{ $data_pemilik->pemilik_email }} --}}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12 col-12">
                    <label>Phone</label>
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
            {{-- <div class="row">
                <div class="form-group col-md-12 col-12">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="avatar" value="">
                </div>
            </div> --}}
            <button class="btn btn-success"><i class="fa fa-check-square" type="submit"></i>&nbsp;
                Edit</a></button>
            {{-- <a href="profile" class="btn btn-primary"><i class="fa fa-times"></i>&nbsp;Batal</a> --}}
        </div>



@endsection
