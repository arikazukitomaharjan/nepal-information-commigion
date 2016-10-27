@extends('admin')

@section('breadcrumb')
    <div class = "portfolio-content-header">
        <h3 class="panel-title">Register User</h3>
    </div>
@stop

@section('adminContent')
    <div class = "portfolio-content">

                        
		
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
						

                                                <div class="form-group">
                           <label class="col-md-4 control-label">Name</label>
                           <div class="col-md-6">
                               <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                           </div>
                       </div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

                        <!--- username Input TextBox -->
                        <div class="form-group">
                           <label class="col-md-4 control-label">UserName</label>
                           <div class="col-md-6">
                               <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                           </div>
                       </div>
                       
                      <div class="form-group">
							<label class="col-md-4 control-label">Contact no.</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="contact" value="{{ old('contact') }}">
							</div>
						</div>

                        
						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


@stop
@section('js_code')

   <link href="{{asset('public/select/css/select2.min.css')}}" rel="stylesheet">
<script src="{{ asset('public/select/js/select2.min.js') }}"></script>
@endsection
