<div class="block-header col-xs-12">
    <h4>{{ trans('frontpage.Success Stories') }}</h4>
    <nav>
        <ul class="control-box pager">
            <li><a data-slide="prev" href="#myCarousel" class=""><i class="fa fa-chevron-left"></i></a>
            </li>
            <li><a data-slide="next" href="#myCarousel" class=""><i class="fa fa-chevron-right"></i></a>
            </li>
        </ul>
    </nav>
</div>


<!-- /.control-box -->
<div class="carousel successstories-slide col-xs-12" id="myCarousel">
    <div class="carousel-inner">
        <div class="item active">
            <ul class="thumbnails">
                @foreach($successstories[0] as $successstory)
                    <li class="col-sm-6">
                            <div class="thumbnail">
                                <a href="{!! url('articles', $successstory['id'])!!}"><img src="{!! url('public/uploads/article/'. $successstory['image']) !!}" alt=""></a>

                                <div class="caption">
                                    {!! $successstory['title_en']   !!}
                                </div>
                            </div>

                    </li>
                @endforeach
            </ul>
        </div>
        <!-- /Slide1 -->
        <div class="item">
            <ul class="thumbnails">
                @foreach($successstories[1] as $successstory)

                    <li class="col-sm-6">
                        <div class="thumbnail">
                            <a href="{!! url('articles', $successstory['id'])!!}"><img src="{!! url('public/uploads/article/'. $successstory['image']) !!}" alt=""></a>

                            <div class="caption">
                                {!! $successstory['title_en']   !!}
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- /Slide2 -->

    </div>


</div><!-- /#myCarousel -->