<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
    <title>{{ $title ?? 'Creative STUDIO' }}</title>
    <meta name="description" content="{{ $description }}">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="{{ asset('font/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
</head>

<body>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-60060042-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-60060042-1');
    </script>
    <div class="d-block d-lg-none">
        <div class="col-md-12">
          <h4><strong>Unsere Berührungen:</strong></h4>
          <ul class="list-unstyled">
      <li><img src="/images/adress_f.png" width="32" height="32" alt=""/>Kyiv, 1 Kotsjubinsky Straße, office 107</li>
      <li><img src="/images/fax_f.png" width="32" height="32" alt=""/>Phone.: +34(641) 55-49-38</li>
      <li><img src="/images/phone_f.png" width="32" height="32" alt=""/>mob.phone. : +38(098) 372-15-38</li>
      <li><img src="/images/mail_f.png" width="32" height="32" alt=""/>E-mail: translion@gmail.com</li>
      <li><img src="/images/time_f.png" width="32" height="32" alt=""/>Arbeiten: täglich aus 9:30 zu 18:00 (Ausgangstage: Samstag, Sonntag)</li>
      </ul>
          </div>
        </div> 
    @yield('content')
    <h2>unsere Kunden</h2>
    <div class="dash"></div>
    <div class="well bg-blue">
    <div class="container center-block">
    		<div class="carousel slide" id="Clients">	
			<div class="carousel-inner">
			  <div class="item active"><img src="{{ asset('/images/slider1.jpg') }}" alt="Siemens" /></div>
			</div>
		</div>
    </div>
    </div>
    @include('app.includes.contactde')
    @include('app.includes.footerde')
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
    <div id="scroller"><i class="fa fa-arrow-circle-up fa-5x" style="color: #D96B5D" aria-hidden="true"></i></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://translion.net/ua/share42/share42.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('js/parallax.js') }}"></script>
</body>

</html>