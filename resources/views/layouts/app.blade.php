<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Reto') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/imagenes/logo.png" alt="Logo AzulDiagnostic">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('tienda') }}">Tienda</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('promociones') }}">Promociones</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('trabajo') }}">Trabajo</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('eventos') }}">Eventos</a>
                      </li>
                        <!-- Authentication Links -->
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
					</div>
					<!-- footer logo -->

					<!-- footer nav -->
					<div class="col-md-6">
            <h5 class="text-center">Contacto</h5>
						<ul class="footer-contacto">
              <li><a href="mailto:ventas@azuldiagnostic.com"><i class="far fa-envelope"></i> Envianos un correo: ventas@azuldiagnostic.com</a></li>
              <li><a><i class="fab fa-whatsapp"></i> WhatsApp: 55 1867 7815</a></li>
              <li><a><i class="fas fa-phone-volume"></i> Llamanos: 0155 2625 7055</a></li>
						</ul>
					</div>
					<!-- /footer nav -->

				</div>
				<!-- /row -->

				<!-- row -->
        <br>
				<div id="bottom-footer" class="row">

					<!-- social -->
          <br>
					<div class="col-md-4 col-md-push-8">
						<ul class="footer-social">
              <li><a href="https://www.facebook.com/azuldiagnosticsadecv/" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://twitter.com/AzulDiagnostic" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/azuldiagnostic/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" class="youtube"><i class="far fa-question-circle"></i></a></li>
							<li><a href="#" class="linkedin"><i class="fas fa-book-open"></i></a></li>
						</ul>
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright 2018. Derechos reservados. | Desarrollado por: <i class="fa fa-heart-o" aria-hidden="true"></i><a href="https://colorlib.com">Damian Gonzalez</a></span>
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->


		<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
