@extends('layouts.lihatDetailProfile')
@section('content')
<div class="content-body">
    <div id="wrapper">
    <!-- Home -->
            <article id="top" class="wrapper style1">
                <div class="container">
                    <div class="row">
                        <div class="col-4 col-5-large col-12-medium">
                                                {{-- {{ $profil->foto }} --}}
                            <span class="image fit"><img src="{{ asset('storage/'.$pekerja->foto) }}" width="100px" height="200px" alt="" /></span>
                        </div>
                        <div class="col-8 col-7-large col-12-medium">
                            <header>
                                {{-- {{ $profil->nama }} --}}
                                <h1>Halaman Profile<strong> {{ $pekerja->nama }}</strong>.</h1>


                            </header>
                            {{-- https://wa.me/{{ $profil->nomor }} --}}
                            {{-- <strong>Miniport</strong>, a free, fully responsive HTML5 site template designed by <a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net">HTML5 UP</a> &amp; released under the <a href="http://html5up.net/license">CCA license</a>. --}}
                            <p>Alamat Rumah:  <strong> {{ $pekerja->alamat }} </strong></p>
                            <p>Alamat Email:  <strong> {{ $pekerja->email }} </strong></p>
                            {{-- <a href="" class="button large">Hubungi Saya</a> --}}

                            {{-- {{url('user/'.$pekerja->id.'/edit')}} --}}
                            <a href="" class="button large">Edit Profile</a>

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
                            <a href="{{ asset('storage/'.$pekerja->dokumen) }}" data-lightbox="mygallery"><img src="{{ asset('storage/'.$pekerja->dokumen) }}" height="200" width="200"></a>
                            <h3><a href="#">KTP</a></h3>
                            <p></p>
                        </article>
                    </div>
                    <div class="col-4 col-6-medium col-12-small">
                        <article class="box style2">
                            <a href="{{ asset('storage/'.$pekerja->smp) }}" data-lightbox="mygallery"><img src="{{ asset('storage/'.$pekerja->smp) }}" height="200" width="200"></a>
                            {{-- <a href="#" class="image featured"> <img src="{{ asset('storage/'.$profil->smp) }}" data-lightbox="mygallery" alt="" /></a> --}}
                            <h3><a href="#">IJAZAH SMP</a></h3>
                            <p></p>
                        </article>
                    </div>
                    <div class="col-4 col-6-medium col-12-small">
                        <article class="box style2">
                            <a href="{{ asset('storage/'.$pekerja->sma) }}" data-lightbox="mygallery"><img src="{{ asset('storage/'.$pekerja->sma) }}" height="200" width="200"></a>
                            {{-- <a href="#" class="image featured"><img src="{{ asset('storage/'.$profil->sma) }}" alt="" /></a> --}}
                            <h3><a href="#">IJAZAH SMA</a></h3>
                            <p></p>
                        </article>
                    </div>
            </div>
        </article>

        <!-- Contact -->
            
</div>

@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script>


        $(function () {
            $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
                var rating = data.rating;
                $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
                $(this).parent().find('.result').text('rating :'+ rating);
                $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
            });
        });

    </script>
@endsection
