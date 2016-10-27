@extends('admin')

@section('breadcrumb')
    <div class = "portfolio-content-header">
        <h3 class="panel-title">Edit Profile</h3>
    </div>
@stop

@section('adminContent')
    <div class = "portfolio-content">
                        {!! Form::model($users,array('method' => 'PATCH','route'=>array('users.update',$users->id))) !!}
					

                                                <div class="form-group">
                           <label class="col-md-4 control-label">Name</label>
                           <div class="col-md-6">
                               {!! Form::text('name',null,array('class'=>'form-control')) !!}
                           </div>
                       </div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								{!! Form::text('email',null,array('class'=>'form-control')) !!}
							</div>
						</div>

                        <!--- username Input TextBox -->
                        <div class="form-group">
                           <label class="col-md-4 control-label">UserName</label>
                           <div class="col-md-6">
                               {!! Form::text('username',null,array('class'=>'form-control')) !!}
                                 
                           </div>
                       </div>
                       
                      <div class="form-group">
							<label class="col-md-4 control-label">Contact no.</label>
							<div class="col-md-6">
								{!! Form::text('contact',null,array('class'=>'form-control')) !!}
                                 
							</div>
						</div>



						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Update
								</button>
							</div>
						</div>
					  {!! Form::close()!!}
				</div>
			</div>
		</div>
	</div>
@stop

