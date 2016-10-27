@extends('frontend')
@section('content')

    @include('frontend.includes.nav')
    <div class="container-fluid page-container single-article-page">

        <div class="row">

            <div class="col-xs-12 col-md-3 col-lg-3">
                @include('frontend.includes.leftMenu')
            </div>

            <div class="col-xs-24 col-md-9 col-lg-9">
                <div class="media">
               <h3> {!! switchLangField($dynContent->getAttributes(), 'title') !!}</h3>
                     {!! switchLangField($dynContent->getAttributes(), 'description') !!}
                  
                </div>
                @if($dynContent->id == 1 )
				@include('frontend.includes.aboutUsImages')
				@endif
            </div>

           <!--  <div class="col-xs-12 col-md-3 col-lg-3">

                @include('frontend.includes.importantNews')

            </div> -->

        </div>

    </div>
    @include('frontend.includes.footer')
@stop