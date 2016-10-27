@extends('admin')

@section('breadcrumb')
    <meta name="_token" content="{{ csrf_token() }}" />

    <div class="portfolio-content-header">
        <h3 class="panel-title">Add Articles</h3>
    </div>
@stop

@section('adminContent')
    <div class="article-content">

        {!! Form::open(['route'=>'articles.store','files' => true,'id'=>'form-name'])!!}

        <fieldset>
            <div class="form-group">
                <label><b>TITLE</b></label>
                {!! Form::text('title_en',null,array('class'=>'form-control','placeholder'=>'English')) !!}
            </div>
            <div class="form-group">
                <label><b>TITLE</b></label>
                {!! Form::text('title_ne',null,array('class'=>'form-control','placeholder'=>'Nepali')) !!}
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1primary" data-toggle="tab">english</a></li>
                        <li><a href="#tab2primary" data-toggle="tab"> nepali</a></li>

                    </ul>
                     <div class="tab-pane fade in active" id="tab1primary">
                        <ul>
                            {!! Form::textarea('description_en',null,array('class'=>'form-control ck_en','id'=>'ck_en','placeholder'=>'English')) !!}

                        </ul>
                    </div>
                    <div class="tab-pane fade" id="tab2primary">
                        <ul>
                            {!! Form::textarea('description_ne',null,array('class'=>'form-control ck_ne','id'=>'ck_ne','placeholder'=>'Nepali')) !!}

                        </ul>

                    </div>
                </div>
            </div>
            <div class="form-group">
                <label><b>DATE CREATED</b></label>
                {!! Form::text('date_created',null,array('class'=>'form-control date-picker')) !!}
            </div>
            <div class="form-group">
                <label>CATEGORY</label>
                {!! Form::select('category_id',$category,null,array('id'=>'category_id','class'=>'form-control')) !!}
            </div>

            <div class="form-group">
                <label><b>TYPE</b></label>
                {!! Form::select('type', ['News'=>'News','Event'=>'Event']) !!}
            </div>
            <div class="form-group">
                <label><b>STATUS</b></label>
                {!! Form::select('status', ['Draft'=>'Draft','Published'=>'Published']) !!}
            </div>
            <div class="form-group">
                <label><b>Image</b></label>
                {!! Form::file('image',null,array('class'=>'form-control')) !!}
            </div>
             <!-- {!! Form::file('docs',null,array('class'=>'form-control')) !!} -->
             <div class="form-group"><label><b>Files Upload</b></label><br>
             <span class="btn btn-success fileinput-button">
            <i class="glyphicon glyphicon-plus"></i>
            <span>Select files...</span> 
             <input type='file' name='docs[]' id='filesToUpload' multiple/>
           </span>
           </div>
           <ul id='fileList' name='files-ul-list'>
			</ul>
         <br>
        <br>
             
             
            {!! Form::hidden('user_id',$user->id) !!}
			</div>
            {!! form::submit('Add',[' class'=>'btn btn-primary form-control'])!!}

        </fieldset>
        {!! Form::close()!!}
         
         
         
         
         
        <!-- The global progress bar -->
        <div id="progress" class="progress">
            <div class="progress-bar progress-bar-success"></div>
        </div>
        <!-- The container for the uploaded files -->
        <div id="files" class="files"></div>
        <br>
         
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

@stop
@section('js_code')
      <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
       CKEDITOR.replace( 'ck_en' );
    </script>
       <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
       CKEDITOR.replace( 'ck_ne' );
    </script>

@stop



