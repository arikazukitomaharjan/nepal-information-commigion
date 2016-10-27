@extends('admin')

@section('breadcrumb')
    <h3 class="panel-title">Article</h3>
    <div class="sub-menu">
        <a href="{{url('articles/create')}}"><i class="fa fa-plus-circle fa-2x pull-right"></i></a>
         
        <a href="{{url('articlesImportFileSelect')}}"><i class="fa fa-plus-circle fa-2x pull-right"></i></a>
        
    </div>
@stop

@section('adminContent')
 {!! Form::open(['route'=>'importData','files' => true])!!}
 {!! Form::file('csv_file',null,array('class'=>'form-control')) !!}
 {!! form::submit('Import',[' class'=>'btn btn-primary form-control'])!!}
 {!! Form::close()!!}
 
@stop
