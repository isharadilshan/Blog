@extends('main.layouts.app')
@section('title','Tech-Blog')
@section('content')
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbs-gallery">
                        <div class="touch-slider owl-carousel">
                            <div class="item">
                                <a data-lightbox="roadtrip" href="{{ asset('main/img/blog/blog1-large.jpg') }}"><img alt="" src="{{ asset('main/img/blog/blog1-large.jpg') }}"> <span><i class="fa fa-expand"></i></span></a>
                            </div>
                            <div class="item">
                                <a data-lightbox="roadtrip" href="{{ asset('main/img/blog/blog2-large.jpg') }}"><img alt="" src="{{ asset('main/img/blog/blog2-large.jpg') }}"> <span><i class="fa fa-expand"></i></span></a>
                            </div>
                            <div class="item">
                                <a data-lightbox="roadtrip" href="{{ asset('main/img/blog/blog3-large.jpg') }}"><img alt="" src="{{ asset('main/img/blog/blog3-large.jpg') }}"> <span><i class="fa fa-expand"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2 class="title1">Congragulations! Your Account has been Created.</h2>
                    <div class="description-text">
                        <p>If you like to write articles, simply contact admin via contact us page</p>
                        <p>As a normal user you can follow our tutorials and read travel diaries... Thank you have a good day.</p>
                    </div>
                    <div class="share-socials">
                        <span class="social-share-btn">Connect with:</span>
                        <div class="social-links">
                            <a class="twitter social-link" data-placement="top" data-toggle="tooltip" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a class="facebook social-link" data-placement="top" data-toggle="tooltip" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a class="google-plus social-link" data-placement="top" data-toggle="tooltip" href="#" title="Google+"><i class="fa fa-google-plus"></i></a>
                            <a class="linkedin social-link" data-placement="top" data-toggle="tooltip" href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="entry-widget">
                            <div class="widget-profile">
                                <div class="image"><img alt="" src="{{ asset('main/img/blog/cover.jpg') }}"></div>
                                <div class="portfolio"><img alt="" src="{{ asset('main/img/blog/portfolio.png') }}"></div>
                                <div class="info">
                                    <h3 class="name">Ishara Dilshan</h3>
                                    <p class="details">Hi everyone, I would describe myself as a developer. Keep on trying until it's done! I would probably describe myself as a nature lover. In this blog you can see my travel experiences and photos. You can download them too.. You can support me on <a style="color:blue;" href="https://ko-fi.com/"><b>Ko-fi</b></a>. If you have any doubt ask me on <a style="color:#7433FF;" href="https://ko-fi.com/"><b>Facebook</b></a> or <a style="color:#7433FF;" href="https://ko-fi.com/"><b>Twitter</b></a> and follow me on these social media to get latest updates. Wish you all the very best, Thank you.</p>
                                    <div class="social-links">
                                        <a class="twitter social-link" data-placement="top" data-toggle="tooltip" href="#" title="Twitter"><i class="fa fa-twitter"></i></a> <a class="facebook social-link" data-placement="top" data-toggle="tooltip" href="#" title="Facebook"><i class="fa fa-facebook"></i></a> <a class="google-plus social-link" data-placement="top" data-toggle="tooltip" href="#" title="Google+"><i class="fa fa-google-plus"></i></a> <a class="linkedin social-link" data-placement="top" data-toggle="tooltip" href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry-widget">
                            <h5 class="widget-title">Flicker</h5>
                            <div class="flickr">
                                <ul>
                                    <li><a href="#"><img alt="" src="{{ asset('main/img/blog/thumb1.jpg') }}"></a></li>
                                    <li><a href="#"><img alt="" src="{{ asset('main/img/blog/thumb2.jpg') }}"></a></li>
                                    <li><a href="#"><img alt="" src="{{ asset('main/img/blog/thumb3.jpg') }}"></a></li>
                                    <li><a href="#"><img alt="" src="{{ asset('main/img/blog/thumb4.jpg') }}"></a></li>
                                    <li><a href="#"><img alt="" src="{{ asset('main/img/blog/thumb5.jpg') }}"></a></li>
                                    <li><a href="#"><img alt="" src="{{ asset('main/img/blog/thumb6.jpg') }}"></a></li>
                                </ul>
                                <a class="btn btn-common more" href="#">More Stories <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection