@extends('frontend')
@section('content')

    <div class="page-content contact-us">
        <div class="col-md-9">


            <div class="col-sm-6 address">

                {!! $dynContent->description !!}

            </div>
            <!-- end .address -->

            <div class="col-sm-6 message-box" ng-app="MessageBoxM">
                @include('includes/errors')

                @include('includes/message')

                <h3><strong>Message</strong> Us</h3>

                <div class="contact-form" ng-controller="MessageBoxCtrl">
                    {!! Form::open(array('url' => 'contactus', 'class' => 'contact-frm')) !!}
                    <!---  Name Input TextBox -->
                    <div class="form-group">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <!---  Email Field --->
                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>

                    <!--- Subject Input TextBox -->
                    <div class="form-group">
                        {!! Form::label('subject', 'Subject:') !!}
                        {!! Form::text('subject', null, ['class' => 'form-control']) !!}
                    </div>

                    <!--- Message Field --->
                    <div class="form-group">
                        {!! Form::label('message', 'Message:') !!}
                        {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
                    </div>

                    <a class="btn btn-default" href ng-click="submitForm()"><i class="fa fa-envelope-o"></i>Send Message</a>

                    {!! Form::close() !!}

                </div>
                <!-- end .contact-form -->

            </div>
            <!-- end .message-box -->
        </div>
        <!-- end main grid layout -->

        <div class="col-lg-3 right-sidebar">
            @include('frontend/joinUs')
            @include('frontend/latestPost')
        </div>
        <!-- end right sidebar grid layout .right-sidebar -->

    </div> <!-- end #page-content .about-us -->

@stop