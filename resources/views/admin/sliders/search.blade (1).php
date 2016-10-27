@extends('admin')

@section('breadcrumb')
 <div class="row">
  <div class="col-md-3">
    <h3 class="panel-title">Slider</h3>
  </div>
  <div class="col-md-4">

{!! Form::open(array('method' => 'Post', 'url' => 'slider/search')) !!}

            <div class="form-group">
                <label class="sr-only" for="search_text">Search Text</label>
                {!! Form::text('search_text',null,array('class'=>'form-control', 'placeholder' => 'Search Slider')) !!}
            </div>
</div>
<div class="col-md-2">

{!! form::submit('Search',[' class'=>'btn btn-primary form-control'])!!}
{!! Form::close() !!}
</div>

<div class="col-md-3">
    <div class="sub-menu">
        <a href="{{url('sliders/create')}}"><i class="fa fa-plus-circle fa-2x pull-right"></i></a>
    </div>
</div>
</div>
   
@stop

@section('adminContent')
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <th> ID</th>
            <th> TITLE</th>
          <th> DESCRIPTION</th>
            <th> STATUS</th>
            <th> USERNAME</th>
            <th> ACTIONS</th>
            </thead>
            <tbody>
               @foreach($sliders as $slider)
                               <tr>
                                   <td>{!! $slider->id !!}</td>
                                   <td>{!! $slider->title !!}</td>
                                   <td>{!! substr($slider->description,0,30) !!}</td>
                                   <td>{!! $slider->status !!}</td>
                                   <td>{!! $slider->user->username!!}</td>

                                   <td>{!! link_to_route('sliders.edit', '', array($slider->id),array('class' => 'fa fa-pencil fa-fw')) !!}</td>
                                 <td>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['sliders.destroy', $slider->id]]) !!}
  
                                        {!! Form::button('<span class="fa fa-trash-o"></span>', array('class'=>'btn btn-default', 'type'=>'submit')) !!}
                                        {!!Form::close() !!}
                                    </td>
               @endforeach
                               </tr>
            </tbody>
        </table>
    </div>
@stop