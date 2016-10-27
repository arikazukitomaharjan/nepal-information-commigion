<style>
h3{
color:#800000;
}
img{
padding:10px 10px 10px 10px;

}
</style>
<div>
<br>
<br>

<h3 class="header"><b>{{trans('frontpage.Commissioners') }}</b></h3>
<br>
@foreach($staff_top_level as $staff)
				 <div class="col-xs-4 col-md-4 col-lg-4">
				    <div class="media staff-details">
				        <div class="media-body">
				            @if($staff->image != "")
				                <img class="media-object thumbnail img-responsive" src="{!! url('public/uploads/dynamic/'. $staff->image) !!}"  alt="..." >
				            @endif
				        </div>
				        <div class="media-down">
				            <h5 class="media-heading">{!! switchLangField($staff->getAttributes(),'title')!!}</h5>

				            <p>{!! switchLangField($staff->getAttributes(), 'description') !!} </p>
				        </div>
				    </div>
				  </div>
				@endforeach
</div>

<div>
	<br>
<br>			@foreach($staff_second_level as $staff)

				 <div class="col-xs-12 col-md-10 col-lg-9">
<br>
<br>
<h3 class="header"><b>{{trans('frontpage.Secretary') }}</b></h3>
				    <div class="media staff-details">
				        <div class="media-body">
				            @if($staff->image != "")
				                <img class="media-object thumbnail img-responsive" src="{!! url('public/uploads/dynamic/'. $staff->image) !!}"  alt="..." style="height:280px; width:248px;>
				            @endif
				        </div>
				        <div class="media-down">
				            <h5 class="media-heading">{!! switchLangField($staff->getAttributes(),'title')!!}</h5>
				
				            <p>{!! switchLangField($staff->getAttributes(), 'description') !!} </p>
				        </div>
				    </div>
				</div>
				@endforeach
</div>