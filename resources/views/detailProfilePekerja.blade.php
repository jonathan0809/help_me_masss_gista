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
                    <a href="" class="button large">Beri Ulasan</a>
                    <a href="#contact" class="button large scrolly">Beri Kerja</a>
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
                    {{-- <a href="#portfolio" class="button large scrolly">Sertifikat dan Data diri</a> --}}
                </footer>
            </div>
        </article>

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
                            <a href="#" class="image featured"><img src="{{ asset('storage/'.$profil->dokumen) }}" alt="" /></a>
                            <h3><a href="#">KTP</a></h3>
                            <p></p>
                        </article>
                    </div>
                    <div class="col-4 col-6-medium col-12-small">
                        <article class="box style2">
                            <a href="#" class="image featured"><img src="{{ asset('storage/'.$profil->smp) }}" alt="" /></a>
                            <h3><a href="#">IJAZAH SMP</a></h3>
                            <p></p>
                        </article>
                    </div>
                    <div class="col-4 col-6-medium col-12-small">
                        <article class="box style2">
                            <a href="#" class="image featured"><img src="{{ asset('storage/'.$profil->sma) }}" alt="" /></a>
                            <h3><a href="#">IJAZAH SMA</a></h3>
                            <p></p>
                        </article>
                    </div>
            </div>
        </article>

    <!-- Contact -->
        <article id="contact" class="wrapper style4">
            {{-- <div class="container medium">
                <header>
                    <h2>Have me make stuff for you.</h2>
                    <p>Ornare nulla proin odio consequat sapien vestibulum ipsum.</p>
                </header>
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="#">
                            <div class="row">
                                <div class="col-6 col-12-small">
                                    <input type="text" name="name" id="name" placeholder="Name" />
                                </div>
                                <div class="col-6 col-12-small">
                                    <input type="text" name="email" id="email" placeholder="Email" />
                                </div>
                                <div class="col-12">
                                    <input type="text" name="subject" id="subject" placeholder="Subject" />
                                </div>
                                <div class="col-12">
                                    <textarea name="message" id="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><input type="submit" value="Send Message" /></li>
                                        <li><input type="reset" value="Clear Form" class="alt" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12">
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
                    </div>
                </div> --}}
                <footer>
                    <ul id="copyright">
                        <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                    </ul>
                </footer>
            </div>
        </article>
        @endsection
