<style>
h3{
color:#800000;padding-bottom:10px;
}
</style>
<div align="justify" class="col-sm-9" id="page-main-content">
	<!-- <div class="page-meta">
		<ul>
			<li><i class="glyphicon glyphicon-user"></i> admin</li>
			<li><i class="glyphicon glyphicon-time"></i> 2015 years ago</li>
		</ul>
	</div> -->
        <section class="important-news red-widget">
	<h3><b>{{ trans("frontpage.$category") }}</b></h3>
       </section>

<ul class="list-group">
		@foreach($articles as $article)
		<li class="list-group-item">
			<div class="date-block">
					<i class="fa fa-clock-o"></i>{!!
					$article->created_at->diffForHumans() !!}
				</div>
			<div class="media-body">
				<h4 class="media-heading">
					<a href="{!! URL("articleDescription/$article->id") !!}"><b>{!! switchLangField($article->getAttributes(),'title')!!}</b></a>
				</h4>
				<p class="news-excerpt">{!!
					mb_substr(switchLangField($article->getAttributes(),
					"description"),0,250) !!}</p><a style="color:red;" href="{!! URL("articleDescription/$article->id") !!}">Read more... </a>

			</div>

		</li> @endforeach
	</ul>
	<div class="pagination">{!! $articles->render() !!}</div>




</div>
<!-- page-main-content -->