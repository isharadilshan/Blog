@extends('main.layouts.app')
@section('title','Tech-Blog')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="entry-title">Portfolio Single</h2>
                    <div class="breadcrumb">
                        <a href="#"><i class="icon-home"></i> Home</a>
                        <span class="crumbs-spacer"><i class="ico-fast-forward"></i></span> <span class="current">Portfolio</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="thumbs-gallery">
                        <div class="touch-slider owl-carousel">
                            <div class="item">
                                <a data-lightbox="roadtrip" href="img/blog/blog1-large.jpg"><img alt="" src="{{ asset('main/img/blog/blog1-large.jpg') }}"> <span><i class="fa fa-expand"></i></span></a>
                            </div>
                            <div class="item">
                                <a data-lightbox="roadtrip" href="img/blog/blog2-large.jpg"><img alt="" src="{{ asset('main/img/blog/blog2-large.jpg') }}"> <span><i class="fa fa-expand"></i></span></a>
                            </div>
                            <div class="item">
                                <a data-lightbox="roadtrip" href="img/blog/blog3-large.jpg"><img alt="" src="{{ asset('main/img/blog/blog3-large.jpg') }}"> <span><i class="fa fa-expand"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="title1">Project Description</h2>
                    <div class="description-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Incidunt, in accusamus necessitatibus, libero
                        enim asperiores maxime ab adipisci nemo quaerat modi,
                        deleniti a odit assumenda consequatur. Esse eos beatae
                        debitis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Accusamus eos nihil temporibus, Quam sint
                        blanditiis atque dicta eos modi vel reiciendis.</p>
                    </div>
                    <div class="share-socials">
                        <span class="social-share-btn">Share :</span>
                        <div class="social-links">
                            <a class="twitter social-link" data-placement="top" data-toggle="tooltip" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a class="facebook social-link" data-placement="top" data-toggle="tooltip" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a class="google-plus social-link" data-placement="top" data-toggle="tooltip" href="#" title="Google+"><i class="fa fa-google-plus"></i></a>
                            <a class="linkedin social-link" data-placement="top" data-toggle="tooltip" href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                            <a class="dribbble social-link" data-placement="top" data-toggle="tooltip" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a>
                            <a class="pinterest social-link" data-placement="top" data-toggle="tooltip" href="#" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                    <span class="space"></span> <a class="btn btn-border" href="#"><i class="fa fa-eye"></i> Live Preview</a>
                </div>
            </div>
        </div>
        <div class="tabs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabs-style-1 vertical">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#tab1-vertical" role="tab"><i class="fa fa-laptop"></i>Details</a></li>
                                <li><a data-toggle="tab" href="#tab2-vertical" role="tab"><i class="fa fa-eye"></i>Features</a></li>
                                <li><a data-toggle="tab" href="#tab3-vertical" role="tab"><i class="fa fa-info-circle"></i> Stats</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1-vertical" role="tabpanel">
                                    <ul class="list-details">
                                        <li><i class="fa fa-check"></i><b>Category:</b> Web design, Graphic design</li>
                                        <li><i class="fa fa-check"></i><b>Client:</b> Jon Example</li>
                                        <li><i class="fa fa-check"></i><b>Date:</b> October 24, 2015</li>
                                        <li><i class="fa fa-check"></i><b>Due Date:</b> November 28, 2015</li>
                                        <li><i class="fa fa-check"></i><b>Tags:</b> Identity, Web, Print</li>
                                        <li><i class="fa fa-check"></i><b>Added By:</b> John Martin.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab2-vertical">
                                    <ul class="list1 clearfix">
                                        <li><i class="fa fa-caret-square-o-right"></i>Multiple Layout</li>
                                        <li><i class="fa fa-caret-square-o-right"></i>Awesome Shortcodes</li>
                                        <li><i class="fa fa-caret-square-o-right"></i>Browser Compatibility</li>
                                        <li><i class="fa fa-caret-square-o-right"></i> Easy to Edit Animations</li>
                                        <li><i class="fa fa-caret-square-o-right"></i>Parallax Effect</li>
                                        <li><i class="fa fa-caret-square-o-right"></i>Responsive Design</li>
                                        <li><i class="fa fa-caret-square-o-right"></i>Multiple Layout</li>
                                        <li><i class="fa fa-caret-square-o-right"></i>Awesome Shortcodes</li>
                                        <li><i class="fa fa-caret-square-o-right"></i>Browser Compatibility</li>
                                        <li><i class="fa fa-caret-square-o-right"></i> Easyto Edit Animations</li>
                                        <li><i class="fa fa-caret-square-o-right"></i>Parallax Effect</li>
                                        <li><i class="fa fa-caret-square-o-right"></i>Responsive Design</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab3-vertical">
                                    <div class="counter">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="counter-item wow fadeInDown" data-animation-delay="1200">
                                            <span class="icon"><i class="fa fa-user"></i></span>
                                            <div class="timer value" data-speed="4000" data-to="12529"></div>
                                            <h4 class="title">Favourites</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="counter-item">
                                            <span class="icon"><i class="fa fa-heart"></i></span>
                                            <div class="timer value" data-speed="4000" data-to="152452">152452
                                            </div>
                                            <h4 class="title">Likes</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="counter-item">
                                            <span class="icon"><i class="fa fa-code"></i></span>
                                            <div class="timer value" data-speed="4000" data-to="145845">145845</div>
                                            <h4 class="title">Views</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="counter-item">
                                            <span class="icon"><i class="fa fa-paper-plane"></i></span>
                                            <div class="timer value" data-speed="4000" data-to="352642">352642</div>
                                            <h4 class="title">Peports</h4>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section">
            <div class="container">
                <div class="row">
                    <div id="portfolio-list">
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="portfolio-item">
                                <div class="portfolio-img">
                                    <img alt="" src="{{ asset('main/img/portfolio/img-1.jpg') }}">
                                    <div class="portfolio-item-content">
                                        <h3 class="field-content"><a href="#">Cras Commodo Ets</a></h3>
                                    </div>
                                    <div class="icon-zoom-in">
                                        <a class="link" href="portfolio-item.html"><i class="fa fa-link"></i></a> <a class="zoom" data-lightbox="roadtrip" href="img/portfolio/img-1.jpg"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="portfolio-item">
                                <div class="portfolio-img">
                                    <img alt="" src="{{ asset('main/img/portfolio/img-2.jpg') }}">
                                    <div class="portfolio-item-content">
                                        <h3 class="field-content"><a href="#">Quarterly Musashino</a></h3>
                                    </div>
                                    <div class="icon-zoom-in">
                                        <a class="link" href="portfolio-item.html"><i class="fa fa-link"></i></a> <a class="zoom" data-lightbox="roadtrip" href="img/portfolio/img-1.jpg"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="portfolio-item">
                                <div class="portfolio-img">
                                    <img alt="" src="{{ asset('main/img/portfolio/img-3.jpg') }}">
                                    <div class="portfolio-item-content">
                                        <h3 class="field-content"><a href="#">Non Mattis Tortor</a></h3>
                                    </div>
                                    <div class="icon-zoom-in">
                                        <a class="link" href="portfolio-item.html"><i class="fa fa-link"></i></a> <a class="zoom" data-lightbox="roadtrip" href="img/portfolio/img-1.jpg"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection