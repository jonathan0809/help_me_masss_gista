@extends('layouts.admin') 
@section('content')  

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-folder-o icon-title"></i> Data Agen

    <a class="btn btn-primary btn-social pull-right" href="/beranda_admin/form_tambah_agen" title="Tambah Data" data-toggle="tooltip">
      <i class="fa fa-plus"></i> Tambah
    </a>
  </h1>

</section>

<!-- Main content -->
<section class="content">
   @if(session('sukses'))
    <div class="alert alert-success  alert-dismissable" role="alert" >
      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
      {{(session('sukses'))}}
    </div>
    @endif
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
          <!-- tampilan tabel barang -->
          <table id="example1" class="table table-bordered table-striped table-hover">
            <!-- tampilan tabel header -->
            <thead>
              <tr>
                <th class="center" width="30px">No.</th>
                <th class="center">Agen</th>
                <th class="center">Aksi</th>
              </tr>
            </thead>
            <!-- tampilan tabel body -->
       
              @php $no = 1; @endphp
              @foreach ($data_agen as $data)
              <tr>
              <td align="center">{{$no++}}</td>
              <td>{{$data->agen}}</td>  
              <td>
                <a href="/beranda_admin/edit_agen/{{$data->id}}" class="btn btn-warning btn-sm">Edit</a>
                <a href="/hapus_agen/{{$data->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">Hapus</a></td> 
              </tr>
            @endforeach
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section>

@endsection

