@extends('admin')

@section('breadcrumb')
    <div class = "photo-content-header">
        <h3 class="panel-title">Add Photo</h3>
    </div>
@stop

@section('adminContent')
    <div class = "photo-content">

        {!! Form::open(['route'=>'photos.store','files' => true])!!}

        <div class = "col-md-6">
            <div class="form-group">
                <label><b>TITLE</b></label>
                {!! Form::text('title',null,array('class'=>'form-control')) !!}
            </div>

            <div class="form-group">
                <label><b>DESCRIPTIOIN</b></label>
                {!! Form::textarea('description',null,array('class'=>'form-control')) !!}
            </div>

            <div class="form-group">
                <label><b>IMAGE</b></label>
                {!! Form::file('image',null,array('class'=>'form-control')) !!}
            </div>

            <div class="form-group">
                <label><b>DATE CREATED</b></label>
                {!! Form::text('date_created',null,array('class'=>'form-control date-picker')) !!}
            </div>

        </div>
        <div class = "col-md-6">
            <div class="form-group">
                <label><b> STATUS </b></label>
                {!! Form::select('status', ['Draft', 'Published']) !!}
            </div>
            
            
            <div class="form-group">
                <label><b>ALBUM</b></label>
                <select class="form-control" name="album_id">
                    @foreach($albums as $album)
                        <option value="{{$album->id}}">{{$album->title}} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <center>{!! form::submit('Add',[' class'=>'btn btn-primary form-control'])!!}</center>

        {!! Form::close()!!}


    </div>

@stop

