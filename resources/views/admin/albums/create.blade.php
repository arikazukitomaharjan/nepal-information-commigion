@extends('admin')

@section('breadcrumb')
    <div class = "portfolio-content-header">
        <h3 class="panel-title">Add Album</h3>
    </div>
@stop

@section('adminContent')
    <div class = "album-content">

                        {!! Form::open(['route'=>'albums.store'])!!}

                            <fieldset>
                                 <div class="form-group">
                                     <label><b>TITLE</b></label>
                                     {!! Form::text('title',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>DESCRIPTIOIN</b></label>
                                     {!! Form::textarea('description',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>DATE CREATED</b></label>
                                     {!! Form::text('date_created',null,array('class'=>'form-control date-picker')) !!}
                                 </div>
                                  {!! Form::hidden('user_id',$user->id) !!}

                                <center>{!! form::submit('Add',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}

                    </div>
                </div>

        </div>
    </div>
</div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop

