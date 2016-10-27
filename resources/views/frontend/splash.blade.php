<div id="splash">

  <div class="container">
    <div class="row">
     @include('frontend.includes.slidingNews')
        <div class="row">

          
             @include('frontend.sidebar-left-page')
              
          <div class="col-xs-12 col-md-6 pl0 pr0">
            <section id="home-slider">
              <div class="flexslider">
                <ul class="slides">
                @foreach($sliders as $slider)
                  <li>
                    <a href="#">

                      <img src="{!! url('public/uploads/slider/'.$slider->image) !!}" class="img-responsive" style="width:600px; height:314px;" >
                      <p class="caption">{!! $slider->title!!}</p>
                    </a>
                  </li>

                  @endforeach
                </ul>
              </div><!-- flexslider -->
            </section>  <!-- home-news-slider --> 
          </div><!-- col -->
          
               @include('frontend.sidebar-right-page')
             

        </div><!-- row -->

      </div><!-- col -->

    </div><!-- row -->
  </div><!-- container -->

</div><!-- splash -->