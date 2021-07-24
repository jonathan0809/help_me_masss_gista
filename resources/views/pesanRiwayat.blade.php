@extends('layouts.pelanggan')
@section('content')
<div id="wrapper">
    <div id="main">
        <div class="inner">
<div class="content-body">
    <div class="container-fluid">
        <!-- Vectormap -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Riwayat</h4>
                    </div>
                    <div class="card-body">
                        <div class="dataTables_wrapper d-flex justify-content-end" wire:ignore>

                            <div class="dataTables_filter"><label>Search&nbsp;:&nbsp;<input type="search" wire:model="search"></label></div>
                        </div>
                        @if(count($riwayat) > 0)
                        @if(auth()->user()->level == 'Pelanggan')
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80">No</th>
                                        <th>Pekerja</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($riwayat as $key => $a)
                                    <tr>
                                        <td style="width: 10%;"><strong>{{$loop->iteration}}</strong></td>
                                        <td style="width: 10%;">{{$a->pekerja->nama}}</td>
                                        <td style="width: 10%;">{{$a->pekerja->alamat}}, {{$a->pekerja->kota}}</td>
                                        <td style="width: 10%;">{{$a->pekerja->no_hp}}</td>
                                        <td style="width: 10%;">{{$a->pekerja->email}}</td>
                                        <td style="width: 10%;">{{$a->status}}</td>
                                        <td style="width: 10%;">
                                            <div class="d-flex">
                                                <a href="/profiledetailpekerja/{{$a->pekerja->user->username}}" class="btn btn-success shadow sharp mr-1" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-info-circle"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80">No</th>
                                        <th>Pelanggan</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($riwayat as $key => $a)
                                    <tr>
                                        <td style="width: 10%;"><strong>{{$loop->iteration}}</strong></td>
                                        <td style="width: 10%;">{{$a->pelanggan->nama}}</td>
                                        <td style="width: 10%;">{{$a->pelanggan->alamat}}, {{$a->pelanggan->kota}}</td>
                                        <td style="width: 10%;">{{$a->pelanggan->no_hp}}</td>
                                        <td style="width: 10%;">{{$a->pelanggan->email}}</td>
                                        <td style="width: 10%;">{{$a->status}}</td>
                                        <td style="width: 10%;">
                                            <div class="d-flex">
                                                <a href="/pelanggan/detail/{{$a->pelanggan->user->username}}" class="btn btn-success shadow sharp mr-1" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-info-circle"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif
                        @else
                        <h1>Tidak ada data</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
