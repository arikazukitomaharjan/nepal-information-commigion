@extends('admin')

@section('breadcrumb')
    <div class = "portfolio-content-header">
        <h3 class="panel-title">Edit Category</h3>
    </div>
@stop

@section('adminContent')
    <div class = "artCategory-content">
                        {!!Form::model($category, array('method'=>'PATCH','route'=>array('categories.update',$category->id)))!!}

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


                                <center>{!! form::submit('Update',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}

                    </div>

@stop

