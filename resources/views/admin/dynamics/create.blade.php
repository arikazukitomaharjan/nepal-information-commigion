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
                                     <label><b>TITLE (English)</b></label>
                                     {!! Form::text('title_en',null,array('class'=>'form-control','placeholder'=>'English')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>TITLE (Nepali)</b></label>
                                     {!! Form::text('title_ne',null,array('class'=>'form-control','placeholder'=>'Nepali')) !!}
                                 </div>
                 <div class="panel-body">
                                     <div class="tab-content">
                                         <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab1primary" data-toggle="tab">English</a></li>
                                            <li><a href="#tab2primary" data-toggle="tab"> Nepali</a></li>
                                            
                                         </ul>
                                          <div class="tab-pane fade in active" id="tab1primary">
                                            <ul>
                                            {!! Form::textarea('description_en',null,array('class'=>'form-control text-editor','placeholder'=>'English')) !!}
                               
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="tab2primary">
                                            <ul>
                                            {!! Form::textarea('description_ne',null,array('class'=>'form-control text-editor','placeholder'=>'Nepali')) !!}
                              
                                            </ul>

                                        </div>
                                      </div>
                                  </div>
                 <div class="form-group">
                <label><b>STATUS</b></label>
                {!! Form::select('status', ['Draft'=>'Draft','Published'=>'Published']) !!}
            </div>
                 <div class="form-group">
                    <label><b>IMAGE</b></label>
                    {!! Form::file('image_file',null,array('class'=>'form-control','id'=>'file_uploader')) !!}
                    {!! Form::text('image',null,array('class'=>'form-control','id'=> 'file-name','disabled'=>"disabled")) !!}
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


