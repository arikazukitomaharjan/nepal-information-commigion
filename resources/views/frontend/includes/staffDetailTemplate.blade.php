<section class="information-officers red-widget">
	<h3 class="header">{{trans('frontpage.Information Officer') }}</h3>

	<div class="section-content">
		@foreach($staff_middle_level as $staff)
		<dl class="with-cover">
			@if($staff->image != "")
			<dt>
				<img src="images/sample/officers.jpg"
					class="img-responsive  img-thumbnail">
			</dt>
			@endif
			<dd>
				<h5><a href="{!! URL("showBiodata/$staff->id") !!}">{!! switchLangField($staff->getAttributes(),'title')!!}</a></h5>
				<p>{!! switchLangField($staff->getAttributes(), 'description') !!}</p>
				<p class="small get-air">
                					<i class="glyphicon glyphicon-phone"></i>9841335899
                				</p>
                				<p class="small">
                					<a href="http://goulochansaiju@nic.gov.np"><i class="glyphicon glyphicon-envelope"></i>goulochansaiju@nic.gov.np</a>

                				</p>
			</dd>
		</dl>
		@endforeach
		<!-- with-cover -->

		<div class="clearfix"></div>


	</div>
	<!-- section-content -->

</section>
<!-- important-news -->