 
    <h3 class="header">{{ trans('frontpage.Check Your Request Status on MIS') }}</h3>

    <div class="section-content">

      <form id="request-status" action="executeSearch" method="get">
        <input type="text" name="case id" placeholder="Case Id">
         
        <button id="check-status" ><i class="glyphicon glyphicon-search"></i></button>
      </form><!-- request-status -->
      
    </div><!-- section-content -->