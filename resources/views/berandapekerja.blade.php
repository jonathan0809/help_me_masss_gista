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
                        <h2>Riwayat</h2>
                        <div class="content">
                            <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
                        </div>
                    </a>
                </article>
            </section>
        </div>
    </div>
    </div>
</div>


@endsection
