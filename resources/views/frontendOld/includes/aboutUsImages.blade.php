@foreach($staff_top_level as $staff)
				 <div class="col-xs-3 col-md-3 col-lg-3">
				    <div class="media staff-details">
				        <div class="media-body">
				            @if($staff->image != "")
				                <img class="media-object thumbnail" src="{!! url('public/uploads/dynamic/'. $staff->image) !!}" style="height:150px; width:200" alt="...">
				            @endif
				        </div>
				        <div class="media-down">
				            <h5 class="media-heading">{!! switchLangField($staff->getAttributes(),'title')!!}</h5>
				
				            <p>{!! switchLangField($staff->getAttributes(), 'description') !!} </p>
				        </div>
				    </div>
				  </div>
				@endforeach
				<br>
				<br>
				@foreach($staff_second_level as $staff)
				 <div class="col-xs-12 col-md-9 col-lg-9">
				    <div class="media staff-details">
				        <div class="media-body">
				            @if($staff->image != "")
				                <img class="media-object thumbnail" src="{!! url('public/uploads/dynamic/'. $staff->image) !!}"  style="height:150px; width:200" alt="...">
				            @endif
				        </div>
				        <div class="media-down">
				            <h5 class="media-heading">{!! switchLangField($staff->getAttributes(),'title')!!}</h5>
				
				            <p>{!! switchLangField($staff->getAttributes(), 'description') !!} </p>
				        </div>
				    </div>
				</div>
				@endforeach