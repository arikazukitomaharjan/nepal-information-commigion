@extends('frontend')
@section('content')
 
    @include('frontend.includes.nav')
    <div class="container-fluid page-container single-article-page">

        <div class="row">

            <div class="col-xs-12 col-md-3 col-lg-3">
                @include('frontend.includes.leftMenu')
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6">

                <h3>Search District Information Officers </h3>

               <div>
                 {!! Form::open(['route'=>'articles.store','files' => true])!!}
                 <div class="form-group" >
                <label><b>DISTRICTS</b></label>
                {!! Form::select('districts',array('सबै'=>'सबै','झापा'=>'झापा','इलाम'=>'इलाम','पाँचथर'=>'पाँचथर','ताप्लेजुङ'=>'ताप्लेजुङ','ताप्लेजुङ'=>'मोरङ','सुनसरी'=>'सुनसरी ','भोजपुर'=>'भोजपुर','धनकुटा'=>'धनकुटा','तेह्रथुम'=>'तेह्रथुम','संखुवा सभा (खाँदवारी)'=>' संखुवा सभा (खाँदवारी)','सप्तरी'=>'सप्तरी','सिरहा'=>'सिरहा','उदयपुर'=>'उदयपुर','खोटाङ'=>'खोटाङ ','ओखलढुंगा'=>'ओखलढुंगा','सोलुखुम्बु'=>'सोलुखुम्बु','धनुषा'=>'धनुषा','महोत्तरी'=>'महोत्तरी','सर्लाही'=>'सर्लाही','सिन्धुली'=>'सिन्धुली','रामेछाप'=>'रामेछाप','दोलखा'=>'दोलखा','भक्तपुर'=>'भक्तपुर','धादिङ'=>'धादिङ','काठमाडौं'=>'काठमाडौं','काभ्रेपलाञ्चोक'=>'काभ्रेपलाञ्चोक','ललितपुर'=>'ललितपुर','नुवाकोट'=>'नुवाकोट','रसुवा'=>'रसुवा','सिन्धुपाल्चोक'=>'सिन्धुपाल्चोक','बारा'=>'बारा','पर्सा'=>'पर्सा ','रौतहट'=>'रौतहट','चितवन'=>'चितवन','मकवानपुर'=>'मकवानपुर','गोरखा'=>'गोरखा','कास्की'=>'कास्की','लमजुङ'=>'लमजुङ','स्याङजा'=>'स्याङजा','तनहुँ'=>'तनहुँ','मनाङ'=>'मनाङ ','कपिलवस्तु'=>'कपिलवस्तु','नवलपरासी'=>'नवलपरासी','रुपन्देही'=>'रुपन्देही','अर्घाखाँची'=>'अर्घाखाँची','गुल्मी'=>'गुल्मी','पाल्पा'=>'पाल्पा','बाग्लुङ'=>'बाग्लुङ','म्याग्दी'=>'म्याग्दी','पर्वत'=>'पर्वत','मुस्ताङ'=>'मुस्ताङ','दाङ'=>'दाङ','प्युठान'=>'प्युठान','रोल्पा'=>'रोल्पा','रुकुम'=>'रुकुम','सल्यान'=>'सल्यान','डोल्पा'=>'डोल्पा','हुम्ला'=>'हुम्ला','जुम्ला'=>'जुम्ला','कालिकोट'=>'कालिकोट ','मुगु'=>'मुगु','बाँके'=>'बाँके','बर्दिया'=>'बर्दिया','सुर्खेत्'=>'सुर्खेत्','दैलेख'=>'दैलेख','जाजरकोट'=>'जाजरकोट','कैलाली'=>'कैलाली','अछाम'=>'अछाम','डोटी'=>'डोटी','बझाङ'=>'बझाङ','बाजुरा'=>'बाजुरा','कंचनपुर'=>'कंचनपुर','डडेलधुरा'=>'डडेलधुरा','बैतडी'=>'बैतडी','दार्चुला'=>'दार्चुला'),null,array('id' => 'selectDistrict')) !!}
            	 </div>
            	 <div id="results">
            	 
            	 </div>
                 {!! Form::close()!!}                                     
				</div>
				
                
            </div>
            <div class="col-xs-12 col-md-3 col-lg-3">
                @include('frontend.includes.search')
                @include('frontend.includes.cartoon')
            </div>
        </div>
    </div>
    
    @include('frontend.includes.footer')
@stop

                                 