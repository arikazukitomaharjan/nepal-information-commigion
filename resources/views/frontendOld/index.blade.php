@extends('frontend')

@section('content')
    @include('frontend.includes.nav')

    <div class="container-fluid">
        <div class="row first-row">
            <div class="col-xs-12 col-md-3 col-lg3">
                @include('frontend/includes/leftMenu')
            </div>
            <div class="col-xs-12 col-md-9 col-lg9 container-no-default-margin" ng-app="NicA">
                <div ng-controller="ImageSliderCtrl"
                     class="col-xs-12 col-md-7 col-lg7 container-no-default-margin slider-container">
                    <div>
                        <carousel interval="myInterval">
                            <slide ng-repeat="slide in slides" active="slide.active">
                                <img ng-src="public/uploads/slider/<% slide.image %>" style="margin:auto;">

                                <div class="carousel-caption">
                                    <h4><% slide.title %></h4>
                                    <p><% slide.description %></p>
                                </div>
                            </slide>
                        </carousel>
                    </div>
                </div>

                <div class="col-xs-12 col-md-5 col-lg5">
                    @include('frontend.includes.importantNews')
                </div>
                @include('frontend.includes.aboutUsDynamicTemplate')
            </div>
        </div>
        <!--first-row-->
<br>
        <!--second-row-->
        <div class="row second-row">
            <!--left-->
            <div class="col-sm-3 container-no-default-margin">
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading"><h4 class="h4-without-margin">{{ trans('frontpage.Officers') }}</h4></div>
                    <div class="panel-body">
                        @include('frontend.includes.topLevelStaffDetailTemplate')
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading"><h4 class="h4-without-margin">{{ trans('frontpage.Secretary') }}</h4></div>
                    <div class="panel-body">
                        @include('frontend.includes.secondLevelStaffDetailTemplate')
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading"><h4 class="h4-without-margin">{{ trans('frontpage.Information Officers') }}</h4></div>
                    <div class="panel-body">
                        @include('frontend.includes.staffDetailTemplate')
                    </div>
                </div>
            </div>
            <!--/left-->

            <!--center-->
            <div class="col-sm-6 container-no-default-margin">

                <hr>
                <div class="row">
                    <div class="col-xs-12">
                        @include('frontend.includes.tabs')
                    </div>
                    <div class="col-xs-12">
                        @include('frontend.includes.successStoriesSlider')
                    </div>
                </div>
            </div>
            <!--/center-->

            <!--right-->
            <div class="col-sm-3 container-no-default-margin">

                <hr>
                @include('frontend.includes.misForm')
                @include('frontend.includes.search')
                @include('frontend.includes.cartoon')

            </div>
            <!--/right-->
            <hr>
        </div>
        <!--/second-row-->


    </div><!--/container-fluid-->
    @include('frontend.includes.footer')

@stop