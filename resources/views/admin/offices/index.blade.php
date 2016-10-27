@extends('admin')

@section('breadcrumb')
    <h3 class="panel-title">Offices</h3>
    <div class="sub-menu">
       <a href="{{url('offices/create')}}"><i class="fa fa-plus-circle fa-2x pull-right"></i></a>
         
        
    </div>
@stop

@section('adminContent')
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <th>Name</th>
            <th> Development Region</th>
            <th> District</th>
            <th> Phone1</th>
            <th> Phone2</th>
            </thead>
            <tbody>
                <tr>
                    @foreach($offices as $office)
                <tr>
                    <td>{!! $office->name!!}</td>
                    <td>{!! $office->development_region!!}</td>
                    <td>{!! $office->district!!}</td>
                   <td>{!! $office->phone1!!}</td>
                    <td>{!! $office->phone2!!}</td>
                                   
                    <td>{!! link_to_route('offices.edit', '', array($office->id),array('class' => 'fa fa-pencil fa-fw')) !!}</td>
                    <td><button type="button" id="delete-button" class="delete-button" data-url = "{!! url('office_delete')."/".$office->id !!}"><i class="fa fa-trash-o"></i></button>
                </td>
                </tr>
            @endforeach
           
                </tr>
            </tbody>
        </table>
        <div class="pagination"> {!! $offices->render() !!}</div>
    </div>
@stop