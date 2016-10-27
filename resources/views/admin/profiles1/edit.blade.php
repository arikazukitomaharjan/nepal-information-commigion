@extends('admin')

@section('breadcrumb')
    <div class = "portfolio-content-header">
        <h3 class="panel-title">Edit Profile</h3>
    </div>
@stop

@section('adminContent')
    <div class = "portfolio-content">

                        {!! Form::model($profiles,array('method' => 'PATCH','route'=>array('profiles.update',$profiles->id))) !!}


                                <div class="form-group">
                                     <label><b>FIRST NAME</b></label>
                                     {!! Form::text('first_name',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>LAST NAME</b></label>
                                     {!! Form::text('last_name',null,array('class'=>'form-control')) !!}
                                 </div>
                              

                                  <div class="form-group">
                                     <label><b>DESCRIPTION</b></label>
                                     {!! Form::text('description',null,array('class'=>'form-control')) !!}
                                 </div>
                                  
                       
                                   <div class="form-group">
                                         <label><b>CONTACT NO.</b></label>
                                         {!! Form::text('contact_no',null,array('class'=>'form-control')) !!}
                                    </div>

                            </div>

                                <center>{!! form::submit('Update',[' class'=>'btn btn-primary form-control'])!!}</center>


                        {!! Form::close()!!}

                    </div>

@stop

