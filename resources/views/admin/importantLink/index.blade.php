@extends('admin')

@section('breadcrumb')
    <h3 class="panel-title">Important Link</h3>

    <div class="sub-menu">
        <a href="{{url('important_links/create')}}"><i class="fa fa-plus-circle fa-2x pull-right"></i></a>
    </div>
@stop

@section('adminContent')
<meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="table-responsive art-content">
        <table class="table table-hover table-striped">
            <thead>
            <th> NAME</th>
            <th> DESCRIPTION</th>
             <th> URL</th>
             
                        <th> ACTIONS</th>
            </thead>
            <tbody>
            @foreach($importantLinks as $importantLink)
                <tr>
                    <td>{!! $importantLink->name!!}</td>
                    <td>{!! $importantLink->description!!}</td>
                     <td>{!! $importantLink->url!!}</td>
                     
                    <td>{!! link_to_route('important_links.edit', '', array($importantLink->id),array('class' => 'fa fa-pencil fa-fw')) !!}</td>
                    
<td>
{!! Form::open(['method' => 'DELETE', 'route' => ['important_links.destroy', $importantLink->id]]) !!}
   {!! Form::button('<span class="fa fa-trash-o"></span>', array('class'=>'btn btn-default', 'type'=>'submit')) !!}
                                      
{!!Form::close() !!}
</td>

                               </tr>
            @endforeach
            </tbody>
        </table>
        
    </div>
@stop
