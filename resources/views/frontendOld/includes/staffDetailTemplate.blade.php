@foreach($staff_middle_level as $staff)

        <div class="media staff-details">
            <div class="media-left">
                @if($staff->image != "")
                    <img class="media-object thumbnail" src="{!! url('public/uploads/dynamic/'. $staff->image) !!}" alt="...">
                @endif
            </div>
            <div class="media-body">
                <h5 class="media-heading">{!! switchLangField($staff->getAttributes(),'title')!!}</h5>

                <p>{!! switchLangField($staff->getAttributes(), 'description') !!} </p>
            </div>
        </div>

@endforeach