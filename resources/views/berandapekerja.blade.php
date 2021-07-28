 @extends('layouts.pekerja')
 @section('content')

 <div class="content-body">
    <div id="wrapper">
    <div id="main">
        <div class="inner">
            <header>
                <h1><h1>Selamat datang Pekerja, {{ Auth::user()->username }}.<br /><br />
                <a href="http://html5up.net"></a></h1>
                <p></p>
            </header>
            <section class="tiles">
                <article class="style6">
                    <span class="image">
                        <img src="HomeAssets/images/pic06.jpg" alt="" />
                    </span>
                    <a href="{{ route('riwayatDataPek') }}">
                        <h2>Kontrak dan Riwayat</h2>
                        <div class="content">
                            <p>Melihat kontrak dan riwayat</p>
                        </div>
                    </a>
                </article>
            </section>
        </div>
    </div>
    </div>
</div>


@endsection
