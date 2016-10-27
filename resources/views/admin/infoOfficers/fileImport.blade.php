@extends('admin')

@section('breadcrumb')
    <h3 class="panel-title">Import Information Officer</h3>
    <div class="sub-menu">
       <a href="{{url('infoOfficers/create')}}"><i class="fa fa-info-circle fa-2x pull-right"></i></a>
         <a href="{{url('infoOfficerExport')}}"><i class="fa fa-chevron-circle-up fa-2x pull-right"></i></a>
        <a href="{{url('infoOfficerImportFileSelect')}}"><i class="fa fa-chevron-circle-down fa-2x pull-right"></i></a>
        
    </div>
@stop

@section('adminContent')
 {!! Form::open(['route'=>'importInfoOfficerData','files' => true])!!}
 {!! Form::file('csv_file',null,array('class'=>'form-control')) !!}
 {!! form::submit('Import',[' class'=>'btn btn-primary form-control'])!!}
 {!! Form::close()!!}
 
@stop
