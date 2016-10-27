<div class="col-xs-12 col-md-3">
	<section class="important-news red-widget">
		<h3 class="header">Important News</h3>
		<div class="section-content">
			<ul>
				@foreach($importantnews as $news)
				<li><a href="{!! URL("articleDescription/$news->id") !!}"> {!!
						mb_substr(switchLangField($news->getAttributes(), "title"),0,50)
						!!} </a></li> @endforeach
			</ul>
		</div>
		<!-- section-content -->

	</section>
	<!-- important-news -->

</div>
<!-- col -->