@extends('admin')

@section('breadcrumb')
    <div class = "portfolio-content-header">
        <h3 class="panel-title">Edit Important Link</h3>
    </div>
@stop

@section('adminContent')
    <div class = "artCategory-content">
                        {!!Form::model($importantLink, array('method'=>'PATCH','route'=>array('important_links.update',$importantLink->id)))!!}

                           <fieldset>
                             
                                 <div class="form-group">
                                     <label><b>NAME</b></label>
                                     {!! Form::text('name',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>DESCRIPTION</b></label>
                                     {!! Form::textarea('description',null,array('class'=>'form-control')) !!}
                                 </div>
                                <div class="form-group">
                                     <label><b>URL</b></label>
                                     {!! Form::text('url',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                    <label>TYPE</label>
                                    {!! Form::select('type_id',$type,null,array('id'=>'type_id','class'=>'form-control')) !!}
                                </div>
                                <center>{!! form::submit('Update',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}

                    </div>

@stop

