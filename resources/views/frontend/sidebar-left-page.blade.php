 <div class="col-md-3 col-xs-12 hidden-xs">
 <div id="side-menu">
<ul>
	@foreach($categoriesArray as $cat) 
	@if ($cat['childCategories'] != Null)
	<li><a href="{!! url($cat['url']) !!}"> {{trans($cat['nepaliConversion']) }}</a>
		<ul class="sub-menu">
			@for ($i = 0; $i < count($cat['childCategories']); $i++)
			<li><a href="{!! url($cat['childCategories'][$i]['url'])!!}">{{trans($cat['childCategories'][$i]['nepaliConversion']) }}</a>
			@endfor
			</li>
		</ul>		
   @else
   <li><a  class="first current" href="{!! url($cat['url']) !!}"> {{ trans($cat['nepaliConversion']) }}</a></li>  
   @endif
		 
  @endforeach
</ul>
</div><!-- side menu -->             
</div><!-- col -->