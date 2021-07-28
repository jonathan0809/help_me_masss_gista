<!DOCTYPE HTML>
<!--
	Miniport by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Miniport by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
		<link rel="stylesheet" href="{{asset('ProfileAssets/assets/css/main.css')}}" />
        {{-- {{asset('ProfileAssets/assets/css/main.css')}} --}}
	</head>


    {{-- <i class="fa fa-chevron-left" aria-hidden="true"></i> --}}

	<body class="is-preload">

                    @yield('content')
					<footer>
						<ul id="copyright">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>
				</div>
			</article>

		<!-- Scripts -->
			<script src="{{asset('ProfileAssets/assets/js/jquery.min.js')}}"></script>
			<script src="{{asset('ProfileAssets/assets/js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('ProfileAssets/assets/js/browser.min.js')}}"></script>
			<script src="{{asset('ProfileAssets/assets/js/breakpoints.min.js')}}"></script>
			<script src="{{asset('ProfileAssets/assets/js/util.js')}}"></script>
			<script src="{{asset('ProfileAssets/assets/js/main.js')}}"></script>
            <script src="{{ asset('alert/sweetalert2.all.min.js') }}"></script>
        @yield('script')
        <script>

            $(document).ready( function () {
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-dark',
                        denyButton: 'btn btn-danger',
                        cancelButton: 'btn btn-secondary'
                    },
                    buttonsStyling: false
                })

                var flash = "{{ Session::has('sukses') }}";
                if(flash){
                    var pesan = "{{ Session::get('sukses') }}"
                    swalWithBootstrapButtons.fire({
                        title: 'Sukses',
                        text: pesan,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    })
                }

                var gagal = "{{ Session::has('gagal') }}";
                if(gagal){
                    var pesan = "{{ Session::get('gagal') }}"
                    swalWithBootstrapButtons.fire({
                        title: 'Error',
                        text: pesan,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    })
                }
            });

        </script>
	</body>
</html>
