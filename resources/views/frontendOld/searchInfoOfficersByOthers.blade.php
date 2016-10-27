@extends('frontend')
@section('content')

    @include('frontend.includes.nav')
    <div class="container-fluid page-container single-article-page">

        <div class="row">
            <div class="col-xs-12 col-md-3 col-lg-3">
                @include('frontend.includes.leftMenu')
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6">

                <h3>Search Information Officers of other categories</h3>
               
                
                 {!! Form::open(['route'=>'articles.store','files' => true])!!}
                 <div class="form-group">
                <label><b>OFFICE TYPES</b></label>
                {!! Form::select('officeTypes', ['सबै'=>'सबै','संबैधानिक निकाय' =>'संबैधानिक निकाय','आयोग'=>'आयोग','संस्थान'=>'संस्थान','परिषद्'=>'परिषद्','सहकारी संस्था'=>'सहकारी संस्था','वैंक'=>'वैंक','वैक तथा वितिय संस्था'=>'वैक तथा वितिय संस्था','क्लव'=>'क्लव','कम्पनि'=>'कम्पनि','संचार'=>'संचार'],null,array('id'=>'selectOfficeType')) !!}
            	 </div>
            	 <div id="results">
            	 </div>
                 {!! Form::close()!!}
  		
            </div>
               

            <div class="col-xs-12 col-md-3 col-lg-3">

                @include('frontend.includes.search')

                @include('frontend.includes.cartoon')

            </div>

        </div>

    </div>
    @include('frontend.includes.footer')
@stop
                   