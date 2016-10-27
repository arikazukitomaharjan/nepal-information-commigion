@extends('admin')
@section('breadcrumb')
    <div class="portfolio-content-header">
        <h3 class="panel-title">Edit Sliders</h3>
    </div>
@stop
@section('adminContent')
    <div class="article-content">
        {!! Form::model($slider,array('method' => 'PATCH','route'=>array('sliders.update',$slider->id),'files' => true)) !!}
        <fieldset>
            <div class="form-group">
                <label><b>TITLE</b></label>
                {!! Form::text('title',null,array('class'=>'form-control')) !!}
            </div>
            <div class="form-group">
                <label><b>DESCRIPTION</b></label>
                {!! Form::textarea('description',null,array('class'=>'form-control text-editor')) !!}
            </div>
            <div class="form-group">
                <label><b>STATUS</b></label>
                {!! Form::select('status', ['Draft' => 'Draft', 'Published' => 'Published']) !!}
            </div>
            <div class="form-group">
                <label><b>IMAGE</b></label>
                {!! Form::file('image_upload',null,array('class'=>'form-control','id'=>'file_uploader')) !!}
                {!! Form::text('image',null,array('class'=>'form-control','id'=> 'file-name','disabled'=>"disabled")) !!}
            </div>
            <div class="form-group">
                <label><b>NAME</b></label>
                {!! Form::select('user_id', $portfolioLists) !!}
            </div>

            {!! form::submit('Update',[' class'=>'btn btn-primary form-control'])!!}

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


