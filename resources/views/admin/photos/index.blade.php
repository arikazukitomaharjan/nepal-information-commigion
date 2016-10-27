@extends('admin')

@section('breadcrumb')
    <h3 class="panel-title">Gallery </h3>

    <div class="sub-menu">
        <a href="{{route('photos.create')}}"><i class="fa fa-plus-circle fa-2x pull-right"></i></a>
    </div>
@stop

@section('adminContent')
    <div class="photo-content">
        @foreach($photos as $photo)

            <div class="col-lg-2 col-md-3 col-xs-6 thumbnail">
                <div class="thumbnail-btn">
                    <a href="{{url('photos/'.$photo->id.'/edit')}}">
                        <i class="fa fa-pencil"></i>
                    </a> &nbsp
                    <a class="delete-photo" href="#">
                        <i class="fa fa-trash"></i>
                    </a>

                </div>
                <a href="{!! asset('public/uploads/images/' . $photo->image) !!}">
                    <img class="img-responsive" src="{!! url('public/uploads/thumbnails/' . $photo->image) !!}" alt="{!! $photo->title !!}">
                </a>
            </div>

        @endforeach

        <div class="pagination">

        {!! $photos->render()!!}

        </div>

    </div>
@stop

