@extends('frontend')
@section('content')

@include('frontend.includes.nav');
<div class="container-fluid">
     <div class="row first-row">
         <div class="col-xs-12 col-md-3 col-lg-3">
           @include('frontend.includes.leftMenu')
         </div>
        <div class="col-xs-12 col-md-8 col-lg-7">

           @include('frontend.includes.articleDescription')
        </div>
        <div class="col-xs-12 col-md-5 col-lg-2">
            <h4 class="hr-with-border">Menus </h4>
            <h4 class="hr-with-border">Menu1 </h4>
            <h4 class="hr-with-border">Menu2 </h4>
            <h4 class="hr-with-border">Men3 </h4>


        </div>
     </div>
</div>
@include('frontend.includes.footer')
@stop