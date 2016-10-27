@extends('admin')

@section('breadcrumb')
    <h3 class="panel-title">Users</h3>
    <div class="sub-menu">
        <a href="{{url('users/create')}}"><i class="fa fa-plus-circle fa-2x pull-right"></i></a>
    </div>
@stop

@section('adminContent')
    <div class="table-responsive portfolio-content">
        <table class="table table-hover table-striped">
            <thead>
            <th> NAME</th>
            <th> EMAIL</th>
            <th> PASSWORD</th>
            <th> CONTACT</th>
            
            <th> ACTIONS</th>
            </thead>
            <tbody>

                @foreach($users as $profile)
                   <tr>
                    <td>{!! $profile->name !!}</td>
                    <td>{!! $profile->email !!}</td>
                    <td>{!! substr($profile->password,0,20)!!}</td>
                    <td>{!! $profile->contact !!}</td>
                 

                     <td>{!! link_to_route('users.edit', '', array($profile->id),array('class' => 'fa fa-pencil fa-fw')) !!}
                       </td><td>
{!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $profile->id]]) !!}
  
                                        {!! Form::button('<span class="fa fa-trash-o"></span>', array('class'=>'btn btn-default', 'type'=>'submit')) !!}
                                        {!!Form::close() !!}
                       </td>
              

                @endforeach
            </tr>
            </tbody>
        </table>
        <div class="pagination"> </div>
    </div>
@stop