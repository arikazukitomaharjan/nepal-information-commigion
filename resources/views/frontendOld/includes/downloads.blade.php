<h4 class="hr-with-border">Downloads</h4><br><br>

<ul class="latestnews">

	@if($articlePdfs != "") @foreach($articlePdfs as $pdf)
	<a href="{!! URL('displayPdfContent/'.$pdf) !!}">{!! $pdf !!}</a>
	@endforeach @endif

</ul>