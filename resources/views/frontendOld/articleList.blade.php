@extends('frontend')
@section('content')

    @include('frontend.includes.nav')
    <div class="container-fluid page-container single-article-page">

        <div class="row">

            <div class="col-xs-12 col-md-3 col-lg-3">
                @include('frontend.includes.leftMenu')
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6">

                <h3>{!! $category !!} </h3>


                <ul class="latestnews">
                    @foreach($articles as $article)
                        <li>

                            <div class="media-body">
                                <h4 class="media-heading"> <a href="{!! URL("articleDescription/$article->id") !!}">{!! switchLangField($article->getAttributes(), "title") !!}</a></h4>

                                <div class="date-block"> <i class="fa fa-clock-o"></i>{!! $article->created_at->diffForHumans() !!}</div>

                                <p class="news-excerpt">
                                    {!! mb_substr(switchLangField($article->getAttributes(), "description"),0,105) !!}
                                </p>

                            </div>

                        </li>
                    @endforeach
                </ul>

                <div class="pagination"> {!! $articles->render() !!}</div>

            </div>

            <div class="col-xs-12 col-md-3 col-lg-3">

                @include('frontend.includes.search')

                @include('frontend.includes.cartoon')

            </div>

        </div>

    </div>
    @include('frontend.includes.footer')
@stop