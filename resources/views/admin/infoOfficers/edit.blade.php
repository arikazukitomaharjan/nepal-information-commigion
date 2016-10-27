@extends('admin')

@section('breadcrumb')
    <div class = "portfolio-content-header">
        <h3 class="panel-title">Edit Profile</h3>
    </div>
@stop

@section('adminContent')
    <div class = "portfolio-content">
                        {!! Form::model($office,array('method' => 'PATCH','route'=>array('offices.update',$office->id))) !!}

                            <fieldset>
                                 <div class="form-group">
                                     <label><b>NAME</b></label>
                                     {!! Form::text('name',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>ADDRESS</b></label>
                                     {!! Form::textarea('address',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>EMAIL</b></label>
                                     {!! Form::text('email',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>PHONE</b></label>
                                     {!! Form::text('phone',null,array('class'=>'form-control')) !!}
                                 </div>
                   
                                 <div class="form-group">
                                    <label>OFFICE</label>
                                     {!! Form::select('office_id',$offices,null,array('class'=>'form-control')) !!}
                                 </div>

                                <center>{!! form::submit('Add',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                                <center>{!! form::submit('Update',[' class'=>'btn btn-primary form-control'])!!}</center>

                        
                        {!! Form::close()!!}

                    </div>

@stop

