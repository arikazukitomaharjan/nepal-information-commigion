@extends('admin')

@section('breadcrumb')
    <div class="photo-content-header">
        <h3 class="panel-title">Edit Photo</h3>
    </div>
@stop

@section('adminContent')
    <div class="photo-content">
        {!! Form::model($photo, array('method' => 'PATCH','route'=>array('photos.update',$photo->id))) !!}
        <div class="col-md-6">
            <div class="form-group">
                <label><b>TITLE</b></label>
                {!! Form::text('title',null,array('class'=>'form-control')) !!}
            </div>
            <div class="form-group">
                <label><b>DESCRIPTIOIN</b></label>
                {!! Form::textarea('description',null,array('class'=>'form-control')) !!}
            </div>
            <div class="form-group">
                <label><b>DATE CREATED</b></label>
                {!! Form::text('date_created',null,array('class'=>'form-control date-picker')) !!}
            </div>
             <div class="form-group">
                <label><b>IMAGE</b></label>
                {!! Form::file('image_upload',null,array('class'=>'form-control','id'=>'file_uploader')) !!}
                {!! Form::text('image',null,array('class'=>'form-control','id'=> 'file-name','disabled'=>"disabled")) !!}
            </div>
            {!! form::submit('Update',[' class'=>'btn btn-primary form-control'])!!}
        </div>
        <div class="col-md-6">

            <div class="form-group">
                <label><b> STATUS </b></label>
                {!! Form::select('status', ['Draft'=>'Draft', 'Published'=>'Published']) !!}
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
        {!! Form::close()!!}
    </div><!-- end of .photo-content -->
@stop

