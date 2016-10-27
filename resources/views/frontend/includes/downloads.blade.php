<div class="col-sm-2" >
	<section class="important-news red-widget">
		<h3 class="header">Downloads</h3>
		<div class="section-content">
			<ul class="latestnews">

				@if($articlePdfs != "") 
				@foreach($articlePdfs as $pdf)
				<span>{!! $pdf !!} </span> <span><a href="{!! URL('displayPdfContent/'.$pdf) !!}"><i class="fa fa-download"></i></a></span><br>
				@endforeach
				 @endif

			</ul>
		</div>
		<!-- section-content -->

	</section>
	<!-- important-news -->

</div>
<!-- col -->