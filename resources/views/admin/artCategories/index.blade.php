@extends('admin')

@section('breadcrumb')
<div class="row">
  <div class="col-md-3">
    <h3 class="panel-title">Category</h3>
  </div>
  <div class="col-md-4">

{!! Form::open(array('method' => 'Post', 'url' => 'categoryBy/search')) !!}

            <div class="form-group">
                <label class="sr-only" for="search_text">Search Text</label>
                {!! Form::text('search_text',null,array('class'=>'form-control', 'placeholder' => 'Search Category')) !!}
            </div>
</div>
<div class="col-md-2">

{!! form::submit('Search',[' class'=>'btn btn-primary form-control'])!!}
{!! Form::close() !!}
</div>

<div class="col-md-3">
    <div class="sub-menu">
        <a href="{{url('categories/create')}}"><i class="fa fa-plus-circle fa-2x pull-right"></i></a>
    </div>
</div>
</div>
@stop

@section('adminContent')
    <div class="table-responsive art-content">
        <table class="table table-hover table-striped">
            <thead>
            <th> NAME</th>
            <th> ACTIONS</th>
            </thead>
            <tbody>
            @foreach($categoriesView as $category)
                <tr>
                    <td>{!! $category->name!!}</td>
                    <td>{!! link_to_route('categories.edit', '', array($category->id),array('class' => 'fa fa-pencil fa-fw')) !!}</td>
                   <td>
{!! Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $category->id]]) !!}
    {!! Form::button('<span class="fa fa-trash-o"></span>', array('class'=>'btn btn-default', 'type'=>'submit')) !!}
                                      
{!!Form::close() !!}
</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $categoriesView->render() !!}</div>
    </div>
@stop
