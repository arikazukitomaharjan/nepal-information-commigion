@section('content')

@include('frontend.header')

  <div id="page-single">
    <div class="container">
    	<div class="row">

        <div class="col-sm-12">
          <div id="scroll-news" class="hidden-xs">

            <h6 class="news-title">News</h6>

            <div class="news-content">
              <div class="TickerNews" id="header-news-scroll">
                <div class="ti_wrapper">
                  <div class="ti_slide">
                    <div class="ti_content">
                      <div class="ti_news"><a href="#">11:00 US fisherman rescued by tanker after 66 days lost at sea. </a> </div>
                      <div class="ti_news"><a href="#">12:00 Overseas aid must rise by £1bn in next two years, says Europe. </a></div>
                      <div class="ti_news"><a href="#">13:00 Muslim population looks likely to double in size. </a></div>
                      <div class="ti_news"><a href="#">15:00 Heathrow cuts passenger levy to boost domestic flights. </a></div>
                      <div class="ti_news"><a href="#">16:00 Couple plotted to sell their new baby online for €5,000. </a></div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="clearfix"></div>

            </div><!-- news-content -->

            <div class="clearfix"></div>
          </div><!-- scroll-news -->
        </div>
		    
		    @include('frontend.sidebar-left-page')

		     <div class="media-body">
                        <p class="text-right">By admin | <i
                                    class="fa fa-clock-o"></i> {!! $article->created_at->diffForHumans() !!}</p>

                         {!! switchLangField($article->getAttributes(), "description") !!}
                        <!--  {{ $article->description_ne }} -->
                        <!-- {!! $article->title_ne !!}<br>-->
                      <!--   {!! $article->description_ne !!}<br> -->
                       <div class="media">
                    @if($article->image != "")

                         <div>
              <img class="" src="{!! URL::asset('public/uploads/article/'.$article->image) !!}"  alt="" />
               </div>
               

                    @endif                       
                       
                                  
                         </div>
                </div>
		    
        @include('frontend.sidebar-right-page')

	    </div><!-- row -->
		</div><!-- container -->
  </div><!-- home-main -->


@include('frontend.footer')