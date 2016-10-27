<!DOCTYPE HTML>
<html lang="en">
<head>

<!--[if lt IE 9]>
      <script type="text/javascript">window.location.replace("url/ie.php");</script>
    <![endif]-->


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

<title>National Information Commission</title>

<!-- GOOGLE FONTS -->
<link href
	='http://fonts.googleapis.com/css?family=Raleway:400,700,600,800%7COpen+Sans:400italic,400,600,700
	'
	rel='stylesheet' type='text/css' />
<link rel="stylesheet"
	href="{{ asset('public/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('public/css/styles.css') }}" />

<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300'
	rel='stylesheet' type='text/css' />
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
</head>
<!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
      <script src="js/respond.js"></script>
    <![endif]-->

<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-xs-12">
					<h1 id="main-logo">
						<!-- <a href="#" class="hidden-xs">National Information Commission</a> -->
						<a href="#"><img src="{{ asset('public/images/logo.png') }}" class="img-responsive"></a>
					</h1>
				</div>
         
				<div class="col-sm-3 hidden-xs">
					<img src="{{url('public/images/demo/flag.gif')}}" alt="moving nepali national flag">
					<a href="http://www.mis.nic.gov.np/" id="rti-login">Login</a>

				</div>

			</div>
			<!-- row -->
		</div>
		<!-- container -->
	</header>

	 @include('frontend.includes.mobile-menu') 


	<nav id="main-menu" class="hidden-xs">
		<div class="container">
			<div class="row">
				<ul class="col-sm-9 col-md-9 col-lg-10">
					<li class="active"><a href="http://localhost:8083/nic-website"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="{{ url('dynamic-contents/1') }}" class="">{{ trans('frontpage.Who We Are') }}</a></li>
					<li><a href="{{ url('whatWeDo') }}" class="">{{ trans('frontpage.What We Do') }}</a></li>
					<li><a href="{{ url('procedureToRequest') }}" class="">{{ trans('frontpage.Procedure for Request') }}</a></li>
					<li><a href="{{ url('rightsToKnow') }}" class="">{{ trans('frontpage.Rights to Know') }}</a></li>
				</ul>

				<ul class="col-sm-3 col-lg-2" id="lang-select">

					@foreach(LaravelLocalization::getSupportedLocales() as $localeCode
					=> $properties)
					<li><a rel="alternate" hreflang="{{$localeCode}}"
						href="{{LaravelLocalization::getLocalizedURL($localeCode) }}"> {{
							$properties['native'] }} </a></li> @endforeach
				</ul>

			</div>
			<!-- row -->
		</div>
		<!-- container -->
		<div class="clearfix"></div>
	</nav>
	<!-- main-menu -->