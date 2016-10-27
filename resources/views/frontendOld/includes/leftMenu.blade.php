<div class="col-md-12">
<div class="menu_simple">
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block;">
    @foreach($categoriesArray as $cat)
    
       
        @if ($cat['childCategories'] != Null)
         <li class="dropdown-submenu"><a tabindex="-1" href="{!! url($cat['url']) !!}"> {{ trans($cat['nepaliConversion']) }}</a>
        <ul class="dropdown-menu">
        @for ($i = 0; $i < count($cat['childCategories']); $i++)
    		 <li><a href="{!! url($cat['childCategories'][$i]['url'])!!}">{{ trans($cat['childCategories'][$i]['nepaliConversion']) }}</a></li>
		@endfor
         </ul>  
         @else
          <li class="first current"><a tabindex="-1" href="{!! url($cat['url']) !!}"> {{ trans($cat['nepaliConversion']) }}</a>
         
   		@endif
   		</li>
   @endforeach   
    
 </ul>
</div>
</div>
<style type="text/css">
    li{padding:3px;}
    .dropdown-submenu{position:relative;}
.dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
.dropdown-submenu:hover>.dropdown-menu{display:block;}
.dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
.dropdown-submenu:hover>a:after{border-left-color:#ffffff;}
.dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
</style>