@extends('admin')

@section('breadcrumb')
    <div class = "portfolio-content-header">
        <h3 class="panel-title">Add Profile</h3>
    </div>
@stop

@section('adminContent')
    <div class = "portfolio-content">

                        {!! Form::open(['route'=>'profiles.store','files' => true])!!}
                        <fieldset>                             

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
    				<div class="form-group">
                                         <label><b>ROLE</b></label>
                                         {!! Form::select('user_id', $users, null, ['class'=>'form-control'])!!}
                                </div>
                                                               

                                <center>{!! form::submit('Add',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}

                    </div>


@stop
@section('js_code')

   <link href="{{asset('public/select/css/select2.min.css')}}" rel="stylesheet">
<script src="{{ asset('public/select/js/select2.min.js') }}"></script>
@endsection
