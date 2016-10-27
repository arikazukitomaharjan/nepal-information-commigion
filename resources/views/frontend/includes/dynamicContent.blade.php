@section('content') @include('frontend.header')

<div id="page-single">
	<div class="container">
		<div class="row">


			@include('frontend.includes.slidingNews')

			<div class="clearfix"></div>
          
        </div>
		    
		    @include('frontend.sidebar-left-page')

		      <div class="col-sm-9" id="page-main-content" align="justify">
                <div class="media">
               <h3 style="color:#800000;padding-bottom:10px;"><b> {!! switchLangField($dynContent->getAttributes(), 'title') !!}</b></h3>
                     {!! switchLangField($dynContent->getAttributes(), 'description') !!}
                    </div>
                    <div> 
                @if($dynContent->id == 1 )
				@include('frontend.includes.aboutUsImages')
				@endif
                </div>
                
            </div>
       

	    </div>
	<!-- row -->
</div>
<!-- container -->
</div>
<!-- home-main -->


@include('frontend.footer')
