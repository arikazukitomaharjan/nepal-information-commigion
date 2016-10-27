@section('content')

@include('frontend.header')

  <div id="page-single">
    <div class="container">
    	<div class="row">
         

            @include('frontend.includes.slidingNews')

            <div class="clearfix"></div>
          
        </div>
		    
		    @include('frontend.sidebar-left-page')
<div class="col-sm-9" id="page-main-content" align="justify">
<h3 style="color:#800000;padding-bottom:10px;"><b>{{ trans('frontpage.Procedure for Request') }}</h3>
<ul>
 <li>(1) Nepali Citizen, who is interested to obtain any information under this Act, shall submit an application before concerned Information Officer by stating reason to receive such information. </li>
<li>(2) If an application is received in accordance with Sub-Section (1), Information Officer should provide the information immediately if the information by its nature could be provided immediately and has to provide within fifteen days from the date of application if the information by its nature could not be provided immediately.</li>  
<li>(3) If information cannot be provided immediately in accordance with Sub-Section (2), Information Officer should instantly give a notice with reason to the applicant.  </li>
<li>(4) Notwithstanding anything contained in Sub-Section (3), if information which is requested is related to security of life of any person, the information officer should provide information within Twenty Four hours of such request.</li>  
<li>(5) Information Officer has to provide information in the format as demanded by the applicant as much as possible. </li>
<li>(6) Notwithstanding anything contained in Sub-Section (5), if any possibility subsist that the source of information may be damaged  or destroyed or spoilt if it is provided in the format as requested by the applicant, the Information Officer shall provide such information in appropriate format with stating reason thereof.</li>  
<li>(7) If any individual submitted an application to study or observe written document, materials or activities in accordance with Sub-Section (1), the Information Officer will provide a reasonable time to the applicant for the study and observation of such written document, materials or activities.</li>  
<li>(8) While examining the application received in accordance with Sub-Section (1), it is found that the information demanded by the applicant is not related to such Body, the Information Officer should give notification to the applicant immediately.</li>
</ul>
</div>

		   

	    </div><!-- row -->
		</div><!-- container -->
  </div><!-- home-main -->


@include('frontend.footer')