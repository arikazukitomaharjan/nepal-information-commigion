<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>National Information Commission</title>
   <link href="{{ asset('public/dist/css/lightbox.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('public/css/all.css') }}" rel="stylesheet">

    <link href="{{ asset('public/css/font-awesome.css') }}" rel="stylesheet">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,800%7COpen+Sans:400italic,400,600,700'
          rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('public/js/html5.js') }}"></script>
    <script src="{{ asset('public/js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body>
<div class="header">
    <div class="logo col-sm-12 col-md-2">
        <img src="{{url('public/images/demo/logo.png')}}" alt="logo">
    </div>
    <div class="col-sm-12 col-md-8">
        <div class="website-banner-content col-sm-12 col-md-9">
            <h2>राष्ट्रिय सुचना आयोग</h2>

            <h2>National Information Commission </h2>
        </div>

        <div class="header-moving-flag col-sm-12 col-md-3">
            <img src="{{url('public/images/demo/flag.gif')}}" alt="moving nepali national flag">
        </div>

        <div class="container news-slider col-sm-12 col-md-12 ">
            <div class="marquee-sibling">
                {{ trans('frontpage.News') }}
            </div>
            <div class="marquee">
                <ul class="marquee-content-items">
                    @foreach($sliding_news as $news)
                        <li>
                            {!! switchLangField($news->getAttributes(), 'title') !!}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-2">
        <div id="language-selector" class="btn-group pull-right col-sm-12 col-md-12">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                              नेपाली 
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu language_bar_chooser">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                   <li>
                        <a rel="alternate" hreflang="{{$localeCode}}"
                           href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="header-mislogin col-sm-12 col-md-12">
            <a href="mis.nic.gov.np"><h4>Login</h4>
                <h5> RTI MIS Online </h5>
            </a>
        </div>
    </div>


</div>

@yield('content')

<script src="{{ asset('public/js/all.js') }}"></script>
<script src="{{ asset('public/js/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/dist/js/lightbox.js') }}" ></script> 
</body>
</html>
