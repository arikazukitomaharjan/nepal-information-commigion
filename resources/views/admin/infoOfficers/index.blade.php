@extends('admin')

@section('breadcrumb')
    <h3 class="panel-title">Information Officers</h3>
    <div class="sub-menu">
       <a href="{{url('infoOfficers/create')}}"><i class="fa fa-plus-circle fa-2x pull-right"></i></a>
         <a href="{{url('infoOfficerExport')}}"><i class="fa fa-chevron-circle-up fa-2x pull-right"></i></a>
        <a href="{{url('infoOfficerImportFileSelect')}}"><i class="fa fa-chevron-circle-down fa-2x pull-right"></i></a>
       
    </div>
@stop

@section('adminContent')
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <th> NAME</th>
            <th> PHONE</th>
            <th> EMAIL</th>
            <th> Office NAME</th>
            </thead>
            <tbody>
           
                @foreach($infoOfficers as $infoOfficer)
                <tr>
                    
                    <td>{!! $infoOfficer->name !!}</td>
                    <td>{!! $infoOfficer->phone !!}</td>
                    <td>{!! $infoOfficer->email !!}</td>
                    <td>{!! $infoOfficer->office_id !!}</td>
                    <td>{!! link_to_route('infoOfficers.edit', '', array($infoOfficer->id),array('class' => 'fa fa-pencil fa-fw')) !!}</td>
                    <td><button type="button" id="delete-button" class="delete-button" data-url = "{!! url('album_delete')."/".$infoOfficer->id !!}"><i class="fa fa-trash-o"></i></button>
                </td>                
            @endforeach
                </tr>
            </tbody>
        </table>
        <div class="pagination"> {!! $infoOfficers->render() !!}</div>
    </div>
@stop