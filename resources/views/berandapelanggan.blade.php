 @extends('layouts.pelanggan')
 @section('content')

 <div class="content-body">
    <div id="wrapper">
    <div id="main">
        <div class="inner">
            <header>
                <h1>Selamat datang Pelanggan, {{ Auth::user()->username }}.<br />
                </a></h1>
                <p></p>
            </header>
            <section class="tiles">
                <article class="style1">
                    <span class="image">
                        <img src="HomeAssets/images/pic01.jpg" alt="" />
                    </span>
                    <a href={{ route('listart') }}>
                        <h2>Asisten Rumah Tangga</h2>
                        <div class="content">
                            <p>Melihat daftar pekerja Asisten Rumah Tangga</p>
                        </div>
                    </a>
                </article>
                <article class="style2">
                    <span class="image">
                        <img src="HomeAssets/images/pic02.jpg" alt="" />
                    </span>
                    <a href="{{ route('listbaby') }}">
                        <h2>Baby Sitter</h2>
                        <div class="content">
                            <p>Melihat daftar pekerja Baby Sitter</p>
                        </div>
                    </a>
                </article>
                <article class="style3">
                    <span class="image">
                        <img src="HomeAssets/images/pic03.jpg" alt="" />
                    </span>
                    <a href="{{ route('listpengasuh') }}">
                        <h2>Pengasuh Orang Tua (Lansia)</h2>
                        <div class="content">
                            <p>Melihat daftar pekerja Pengasuh Orang Tua (Lansia)</p>
                        </div>
                    </a>
                </article>
                <article class="style4">
                    <span class="image">
                        <img src="HomeAssets/images/pic04.jpg" alt="" />
                    </span>
                    <a href="{{ route('listsecurity') }}">
                        <h2>Security</h2>
                        <div class="content">
                            <p>Melihat daftar pekerja Security</p>
                        </div>
                    </a>
                </article>
                <article class="style5">
                    <span class="image">
                        <img src="HomeAssets/images/pic05.jpg" alt="" />
                    </span>
                    <a href="{{ route('listsupir') }}">
                        <h2>Supir</h2>
                        <div class="content">
                            <p>Melihat daftar pekerja Supir</p>
                        </div>
                    </a>
            </section>
        </div>
    </div>
    </div>
</div>


@endsection
