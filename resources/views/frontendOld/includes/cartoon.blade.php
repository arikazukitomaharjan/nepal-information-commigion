<h4 class="cartoon-header h4-without-margin">{{ trans('frontpage.Cartoon') }}</h4>
<ul class = "cartoon">
    @foreach($cartoon as $news)
            <li>
                <a href="{!! url('articles', $news->id)!!}">
                   <img class="img-responsive" src="{!! url('public/uploads/article/'. $news->image) !!}" >
                </a>
            </li>
    @endforeach
</ul>