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
<h3 style="color:#800000;padding-bottom:10px;"><b>{{ trans('frontpage.Rights to Know') }}</h3>
		    <ul>
<li>(1) Every citizen shall have the right to information subject to this Act.</li>
<li>(2) Every citizen shall have access to the information held in the public Bodies.</li>
<li>(3) Notwithstanding anything provided in Sections (1) and (2), the information held by the Public Bodies on the following subject matters will not be released:</li>
<li>(4) Which seriously jeopardizes the sovereignty, integrity, national security, public peace, stability and international relations of Nepal.</li>
<li>(5) Which directly affects the investigation, inquiry and prosecution of crimes.</li>
<li>(6) Having serious impact on the protection of economic, trade or monetary interest or intellectual property or banking or trade privacy.</li>
<li>(7) That jeopardizes the harmonious relationship subsisted among various cast or communities.</li>
<li>(8) That interferes on individual privacy and security of body, life, property or health of a person.
Provided that, public Body shall not refrain from the responsibility of flowing information without appropriate and adequate reason not to flow information.</li>
<li>(9) If a Public Body has both the information in its record that can be made public and that cannot be made public in accordance with this Act, the Information Officer shall have to provide information to the application after separating the information which can be made public.</li>
</ul>
</div>
	    </div><!-- row -->
		</div><!-- container -->
  </div><!-- home-main -->


@include('frontend.footer')