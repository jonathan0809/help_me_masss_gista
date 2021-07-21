@extends('layouts.editProfilePel')
@section('content')

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
<div class="card body">
    <form action="{{ route('editProfilePel') }}"method="POST"></form>
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" name="name" id="name" value="">
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

</div>

@endsection


{{-- <div class="row">
    <div class="col-md-4">
        <ul class="list-group" --}}
