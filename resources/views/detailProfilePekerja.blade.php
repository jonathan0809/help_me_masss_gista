@extends('layouts.lihatDetailProfile')
@section('content')
<article id="top" class="wrapper style1">
    <div class="container">
        <div class="row">
            <div class="col-4 col-5-large col-12-medium">
                <span class="image fit"><img src="{{ asset('storage/'.$profil->foto) }}" width="100px" height="200px" alt="" /></span>
            </div>
            <div class="col-8 col-7-large col-12-medium">
                <header>
                    <h1>Hallo. saya <strong>{{ $profil->nama }}</strong>.</h1>
                </header>
                <p>Sebelum <strong>Beri Kerja</strong> tolong, <strong>Hubungi Saya </strong>terlebih dahulu</p>
                <a href="https://wa.me/{{ $profil->no_hp }}" class="button large">Hubungi Saya</a>
                    <a href="{{ url('ratingReview') }}" class="button large">Beri Ulasan</a>
                    <a href="" class="button large scrolly">Beri Kerja</a>
            </div>

        </div>
    </div>
</article>
		<!-- Work -->


    <!-- Portfolio -->
        <article id="portfolio" class="wrapper style3">
            <div class="container">
                <header>
                    <h2>Sertifikat dan Bukti Identitas Diri</h2>
                    <p>Berikut adalah bukti identitas diri</p>
                </header>
                <div class="row">
                    <div class="col-4 col-6-medium col-12-small">
                        <article class="box style2">
                            {{-- <a href="#" class="image featured"><img src="{{ asset('storage/'.$profil->dokumen) }}" alt="" /></a> --}}
                            <a href="{{ asset('storage/'.$profil->dokumen) }}" data-lightbox="mygallery"><img src="{{ asset('storage/'.$profil->dokumen) }}" height="200" width="200"></a>
                            <h3><a href="#">KTP</a></h3>
                            <p></p>
                        </article>
                    </div>
                    <div class="col-4 col-6-medium col-12-small">
                        <article class="box style2">
                            <a href="{{ asset('storage/'.$profil->smp) }}" data-lightbox="mygallery"><img src="{{ asset('storage/'.$profil->smp) }}" height="200" width="200"></a>
                            {{-- <a href="#" class="image featured"> <img src="{{ asset('storage/'.$profil->smp) }}" data-lightbox="mygallery" alt="" /></a> --}}
                            <h3><a href="#">IJAZAH SMP</a></h3>
                            <p></p>
                        </article>
                    </div>
                    <div class="col-4 col-6-medium col-12-small">
                        <article class="box style2">
                            <a href="{{ asset('storage/'.$profil->sma) }}" data-lightbox="mygallery"><img src="{{ asset('storage/'.$profil->sma) }}" height="200" width="200"></a>
                            {{-- <a href="#" class="image featured"><img src="{{ asset('storage/'.$profil->sma) }}" alt="" /></a> --}}
                            <h3><a href="#">IJAZAH SMA</a></h3>
                            <p></p>
                        </article>
                    </div>
            </div>
        </article>



        @endsection
