@extends('admin')
@section('breadcrumb')
    <div class = "portfolio-content-header">
        <h3 class="panel-title">Add Content</h3>
    </div>
@stop
@section('adminContent')
    <div class = "article-content">
        {!! Form::open(['route'=>'dynamic-contents.store','files' => true])!!}

            <fieldset>
                 <div class="form-group">
                     <label><b>TITLE</b></label>
                     {!! Form::text('title',null,array('class'=>'form-control')) !!}
                 </div>
                 <div class="form-group">
                     <label><b>DESCRIPTIOIN</b></label>
                     {!! Form::textarea('description',null,array('class'=>'form-control text-editor')) !!}
                 </div>
                 <div class="form-group">
                     <label><b>STATUS</b></label>
                     {!! Form::text('status',null,array('class'=>'form-control')) !!}
                 </div>
                <div class="form-group">
                <label><b>IMAGE</b></label>
                {!! Form::file('image_file',null,array('class'=>'form-control')) !!}

                {!! Form::text('image',null,array('class'=>'form-control','id'=> 'file-name','disabled' => 'disabled')) !!}
            </div>
                   <div class="form-group">
                       <label><b>NAME</b></label>
                      {!! Form::select('user_id', $portfolioLists) !!}
                  </div>

                <center>{!! form::submit('Add',[' class'=>'btn btn-primary form-control'])!!}</center>

            </fieldset>
        {!! Form::close()!!}
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                   <li> {{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

@stop


