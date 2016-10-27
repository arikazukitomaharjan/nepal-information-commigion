@extends('admin')

@section('breadcrumb')
    <div class = "portfolio-content-header">
        <h3 class="panel-title">Add Category</h3>
    </div>
@stop

@section('adminContent')
    <div class = "article-content">

                        {!! Form::open(['route'=>'categories.store'])!!}

                            <fieldset>
                                 <div class="form-group">
                                     <label><b>NAME</b></label>
                                     {!! Form::text('name',null,array('class'=>'form-control')) !!}
                                 </div>
	                                <div class="form-group">
	                				 <label><b>TYPE</b></label>
	                				{!! Form::select('menuType', array('Select'=>'Select','Parent'=>'Parent','Child'=>'Child'),null,array('id' => 'menuType')) !!}
	            					</div>
                              <div class="form-group">
	                				 <label><b>Parent Menu</b></label>
                              {!! Form::select('parentMenuType', array('Select'=>'Select'),null,array('id' => 'parentMenuType')) !!}
                              </div>
                                    
                                 <div class="form-group">
                                     <label><b>DESCRIPTION</b></label>
                                     {!! Form::textarea('description',null,array('class'=>'form-control')) !!}
                                 </div>


                                <center>{!! form::submit('Add',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}

                    </div>
@stop

