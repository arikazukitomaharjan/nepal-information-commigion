@extends('admin')

@section('breadcrumb')
    <h3 class="panel-title">Users</h3>
    <div class="sub-menu">
        <a href="{{url('profiles/create')}}"><i class="fa fa-plus-circle fa-2x pull-right"></i></a>
    </div>
@stop

@section('adminContent')
    <div class="table-responsive portfolio-content">
        <table class="table table-hover table-striped">
            <thead>
            <th> FIRSTNAME</th>
            <th> LASTNAME</th>
            <th> CONTACT</th>
            <th> STATUS</th>
            <th> ACTIONS</th>
            </thead>
            <tbody>

                @foreach($profiles as $profile)
                   <tr>
                    <td>{!! $profile->first_name !!}</td>
                    <td>{!! $profile->last_name !!}</td>
                    <td>{!! $profile->contact_no !!}</td>
                    <td><!-- Single button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                {!! $profile->user->status !!} <span class="caret"></span>
                            </button>
                            
                        </div></td>

                     <td>{!! link_to_route('profiles.edit', '', array($profile->id),array('class' => 'fa fa-pencil fa-fw')) !!}
                       </td>
                       <td><button type="button" id="delete-button" class="delete-button" data-url = "{!! url('profiles')."/".$profile->id !!}"><i class="fa fa-trash-o"></i></button>
                </td>

                @endforeach
            </tr>
            </tbody>
        </table>
        <div class="pagination"> </div>
    </div>
@stop
