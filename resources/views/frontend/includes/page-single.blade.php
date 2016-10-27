
Currently editing:  
/home/robustit/public_html/nic-website/resources/views/frontend/includes/page-single.blade.php
 Encoding:    Reopen  Switch to Code Editor     Close  Save

<div align="justify" class="col-sm-7" id="page-main-content">

	
	<div class="page-meta">
		<ul>
			<li><i class="glyphicon glyphicon-user"></i> admin</li>
			<li><i class="glyphicon glyphicon-time"></i>{!! $article->created_at->diffForHumans() !!}</li>
		</ul>
	</div>

	<article>

		<h3 style="color:#800000;padding-bottom:10px;"><b>{!! switchLangField($article->getAttributes(), "title") !!}</h3></b>
<div class="media">
				@if($article->image != "")
				<div>
					<img class=""
						src="{!! URL::asset('public/uploads/article/'.$article->image) !!}"
						alt="" />
				</div>
				@endif


			</div>
		<div class="media-body">
			<p class="news-excerpt">{!! switchLangField($article->getAttributes(), "description") !!}</p>		
			
		</div>

	</article>


</div>
<!-- page-main-content -->
