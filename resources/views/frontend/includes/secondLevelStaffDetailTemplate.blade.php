<section class="officers red-widget">
	<h3 class="header">{{ trans('frontpage.Secretary')}}</h3>
	<div class="section-content">

		@foreach($staff_second_level as $staff)
		<dl class="with-cover">
			@if($staff->image != "")
			<dt>
				<img src="{!! asset('public/images/sample/officers.jpg') !!}"
					class="img-responsive  img-thumbnail">
			</dt>
			@endif
			<dd>
				<h5><a href="{!! URL("showBiodata/$staff->id") !!}">{!! switchLangField($staff->getAttributes(),'title') !!}</a></h5>
				<span>{!! switchLangField($staff->getAttributes(), 'description') !!}</span>
			</dd>
		</dl>
		<!-- with-cover -->

		@endforeach
	</div>
	<!-- section-content -->
</section>
<!-- important-news -->