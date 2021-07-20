@extends('layouts.admin')
@section('content')
<!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Edit User
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Beranda </a></li>
      <li><a href="?module=barang"> edit user </a></li>
      <li class="active"> Tambah </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="/update_user/{{$user->id}}" method="POST">
           @method('patch')
          @csrf
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nama" autocomplete="off" required value="{{$user->nama}}">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Username</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="username" autocomplete="off" required value="{{$user->username}}">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="password" autocomplete="off" required value="{{$user->password}}">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Level</label>
                <div class="col-sm-5">
                   <select name="level" class="form-control" autocomplete="off" id="level">
                    <option value="">--Pilih Level--</option>
          
                                 
                   </select>
                </div>
              </div>


            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="/beranda_admin/data_user" class="btn btn-default btn-reset">Batal</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
  @endsection