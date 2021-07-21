<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>List Security</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('HomeAssets/assets/css/main.css')}}" />
		<noscript><link rel="stylesheet" href="{{asset('HomeAssets/assets/css/noscript.css')}}" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">PRT</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
                            <li><a href="pelanggan">Home</a></li>
                            <li><a href="profilpel">Profile</a></li>
                            <li><a href="tentangkami">Tentang Kami</a></li>
                            <li><a href="logout">Keluar</a></li>
						</ul>
					</nav>

				@yield('content')

		<!-- Scripts -->

			<script src="{{asset('HomeAssets/assets/js/jquery.min.js')}}"></script>
			<script src="{{asset('HomeAssets/assets/js/browser.min.js')}}"></script>
			<script src="{{asset('HomeAssets/assets/js/breakpoints.min.js')}}"></script>
			<script src="{{asset('HomeAssets/assets/js/util.js')}}"></script>
			<script src="{{asset('HomeAssets/assets/js/main.js')}}"></script>
	</body>
</html>
