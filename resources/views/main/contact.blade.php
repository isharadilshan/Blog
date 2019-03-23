@extends('main.layouts.app')
@section('title','Tech-Blog')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="entry-title">Contact Us</h2>
                </div>
            </div>
        </div>
    </div>      
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 contact-form">
                    <form class="shake" data-toggle="validator" id="contactForm" name="contactForm" role="form">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" data-error="Please enter your name" id="name" placeholder="Your Name" required="" type="text">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" data-error="Please enter your email" id="email" placeholder="Your Email" required="" type="email">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" data-error="Please enter your message subject" id="msg_subject" placeholder="Subject" required="" type="text">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" data-error="Write your message" id="message" placeholder="Massage" required="" rows="5"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-common btn-sn" id="submit" type="submit">Send Message</button>
                            <div class="h3 text-center hidden" id="msgSubmit"></div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection