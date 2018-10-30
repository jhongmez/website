{{-- This body main of project --}}
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Jhon Gómez Marín">
	<meta name="generator" content="Laravel 5.7">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	{{-- keywords --}}
	<meta name="keywords" content="Industrias Maviltex, maviltex, Industria Textil, Textiles Manizales, Textiles Colombia, textiles Pereira, Textiles Cali, Textiles Ibague, Textiles Dorada, sector textil, confeccion de ropa, Vestidos de baño, vestidos de baño niña, vestidos de baño dama, vestidos de baño mujer, pantalonetas, pantalonetas hombre, pantalonetas niño, www.maviltex.com.co, vestidos de baño manizales, vestidos de baño caldas, Bikini, monokini, salidas de baño, industria textil caldas">
	{{-- Website description --}}
	<meta name="description" content="Empresa licenciataria oficial de Walt Disney, fundada en el año 2004 en el sector textil enfocada a diseño, confección y comercialización de vestidos de baño a través de la prestación de servicios de excelente calidad, contamos con 15 años de experiencia en el mercado">
	<title>Industrias Maviltex S.A.S | Bienvenido</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/master.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
	<link rel="stylesheet" href="{{ asset('css/sweetalert2.all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
</head>
<body>
	{{-- This is a navbar bootstrap and include of laravel --}}
	@include('layout/navbar')
	
	{{-- this is a footer --}}
	<section id="footer" style="background-color: #333;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="text-center" style="color: #fff;">&copy; 2018  Todos los derechos reservados.</p>
				</div>
			</div>
		</div>
	</section>
	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/sweetalert2.all.min.js')}}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/all.min.js') }}"></script>
	<script>
		$('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:0,
		    autoplay:false,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:1
		        }
		    }
		});

		@if(session('status'))
		    swal('Felicidades!', '{{ session('status') }}','success');
		@endif

		$(".nav li a").click(function(){				
			var strAncla = $(this).attr('href'); // id del ancla
			$('body,html').stop(true,true).animate({				
				scrollTop: $(strAncla).offset().top
			},1000);
		});
	</script>
</body>
</html>