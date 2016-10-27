<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>National Information Commission</title>

    <link href="{{asset('public/css/admin-all.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <meta name="_token" content="{{ csrf_token() }}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    {{--
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->--}}


</head>

<body>
<div id="wrapper">

    {{--navigation section--}}
    @include('admin/includes/nav')

    <div id="page-wrapper">

        <div class="row">

            <div class="col-lg-3">
                @include('admin/includes/leftMenu')
            </div>

            <div class="col-lg-9 main-content">

                <div class="panel panel-default">

                    @include('includes/errors')

                    @include('includes/message')

                    <div class="panel-heading">
                       @yield('breadcrumb')
                    </div>

                    <div class="panel-body main-content">
                        @yield('adminContent')
                    </div>

                </div>

            </div>
            <!-- /.col-lg-12 -->
        </div>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script src="{{ asset('public/js/admin-all.js') }}"></script>
<script src="{{ asset('public/js/ckeditor/ckeditor.js') }}"></script>
@yield('js_code')

</body>

</html>

