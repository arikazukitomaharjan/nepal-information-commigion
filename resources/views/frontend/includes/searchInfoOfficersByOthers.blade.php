<style>
h3{
color:#800000;
}
</style>
@section('content')

@include('frontend.header')

  <div id="page-single">
    <div class="container">
    	<div class="row">
         

            @include('frontend.includes.slidingNews')

            <div class="clearfix"></div>
          
        </div>
		    
		    @include('frontend.sidebar-left-page')

		    
            	 

               <h3><b>Search Information Officers of other categories</b></h3>
               
                
                 {!! Form::open(['route'=>'articles.store','files' => true])!!}
                 <div class="form-group">
                <label><b>OFFICE TYPES</b></label>
                {!! Form::select('officeTypes', ['सबै'=>'सबै','संबैधानिक निकाय' =>'संबैधानिक निकाय','आयोग'=>'आयोग','संस्थान'=>'संस्थान','परिषद्'=>'परिषद्','सहकारी संस्था'=>'सहकारी संस्था','वैंक'=>'वैंक','वैक तथा वितिय संस्था'=>'वैक तथा वितिय संस्था','क्लव'=>'क्लव','कम्पनि'=>'कम्पनि','संचार'=>'संचार'],null,array('id'=>'selectOfficeType','onchange'=>'getPosts()')) !!}
            	 </div>
            	
                 {!! Form::close()!!}                              
				
				
                
            <div id="results">
            	 
            	 </div>
            	 
               
       

	    </div><!-- row -->
		</div><!-- container -->
  </div><!-- home-main -->


@include('frontend.footer')

