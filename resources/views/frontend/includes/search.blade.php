  <section class="search search-widget">
           <h3 class="header">Search</h3>

    <div class="section-content">

      <form id="request-status" action="search" method="post">
       <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
       <input type="text" name="search_text" placeholder="Search Text">
        <input type="text" name="date" placeholder="year">
        
        
        <select name="type" placeholder="Categories" class="form-control" id="category_id">
       
          <option value="5">गृहपृष्ठ</option>
          <option value="6">आयोग</option>
          <option value="7">प्रकाशनहरु</option>
          <option value="8">निर्णयहरु</option>
          <option value="9">सम्बन्धित कानुन</option>
          <option value="10">सूचना अधिकारीहरु</option>
          <option value="11">निवेदन / उजूरीका ढांचा</option>
          <option value="13">स्वत: प्रकाशनहरु</option>
          <option value="14">विविध</option>
          <option value="15">मीडिया</option>
          <option value="16">राष्ट्रिय सूचना आयोगको संगठन तालिका</option>
          <option value="17">आयोगका कार्यविधि</option>
          <option value="18">आयोगका बिज्ञप्ती</option>
          <option value="19">आयोगको डायरी</option>
          <option value="20">त्रैमासिक प्रकाशन</option>
          <option value="21">आयोगको अत्यन्त जरुरी सूचना</option>
          <option value="22">सफलताका कथाहरु </option>
          <option value="27">जरुरी सूचना     </option>
          <option value="28">काम,कर्तब्य र अधिकार</option>
          <option value="29">बार्षिक प्रतिबेदन     </option>
          <option value="30">अन्य प्रकाशन              </option>
          <option value="31">पुनरावेदन उपरको निर्णय</option>
          <option value="32">समाचार</option>
          <option value="33">कार्टून</option>
          <option value="34">निवेदन उपरको निर्णय</option>
          <option value="35">उजुरी उपरको निर्णय</option>
          <option value="36">आयोगका आदेशहरु</option>
          <option value="37">संबिधान</option>
          <option value="38">ऐन, नियमावली र कार्यबिधि</option>
          <option value="39">अन्य कानुन</option>
          <option value="40">केन्द्रिया सूचना अधिकारीहरु</option>
          <option value="41">जिल्लास्थित सूचना अधिकारीहरु</option>
          <option value="42">अन्य सूचना अधिकारीहरु</option>
          <option value="43">सूचना अधिकारीलाई निवेदन</option>
          <option value="44">कार्यालय प्रमुख समक्ष् उजुरी</option>
          <option value="45">आयोगमा निवेदन </option>
          <option value="46">आयोगमा उजुरी</option>
          <option value="47">आयोगमा पुनरावेदन</option>
          <option value="48">मन्त्रालयका स्वतः प्रकाशनहरु</option>
          <option value="49">विभाग स्वतः प्रकाशनहरु</option>
          <option value="50">अन्य स्वतः प्रकाशनहरु</option>
          <option value="51">तालिम सामाग्रीहरु</option>
          <option value="52">चिठीपत्र टिप्पणीहरु</option>
          </select>

        <button id="submit-search" >Search</button>
      </form><!-- request-status -->
      
    </div><!-- section-content -->
  
  </section>