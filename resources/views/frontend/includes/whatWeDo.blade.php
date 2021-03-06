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
<h3 style="color:#800000;padding-bottom:10px;"><b>{{ trans('frontpage.What We Do') }}</h3>
			<ul>
				सूचनाको हकसम्बन्धी ऐन, २०६४ मा अन्यत्र उल्लेखित काम, कर्तव्य र
				अधिकारको अतिरिक्त आयोगको काम, कर्तव्य र अधिकार देहाय बमोजिम हुनेछः-<br><br>
				<li> (क) सार्वजनिक निकायमा रहेको सार्वजनिक महत्वको सूचनासम्बन्धी
				अभिलेख, लिखत तथा अन्य सामग्रीको अध्ययन तथा अवलोकन गर्ने | 
				
<li> (ख) त्यस्तो निकायमा रहेको अभिलेख, लिखत वा अन्य सामग्रीसम्बन्धी
				सूचना सूचिकृत गरी मिलाई राख्न आदेश दिने | </li> 
<li>(ग) नागरिकको जानकारीको लागि सूचना सार्वजनिक गर्न सम्बन्धित
				सार्वजनिक निकायलाई आदेश दिने |</li>
<li> (घ) समय किटान गरी निवेदकले माग गरेको सूचना दिन सम्बन्धित
				सार्वजनिक निकायलाई आदेश दिने |</li> 
<li>(ङ्ग) सूचनाको हकसम्बन्धी ऐन, २०६४ बमोजिमको दायित्व पालना गर्न
				गराउन सम्बन्धित पक्षलाई आदेश दिने |</li>
<li> (च) नेपाल सरकार तथा सूचना तथा सञ्चारसँग सम्बन्धित विभिन्न
				निकायहरूलाई सूचनाको हकको संरक्षण र सर्म्बर्द्धनका लागि आवश्यक सुझाव
				दिने वा सिफारिश गर्ने |</li>
<li> (छ) सूचनाको हकको संरक्षण, सर्म्बर्द्धन र प्रचलन गर्नको लागि
				आवश्यक पर्ने अन्य उपयुक्त आदेश दिने |</li>

</ul>


		</div>

	</div>
	<!-- row -->
</div>
<!-- container -->
</div>
<!-- home-main -->


@include('frontend.footer')
