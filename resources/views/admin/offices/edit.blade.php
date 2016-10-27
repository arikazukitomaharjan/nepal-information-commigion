@extends('admin')

@section('breadcrumb')
    <div class = "portfolio-content-header">
        <h3 class="panel-title">Edit Profile</h3>
    </div>
@stop

@section('adminContent')
    <div class = "portfolio-content">
                        {!! Form::model($office,array('method' => 'PATCH','route'=>array('infoOfficers.update',$office->id))) !!}

                            <fieldset>
                                 <div class="form-group">
                                     <label><b>OFFICE NAME</b></label>
                                     {!! Form::text('name',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>DEVELOPMENT REGION</b></label>
                                     {!! Form::text('development_region',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>DISTRICT</b></label>
                                     {!! Form::text('district',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>EMAIL</b></label>
                                     {!! Form::text('email',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>ADDRESS</b></label>
                                     {!! Form::text('address',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>PHONE1</b></label>
                                     {!! Form::text('phone1',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>PHONE2</b></label>
                                     {!! Form::text('phone2',null,array('class'=>'form-control')) !!}
                                 </div>
               

                                <center>{!! form::submit('Edit',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}

                    </div>

@stop

