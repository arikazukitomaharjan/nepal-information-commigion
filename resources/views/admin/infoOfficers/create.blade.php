@extends('admin')

@section('breadcrumb')
    <div class = "portfolio-content-header">
        <h3 class="panel-title">Add Information Officer</h3>
    </div>
@stop

@section('adminContent')
    <div class = "album-content">

                        {!! Form::open(['route'=>'infoOfficers.store'])!!}

                            <fieldset>
                                 <div class="form-group">
                                     <label><b>NAME</b></label>
                                     {!! Form::text('name',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>ADDRESS</b></label>
                                     {!! Form::text('address',null,array('class'=>'form-control')) !!}
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
                					<label><b>CATEGORY</b></label>
               						 {!! Form::select('category', ['Central'=>'Central','District'=>'District']) !!}
           						 </div>
                                 <div class="form-group">
                                    <label>OFFICE</label>
                                     {!! Form::select('office_id',$offices,null,array('class'=>'form-control')) !!}
                                 </div>
									
                                <center>{!! form::submit('Add',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}

                    </div>
                </div>

        </div>
    </div>
</div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop

