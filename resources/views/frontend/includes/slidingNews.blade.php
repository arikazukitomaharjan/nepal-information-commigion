        <div id="scroll-news" class="hidden-xs hidden-md">

          <h6 class="news-title">{{ trans('frontpage.News') }}</h6>

          <div class="news-content ">
            <div class="TickerNews" id="header-news-scroll">
              <div class="ti_wrapper">
                <div class="ti_slide">
<div class="ti_content">
                 @foreach($sliding_news as $news)
                  
                        <div class="ti_news"><a href="{!! URL("articleDescription/$news->id") !!}">{!! switchLangField($news->getAttributes(), 'title') !!}
                        </a> 
                  </div> 
                 
                  @endforeach
 </div>
                </div>
              </div>
            </div>


            <div class="clearfix"></div>

          </div><!-- news-content -->

          <div class="clearfix"></div>
        </div><!-- scroll-news -->
