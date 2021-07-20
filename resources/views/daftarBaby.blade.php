@extends('layouts.pekerja')
@section('content')

<div class="content-body">
    <div id="wrapper">
        <div id="main">
            <div class="inner">
                <h1>List Asisten Rumah Tangga</h1>
                <span class="image main"><img src="" alt="" /></span>
                {{-- <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel venenatis mauris vehicula hendrerit.</p>
                <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p> --}}
                @foreach ($Pekerja as $item)
                <div class="album py-5 bg-light">
                    <div class="container">
                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                          <div class="card shadow-sm">
                              <div class="card-body text-center">
                                <img src="/storage/" class="img-fluid">
                             </div>
                            <div class="card-body">
                                <h5><strong>{{ $item->nama }}</strong> </h5>
                                <h5><strong>{{ $item->jenis }}</strong> </h5>
                                <h5><strong>Rp. {{ $item->harga }}</strong> </h5>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ url('pekerja/'.$item->id.'/profile') }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Lihat Profile</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>


    </div>
</div>



@endsection
