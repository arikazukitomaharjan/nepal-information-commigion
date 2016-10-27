<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="active"><a href="#procedure"
		aria-controls="procedure" role="tab" data-toggle="tab">{{
			trans('frontpage.Organizational Procedure') }}</a></li>
	<li role="presentation"><a href="#diary" aria-controls="diary"
		role="tab" data-toggle="tab">{{ trans('frontpage.Organizational
			Diary') }}</a></li>
	<li role="presentation"><a href="#report" aria-controls="report"
		role="tab" data-toggle="tab">{{ trans('frontpage.Trimester Reports')
			}}</a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="procedure">
		<ul>
			@foreach($tabs[0] as $news)
			<li><a href="{!! url('articles',$news->id)!!}"> {!!
					switchLangField($news->getAttributes(), 'title') !!} </a></li>
			@endforeach
		</ul>
	</div>
	<div role="tabpanel" class="tab-pane" id="diary">
		<ul>
			@foreach($tabs[1] as $news)
			<li><a href="{!! url('articles',$news->id)!!}"> {!!
					switchLangField($news->getAttributes(), 'title') !!} </a></li>
			@endforeach
		</ul>
	</div>
	<div role="tabpanel" class="tab-pane" id="report">
		<ul>
			@foreach($tabs[1] as $news)
			<li><a href="{!! url('articles',$news->id)!!}"> {!!
					switchLangField($news->getAttributes(), 'title') !!} </a></li>
			@endforeach
		</ul>
	</div>
</div>

