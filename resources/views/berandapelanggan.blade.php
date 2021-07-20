 @extends('layouts.pelanggan')
 @section('content')

 <div class="content-body">
    <div id="wrapper">
    <div id="main">
        <div class="inner">
            <header>
                <h1>This is Phantom, a free, fully responsive site<br />
                template designed by <a href="http://html5up.net">HTML5 UP</a>.</h1>
                <p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
            </header>
            <section class="tiles">
                <article class="style1">
                    <span class="image">
                        <img src="HomeAssets/images/pic01.jpg" alt="" />
                    </span>
                    <a href={{ route('listart') }}>
                        <h2>Asisten Rumah Tangga</h2>
                        <div class="content">
                            <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
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
                            <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
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
                            <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
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
                            <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
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
                            <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
                        </div>
                    </a>
                </article>
                <article class="style6">
                    <span class="image">
                        <img src="HomeAssets/images/pic06.jpg" alt="" />
                    </span>
                    <a href="generic.html">
                        <h2>Pekerja Aktif Dan Riwayat</h2>
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
