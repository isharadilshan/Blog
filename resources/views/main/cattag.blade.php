@extends('main.layouts.app')
@section('title','Tech-Blog')
@section('content')
    <div class="popular-blog-section">
        <div class="post-carousel owl-carousel">
            <div class="item">
                <div class="post-item">
                    <div class="post-carousel-thumb">
                        <a href="single.html"><img alt="" src="{{ asset('main/img/slider/img3.jpg') }}"></a>
                        <div class="overlay">
                            <div class="post-content">
                            <h3><a href="single.html">What's happened to
                            me</a></h3><a class="btn btn-common" href="single.html">Read More <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post-item">
                    <div class="post-carousel-thumb">
                        <a href="single.html"><img alt="" src="{{ asset('main/img/slider/img4.jpg') }}"></a>
                        <div class="overlay">
                            <div class="post-content">
                                <h3><a href="single.html">How to Showcase Your
                                Work</a></h3><a class="btn btn-common" href="single.html">Read More <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post-item">
                    <div class="post-carousel-thumb">
                        <a href="single.html"><img alt="" src="{{ asset('main/img/slider/img5.jpg') }}"></a>
                        <div class="overlay">
                            <div class="post-content">
                                <h3><a href="single.html">Personal Blog and
                                Portfolio Template</a></h3><a class="btn btn-common" href="single.html">Read More
                                <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post-item">
                    <div class="post-carousel-thumb">
                        <a href="single.html"><img alt="" src="{{ asset('main/img/slider/img6.jpg') }}"></a>
                        <div class="overlay">
                            <div class="post-content">
                                <h3><a href="single.html">Clean and Simplified
                                UI/UX</a></h3><a class="btn btn-common" href="single.html">Read More <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post-item">
                    <div class="post-carousel-thumb">
                        <a href="single.html"><img alt="" src="{{ asset('main/img/slider/img7.jpg') }}"></a>
                        <div class="overlay">
                            <div class="post-content">
                                <h3><a href="single.html">Intimate - Made with
                                Bootstrap and HTML5</a></h3><a class="btn btn-common" href="single.html">Read More
                                <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post-item">
                    <div class="post-carousel-thumb">
                        <a href="single.html"><img alt="" src="{{ asset('main/img/slider/img8.jpg') }}"></a>
                        <div class="overlay">
                            <div class="post-content">
                                <h3><a href="single.html">Let’s enjoy the
                                music</a></h3><a class="btn btn-common" href="single.html">Read More <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post-item">
                    <div class="post-carousel-thumb">
                        <a href="single.html"><img alt="" src="{{ asset('main/img/slider/img8.jpg') }}"></a>
                        <div class="overlay">
                            <div class="post-content">
                                <h3><a href="single.html">Have an Amazing
                                Blogging and Portfolio Showcase
                                Experience</a></h3><a class="btn btn-common" href="single.html">Read More <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <div id="content">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-6">
                        <div class="entry-widget">
                            <div class="widget-profile">
                                <div class="image"><img alt="" src="{{  asset('images/posts/').'/'.$post->image }}"></div>
                                <br>
                                <div class="entry-meta" style="color:red !important;">
                                    {{-- <span class="meta-part"><i class="ico-user"></i><a href="#">{{ $post->posted_by }}</a></span> --}}
                                    <span class="meta-part"><i class="ico-calendar-alt-fill"></i><a href="#">{{ date('M j,Y',strtotime($post->created_at)) }}</a></span>
                                    {{-- <span class="meta-part"><i class="ico-comments"></i><a href="#"><span class="fb-comments-count" data-href="{{  asset('post/').'/'.$post->slug }}"></span></a></span> --}}
                                    <span class="meta-part"><i class="ico-tag"></i>
                                        @foreach( $post->tags as $tag)
                                            <a href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a>
                                        @endforeach
                                    </span>
                                    <span class="meta-part"><i class="ico-star"></i>
                                        @foreach( $post->categories as $category)
                                            <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a>
                                        @endforeach
                                    </span>
                                </div>
                                {{-- <div class="portfolio"><img alt="" src="{{ asset('main/img/blog/portfolio.jpg') }}"></div> --}}
                                <div class="info">
                                    <a href="{{ route('post',$post->slug) }}"><h3 class="name">{{ $post->title }}</h3></a>
                                    <p class="details">{{ str_limit(strip_tags($post->subtitle), 35) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <article>
                <ul class="pager">
                    <li style="list-style: none">{{ $posts->links() }}</li>
                </ul>
            </article>
        </div>
    </div>

@endsection