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
                            <a href="{{route('editProfilePel')}}" class="button large">Edit Profile</a>

                        </div>
                    </div>
                </div>
            </article>

        <!-- Work -->
            <article id="work" class="wrapper style2">
                <div class="container">
                    {{-- <header>
                        <h2>Here's all the stuff I do.</h2>
                        <p>Odio turpis amet sed consequat eget posuere consequat.</p>
                    </header> --}}
                    <div class="row aln-center">
                        <div class="col-4 col-6-medium col-12-small">
                            <section class="box style1">
                                <span class="icon featured fa-thumbs-up"></span>
                                <h3>Terpercaya</h3>
                                <p>Terpercaya dalam bekerja</p>
                            </section>
                        </div>
                    </div>
                    <footer>
                        <a href="#portfolio" class="button large scrolly">Sertifikat dan Data diri</a>
                    </footer>
                </div>
            </article>

        <!-- Portfolio -->
            <article id="portfolio" class="wrapper style3">
                <div class="container">
                    <header>
                        <h2>Sertifikat dan data diri</h2>
                    </header>
                    <div class="row">
                        <div class="col-4 col-6-medium col-12-small">
                            <article class="box style2">
                                <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                                <h3><a href="#">Magna feugiat</a></h3>
                                <p>Ornare nulla proin odio consequat.</p>
                            </article>
                        </div>
                        <div class="col-4 col-6-medium col-12-small">
                            <article class="box style2">
                                <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                                <h3><a href="#">Veroeros primis</a></h3>
                                <p>Ornare nulla proin odio consequat.</p>
                            </article>
                        </div>
                        <div class="col-4 col-6-medium col-12-small">
                            <article class="box style2">
                                <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                                <h3><a href="#">Lorem ipsum</a></h3>
                                <p>Ornare nulla proin odio consequat.</p>
                            </article>
                        </div>
                        <div class="col-4 col-6-medium col-12-small">
                            <article class="box style2">
                                <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
                                <h3><a href="#">Tempus dolore</a></h3>
                                <p>Ornare nulla proin odio consequat.</p>
                            </article>
                        </div>
                        <div class="col-4 col-6-medium col-12-small">
                            <article class="box style2">
                                <a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
                                <h3><a href="#">Feugiat aliquam</a></h3>
                                <p>Ornare nulla proin odio consequat.</p>
                            </article>
                        </div>
                        <div class="col-4 col-6-medium col-12-small">
                            <article class="box style2">
                                <a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
                                <h3><a href="#">Sed amet ornare</a></h3>
                                <p>Ornare nulla proin odio consequat.</p>
                            </article>
                        </div>
                    </div>
                    {{-- <footer>
                        <p>Kerjakan Saya :)</p>
                        <a href="#contact" class="button large scrolly">Beri Kerja</a>
                    </footer> --}}
                </div>
            </article>

        <!-- Contact -->
            <article id="contact" class="wrapper style4">
                <div class="container medium">
                    <header>
                        <h2>Berikan Ulasan</h2>
                        <p>Tolong berikan ulasannya</p>
                        <br>
                        <div>
                            <div class="rateyo mx-auto" id="rating"
                                data-rateyo-rating="4"
                                data-rateyo-num-stars="5"
                                data-rateyo-score="3">
                            </div>
                            <span class='result'>0</span>
                            <input type="hidden" name="rating">
                        </div>
                    </header>
                    <div class="row">
                        <div class="col-12">
                            <form method="post" action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <textarea name="message" id="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <ul class="actions">
                                            <li><input type="submit" value="Kirim Review" /></li>
                                            <li><input type="submit" value="Edit Review" /></li>
                                            <li><input type="reset" value="Clear Form" class="alt" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                        {{-- <div class="col-12">
                            <hr />
                            <h3>Find me on ...</h3>
                            <ul class="social">
                                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
                                <li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                                <li><a href="#" class="icon brands fa-tumblr"><span class="label">Tumblr</span></a></li>
                                <li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
                                <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
                                <!--
                                <li><a href="#" class="icon solid fa-rss"><span>RSS</span></a></li>
                                <li><a href="#" class="icon brands fa-instagram"><span>Instagram</span></a></li>
                                <li><a href="#" class="icon brands fa-foursquare"><span>Foursquare</span></a></li>
                                <li><a href="#" class="icon brands fa-skype"><span>Skype</span></a></li>
                                <li><a href="#" class="icon brands fa-soundcloud"><span>Soundcloud</span></a></li>
                                <li><a href="#" class="icon brands fa-youtube"><span>YouTube</span></a></li>
                                <li><a href="#" class="icon brands fa-blogger"><span>Blogger</span></a></li>
                                <li><a href="#" class="icon brands fa-flickr"><span>Flickr</span></a></li>
                                <li><a href="#" class="icon brands fa-vimeo"><span>Vimeo</span></a></li>
                                -->
                            </ul>
                            <hr />
                        </div> --}}
                    </div>
                </div>
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
