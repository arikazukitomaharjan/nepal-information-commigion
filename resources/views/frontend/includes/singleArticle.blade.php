@section('content')
@include('frontend.header')

  <div id="page-single">
    <div class="container">
    	<div class="row">
         

            @include('frontend.includes.slidingNews')

            <div class="clearfix"></div>
          
        </div>
		    
		    @include('frontend.sidebar-left-page')

		     @include('frontend.includes.page-single')
		     
         @include('frontend.includes.downloads')

	    </div><!-- row -->
		</div><!-- container -->
  </div><!-- home-main -->


@include('frontend.footer')