@section('content') @include('frontend.header')

<div id="page-single">
	<div class="container">
		<div class="row">


			@include('frontend.includes.slidingNews')

			<div class="clearfix"></div>

		</div>

		@include('frontend.sidebar-left-page')
		<div class="col-sm-9" id="page-main-content">
		@if($articles == NUll)
		{{ "NO ARTICLES WERE FOUND"  }}
		@else
			<ul class="latestnews">
			
			
				@foreach($articles as $article)
				<li>

					<div class="media-body">
						<h4 class="media-heading">
							<a href="{!! URL(" articleDescription/$article->id") !!}">{!!
								switchLangField($article->getAttributes(), "title") !!}</a>
						</h4>

						<div class="date-block">
							<i class="fa fa-clock-o"></i>{!!
							$article->created_at->diffForHumans() !!}
						</div>

						<p class="news-excerpt">{!!
							mb_substr(switchLangField($article->getAttributes(),
							"description"),0,105) !!}</p>

					</div>

				</li> @endforeach
			</ul>
@endif
		</div>

		<!-- @include('frontend.sidebar-right-page') -->

	</div>
	<!-- row -->
</div>
<!-- container -->
</div>
<!-- home-main -->


@include('frontend.footer')
