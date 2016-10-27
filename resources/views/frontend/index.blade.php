@section('content')

@include('frontend.header')
@include('frontend.splash')

<div id="home-main">
	<div class="container">
		<div class="row">
		     @include('frontend.sidebar-left')

			@include('frontend.home')
			
			@include('frontend.sidebar-right')
			</div> <!-- row -->
	</div>
	<!-- container -->
</div>
<!-- home-main -->

@include('frontend.footer')


</body>
</html>

	
