@extends('layouts.app')

@section('title')
Home | Application
@endsection

@section('content')
<div class="container main-container">

<!-- Page Content -->
    <div class="container">
        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h4>Post a Job</h4>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name." placeholder="Job Title">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number." placeholder="location">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." placeholder="Email Address">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" placeholder="Job Description"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Post Job</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>
@endsection
