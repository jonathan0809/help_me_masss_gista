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
                            <span class="image fit"><img src="{{ asset('storage/'.$pelanggan->foto) }}" width="100px" height="200px" alt="" /></span>
                        </div>
                        <div class="col-8 col-7-large col-12-medium">
                            <header>
                                {{-- {{ $profil->nama }} --}}
                                <h1>Halaman Profile<strong> {{ $pelanggan->nama }}</strong>.</h1>


                            </header>
                            {{-- https://wa.me/{{ $profil->nomor }} --}}
                            {{-- <strong>Miniport</strong>, a free, fully responsive HTML5 site template designed by <a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net">HTML5 UP</a> &amp; released under the <a href="http://html5up.net/license">CCA license</a>. --}}
                            <p>Alamat Rumah:  <strong> {{ $pelanggan->alamat }} </strong></p>
                            <p>Alamat Email:  <strong> {{ $pelanggan->email }} </strong></p>
                            {{-- <a href="" class="button large">Hubungi Saya</a> --}}

                            {{-- {{url('user/'.$pelanggan->id.'/edit')}} --}}
                            <a href="{{url('profilpelEdit')}}" class="button large">Edit Profile</a>

                        </div>
                    </div>
                </div>
            </article>

        <!-- Work -->



            
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
