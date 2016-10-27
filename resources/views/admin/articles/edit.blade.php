@extends('admin')

@section('breadcrumb')
    <div class="portfolio-content-header">
        <h3 class="panel-title">Edit Article</h3>
    </div>
@stop

@section('adminContent')
    <div class="Article-content">

        {!! Form::model($article,array('method' => 'PATCH','route'=>array('articles.update',$article->id))) !!}
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
                            {!! Form::textarea('description_en',null,array('class'=>'ckeditor form-control', 'placeholder'=>'English')) !!}

                        </ul>
                    </div>
                    <div class="tab-pane fade" id="tab2primary">
                        <ul>
                            {!! Form::textarea('description_ne',null,array('class'=>'ckeditor form-control','placeholder'=>'Nepali')) !!}

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
                <label>TAGS</label><br>
                {!! Form::select('tags[]',$tags,null,['id'=>'tag_id','class'=>'form-control','multiple']) !!}
            </div>
            <div class="form-group">
                <label><b>TYPE</b></label>
                {!! Form::select('type', ['News','Event']) !!}
            </div>
            <div class="form-group">
                <label><b>STATUS</b></label>
                {!! Form::select('status', ['Draft','Published']) !!}
            </div>
            <div class="form-group">
                <label><b>Image</b></label>
                {!! Form::file('image',null,array('class'=>'form-control')) !!}
            </div>

            <center>{!! form::submit('Update',[' class'=>'btn btn-primary form-control'])!!}</center>

        </fieldset>
        {!! Form::close()!!}

    </div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop