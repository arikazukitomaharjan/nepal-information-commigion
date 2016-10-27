@section('content')

@include('frontend.header')

  <div id="page-single">
    <div class="container">
    	<div class="row">
         

            @include('frontend.includes.slidingNews')

            <div class="clearfix"></div>
          
        </div>
		    
		    @include('frontend.sidebar-left-page')
            <div align="justify" class="col-sm-9" id="page-main-content">
            @if(isset($news->image))
             <img src="{!! asset('public/uploads/article/'.$news->image) !!}"></img>
             @endif
            <div class="single-product">
                <h3 style="color:#800000;padding-bottom:10px;"><b>{!! switchLangField($news->getAttributes(),'title')!!}</h3>
                

                <p class="news-excerpt">{!! switchLangField($news->getAttributes(), 'description') !!}
            </div>
            </div>
     
	    </div><!-- row -->
		</div><!-- container -->
  </div><!-- home-main -->


@include('frontend.footer')
