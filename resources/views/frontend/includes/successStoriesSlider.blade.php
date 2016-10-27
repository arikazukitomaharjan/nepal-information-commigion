<h3 class="header">{{ trans('frontpage.Success Stories') }}</h3>

<div class="success-story-slider">
 <ul class="slides">
  @foreach($successstories as $successstory)
 
  <li>
<div class="col-md-1"></div>
              <div class="col-md-5">
  <a href="{!! url('articleDescription', $successstory['id'])!!}" class="flex-cover"><img src="{!! url('public/uploads/article/'.$successstory->image) !!}"
    class="img-responsive" style="width:300px;height:100px">
    
  </a>
  </div>
  <div class="col-md-6 flex-descs">
  <a href="{!! url('articleDescription', $successstory['id'])!!}"><p class="caption">{!! mb_substr($successstory['title_en'],0,150) !!}</p></a>
                        
  <a href="{!! url('articleDescription', $successstory['id'])!!}">read more....</a>
  </div>
  
  </li>
   @endforeach
 </ul>

</div>

<!-- flexslider -->