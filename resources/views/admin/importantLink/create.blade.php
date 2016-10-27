@extends('admin')

@section('breadcrumb')
    <div class = "portfolio-content-header">
        <h3 class="panel-title">Add Important Link</h3>
    </div>
@stop

@section('adminContent')
    <div class = "article-content">

                        {!! Form::open(['route'=>'important_links.store'])!!}

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
                                <center>{!! form::submit('Add',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}

                    </div>

@stop

