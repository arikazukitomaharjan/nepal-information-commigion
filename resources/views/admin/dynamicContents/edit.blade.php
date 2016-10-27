@extends('admin')
@section('breadcrumb')
    <div class = "portfolio-content-header">
        <h3 class="panel-title">Edit Content</h3>
    </div>
@stop
@section('adminContent')
    <div class = "article-content">
       {!! Form::model($dynamics,array('method' => 'PATCH','route'=>array('dynamic-contents.update',$dynamics->id))) !!}


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
                     {!! Form::file('image',null,array('class'=>'form-control')) !!}
                 </div>
                   <div class="form-group">
                       <label><b>NAME</b></label>
                      {!! Form::select('user_id', $portfolioLists) !!}
                  </div>

                <center>{!! form::submit('Update',[' class'=>'btn btn-primary form-control'])!!}</center>

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


