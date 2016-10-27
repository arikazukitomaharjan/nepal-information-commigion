@extends('admin')

@section('breadcrumb')
    <div class = "portfolio-content-header">
        <h3 class="panel-title">Add Office</h3>
    </div>
@stop

@section('adminContent')
    <div class = "album-content">

                        {!! Form::open(['route'=>'offices.store'])!!}

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
                                     <label><b>CENTRAL</b></label>
                                     {!! Form::text('central',null,array('class'=>'form-control')) !!}
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
                                <div class="form-group">
                					<label><b>TYPE</b></label>
               						 {!! Form::select('type', ['मन्त्रालय विभाग र निकाय','संबैधानिक निकाय','आयोग','संस्थान','परिषद्','सहकारी संस्था','वैंक','वैक तथा वितिय संस्था','क्लव','कम्पनि','संचार']) !!}
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

