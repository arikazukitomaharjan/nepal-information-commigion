@extends('admin')

@section('breadcrumb')
    <div class = "portfolio-content-header">
        <h3 class="panel-title">Edit Profile</h3>
    </div>
@stop

@section('adminContent')
    <div class = "portfolio-content">
                        {!! Form::model($album,array('method' => 'PATCH','route'=>array('albums.update',$album->id))) !!}

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
                                 <div class="form-group">
                                     <label><b>NAME</b></label>
                                     {!! Form::select('user_id', $portfolioLists) !!}
                                 </div>

                                <center>{!! form::submit('Update',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}

                    </div>

@stop

