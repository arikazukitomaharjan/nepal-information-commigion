@extends('frontend')
@section('content')


    <div class="page-content artist-search">

        <div class="col-md-9">
            <h2>News</h2>

            <div class="single-product">
                <h4>{!! switchLangField($news->getAttributes(),'title')!!}</h4>
                <h6>{!!$news->date_created!!}</h6>

                <p>{!! switchLangField($news->getAttributes(), 'description') !!} </p>
            </div>
        </div>
        <!-- end main grid layout -->

        <div class="col-lg-3 right-sidebar">

        </div>
        <!-- end right sidebar grid layout .right-sidebar -->

    </div> <!-- end #page-content .portfolio -->


@stop
