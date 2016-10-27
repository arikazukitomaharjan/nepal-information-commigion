@extends('admin')

@section('breadcrumb')
    <h3 class="panel-title">Content</h3>
    <div class="sub-menu">
        <a href="{{url('dynamic-contents/create')}}"><i class="fa fa-plus-circle fa-2x pull-right"></i></a>
    </div>
@stop

@section('adminContent')
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <th> ID</th>
            <th> TITLE</th>
            <th> STATUS</th>
            <th> USERNAME</th>
            <th> ACTIONS</th>
            </thead>
            <tbody>
               @foreach($dynamics as $dynamic)
                               <tr>
                                   <td>{!! $dynamic->id !!}</a></td>
                                   <td>{!! $dynamic->title !!}</a></td>
                                   <td>{!! $dynamic->status !!}</td>
                                   <td>{!! $dynamic->user->all()[0]->username !!}</td>
                                   <td>{!! link_to_route('dynamic-contents.edit', '', array($dynamic->id),array('class' => 'fa fa-pencil fa-fw')) !!}</td>

               @endforeach
                               </tr>
            </tbody>
        </table>

    </div>
@stop