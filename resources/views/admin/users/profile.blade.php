@extends('admin')

@section('breadcrumb')
    <h3 class="panel-title">My Profile</h3>

    <div class="sub-menu">


    </div>
@stop

@section('adminContent')

    <div class="profile-content">


        <div class="panel-body">
            <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">
                    <img class="img-circle" src="{!! url('public/uploads/images/'. $user->image) !!}" >
                   
                     {!! Form::open(['route'=>'updateProfile','files' => true])!!}
                     {!! Form::hidden('id',$users->id) !!}
                         <label><b>IMAGE</b></label>
                         {!! Form::file('image',null,array('class'=>'form-control')) !!}
                    {!! form::submit('Update',[' class'=>'btn btn-primary form-control'])!!}
               
                </div>

              
                <div class=" col-md-9 col-lg-9 ">
                    <table class="table table-user-information">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{!! $users->name !!}</td>
                            </tr>
                           
                            <tr>
                                <td>Email</td>
                                <td>{!! $users->email !!}</td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>{!!$users->password = Hash::make(Input::get('password'))!!}
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>{!! $users->contact !!}</td>
                            </tr>
                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
        <div class="panel-footer">
                        <span class="pull-right">

                            {!! link_to_route('users.edit', '', array($users->id),array('class' => 'btn btn-sm btn-warning fa fa-pencil fa-fw','data-original-title'=> 'Edit this user', 'type' => 'button')) !!}

                        </span>
        </div>


    </div>
@stop


