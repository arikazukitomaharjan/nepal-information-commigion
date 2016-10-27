@extends('frontend')
@section('content')


    <div class="page-content artist-search">
        <div class="col-md-9">

            <div class="single-product">
                @foreach($articles as $article)

                    <h2>{!! $article->title!!}</h2>

                    <h6>{!!$article->date_created!!}</h6>

                    <p>{!! substr($article->description,0,200) !!} </p>

                    <a class="read-more" href="{{url('articles',$article->id)}}"><i class="fa fa-angle-double-right"></i>Read More</a>
                @endforeach
            </div>
            <!-- end .single-product -->



            <div class="pagination-center">

                <div class="pagination"> {!! $articles->render() !!}</div>

            </div>

        </div>
        <!-- end main grid layout -->

        <div class="col-lg-3 right-sidebar">
            @include('frontend/joinUs')
            @include('frontend/searchMenus')
        </div>
        <!-- end right sidebar grid layout .right-sidebar -->

    </div> <!-- end #page-content .portfolio -->


@stop