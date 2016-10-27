@extends('frontend')
@section('content')

@include('frontend.includes.nav');
<div class="container-fluid">
     <div class="row first-row">
         <div class="col-xs-12 col-md-3 col-lg-3">
           @include('frontend.includes.leftMenu')
         </div>
        <div class="col-xs-12 col-md-8 col-lg-7">

           <div id="news"><span>Title</span>
           @foreach($articles as $article)
           <a href="{!! url('articles',$article->id)!!}">
	             {!! $article->title_en!!}</a>
            	<h6>{!! $article->date_created!!}</h6>
            	<br>
            	<br>

	@endforeach
        </div>
       
     </div>
</div>
@include('frontend.includes.footer')
@stop



@extends('frontend')
@section('content')
<nav class="navbar navbar-default navbar-fixed-top navbar-movable" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" rel="home" href="#"></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="#"><i class="fa fa-home  fa-2x"></i> Home</a></li>
            <li><a href="#"><i class="fa fa-group  fa-2x"></i>Who Are We</a></li>
            <li><a href="#"><i class="fa fa-archive  fa-2x"></i>What We Do</a></li>
            <li><a href="#"><i class="fa fa-search  fa-2x"></i>Procedure For Request</a></li>
            <li><a href="#"><i class="fa fa-info-circle  fa-2x"></i>Your Right to Know</a></li>

        </ul>
        <div class="col-sm-3 col-md-3 pull-right">

        </div>
    </div>
</nav>

<div class="container-fluid">

    <div class="col-xs-12 col-md-8 col-lg8" ng-app="NicA">
       <div id="news"><h3>Search</h3>	
</div>

        </div>
    <div class="col-xs-12 col-md-3 col-lg3">
      <div id="menus"> </div>
      </div>
    </div>
    @include('frontend.includes.footer')
@stop