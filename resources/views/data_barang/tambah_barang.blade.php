@extends('layouts.admin')
@section('content')
<!-- tampilan form add data -->
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Tambah Barang
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Beranda </a></li>
      <li><a href="?module=barang"> barang </a></li>
      <li class="active"> Tambah </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="/tambah_barang" method="POST">
            @csrf
            <div class="box-body">
             <div class="form-group">
                <label class="col-sm-2 control-label">Ukuran</label>
                <div class="col-sm-5">
                   <select name="ukuran" class="form-control" autocomplete="off" id="ukuran_id">
                    <option value="">--Pilih ukuran barang--</option>
                    @foreach ($ukuran as $data)
                     <option value="{{$data->id}}">{{$data->ukuran}}</option>
                     @endforeach
                   </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tipe</label>
                <div class="col-sm-5">
                   <select name="tipe" class="form-control" autocomplete="off" id="tipe_id">
                    <option value="">--Pilih tipe barang--</option>
          
                     @foreach ($tipe as $data)
                     <option value="{{$data->id}}">{{$data->tipe}}</option>
                     @endforeach
           
                   </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Warna</label>
                <div class="col-sm-5">
                   <select name="warna" class="form-control" autocomplete="off" id="warna_id">
                    <option value="">--Pilih warna barang--</option>
                    @foreach ($warna as $data)
                     <option value="{{$data->id}}">{{$data->warna}}</option>
                     @endforeach
                   </select>
                </div>
              </div> 

              <div class="form-group">
                <label class="col-sm-2 control-label">Agen</label>
                <div class="col-sm-5">
                   <select name="agen" class="form-control" autocomplete="off" id="agen_id">
                    <option value="">--Pilih agen--</option>
          
                    @foreach ($agen as $data)
                     <option value="{{$data->id}}">{{$data->agen}}</option>
                     @endforeach
           
                   </select>
                </div>
              </div>     

              <div class="form-group">
                <label class="col-sm-2 control-label">Harga Modal</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="harga_modal" autocomplete="off" required>
                </div>
              </div>    

              <div class="form-group">
                <label class="col-sm-2 control-label">Harga Jual</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="harga_jual" autocomplete="off" required>
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="/beranda_admin/data_barang" class="btn btn-default btn-reset">Batal</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
  @endsection