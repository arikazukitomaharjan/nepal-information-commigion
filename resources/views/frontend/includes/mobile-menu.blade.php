<nav class="navbar navbar-inverse navbar-red visible-xs">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Menu</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://www.robustitconcepts.com/nic-website/">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="{!!url('dynamic-contents/1')!!}">Who We Are</a></li>
        <li><a href="{!!url('whatWeDo')!!}">What We Do</a></li>
        <li><a href="{!!url('procedureToRequest')!!}">Procedure for Request</a></li>
        <li><a href="{!!url('rightsToKnow')!!}">Rights to Know</a></li>


<li class="col-md-3 col-xs-12 hidden-xs dropdown">
	@foreach($categoriesArray as $cat)
	@if ($cat['childCategories'] != Null)
	<li class="dropdown"><a href="{!! url($cat['url']) !!}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{trans($cat['nepaliConversion']) }}<span class="caret"></span></a>
		<ul class="dropdown-menu">
			@for ($i = 0; $i < count($cat['childCategories']); $i++)
			<li><a href="{!! url($cat['childCategories'][$i]['url'])!!}">{{trans($cat['childCategories'][$i]['nepaliConversion']) }}</a>
			@endfor
			</li>
		</ul>
   @else
   <li><a  class="first current" href="{!! url($cat['url']) !!}"> {{ trans($cat['nepaliConversion']) }}</a></li>
   @endif

  @endforeach
</li>




      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>