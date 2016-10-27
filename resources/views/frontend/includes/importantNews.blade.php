<h4 class="hr-with-border">{{ trans('frontpage.Important News') }}</h4>
<ul class="latestnews">
    @foreach($importantnews as $news)
        <li>
            <i class="fa fa-angle-double-right container-no-default-margin"></i>
            <a href="{!! URL("articleDescription/$news->id") !!}">
                {!! mb_substr(switchLangField($news->getAttributes(), "title"),0,50) !!}
            </a>
        </li>
    @endforeach
</ul>