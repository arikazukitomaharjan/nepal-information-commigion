<div class="latest-post-content">
    <h2>Latest Posts <i class="fa fa-volume-up"></i></h2>

    <div class="list-group">
        @foreach($articles as $article)
        <a href="{{ url('articles/' . $article->id) }}" class="list-group-item active">
            <h4 class="list-group-item-heading"> <i class="fa fa-angle-double-right"></i> {!! substr($article->title,0,60) !!}</h4>
        </a>
        @endforeach
    </div>
</div> <!-- end .latest-post-content -->
