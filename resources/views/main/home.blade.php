@extends('main.layouts.app')
@section('title','Tech-Blog')
@section('headSection')
    <style>
        .timg {
            max-width: 70px;
            max-height: 70px;
        }
    </style>
@endsection  
@section('content')
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=710505739343734&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="popular-blog-section">
        <div class="post-carousel owl-carousel">
            <div class="item">
                <div class="post-item">
                    <div class="post-carousel-thumb">
                        <a href="single.html"><img alt="" src="{{ asset('main/img/slider/img3.webp') }}"></a>
                        <div class="overlay">
                            <div class="post-content">
                            <h3><a href="single.html">Stock photos for everybody.</a></h3><a class="btn btn-common" href="single.html">Read More <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post-item">
                    <div class="post-carousel-thumb">
                        <a href="single.html"><img alt="" src="{{ asset('main/img/slider/img4.webp') }}"></a>
                        <div class="overlay">
                            <div class="post-content">
                                <h3><a href="single.html">Level up your Programming skills.</a></h3><a class="btn btn-common" href="single.html">Read More <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post-item">
                    <div class="post-carousel-thumb">
                        <a href="single.html"><img alt="" src="{{ asset('main/img/slider/img5.webp') }}"></a>
                        <div class="overlay">
                            <div class="post-content">
                                <h3><a href="single.html">Learn about new advances in Computer Science.</a></h3><a class="btn btn-common" href="single.html">Read More
                                <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post-item">
                    <div class="post-carousel-thumb">
                        <a href="single.html"><img alt="" src="{{ asset('main/img/slider/img6.webp') }}"></a>
                        <div class="overlay">
                            <div class="post-content">
                                <h3><a href="single.html">Web technology tutorials series.</a></h3><a class="btn btn-common" href="single.html">Read More <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post-item">
                    <div class="post-carousel-thumb">
                        <a href="single.html"><img alt="" src="{{ asset('main/img/slider/img7.webp') }}"></a>
                        <div class="overlay">
                            <div class="post-content">
                                <h3><a href="single.html">Ethical Hacking tutorials</a></h3><a class="btn btn-common" href="single.html">Read More
                                <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post-item">
                    <div class="post-carousel-thumb">
                        <a href="single.html"><img alt="" src="{{ asset('main/img/slider/img8.webp') }}"></a>
                        <div class="overlay">
                            <div class="post-content">
                                <h3><a href="single.html">Spread Beauty with Nature Lovers.</a></h3><a class="btn btn-common" href="single.html">Read More <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="post-item">
                    <div class="post-carousel-thumb">
                        <a href="single.html"><img alt="" src="{{ asset('main/img/slider/img9.webp') }}"></a>
                        <div class="overlay">
                            <div class="post-content">
                                <h3><a href="single.html">Travel Experiences in Sri Lanka.</a></h3><a class="btn btn-common" href="single.html">Read More <i class="ico-arrow-right"></i></a>
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
                <div class="col-md-8">
                    @foreach($posts as $post)
                        <article>
                            <div class="blog-item-wrap">
                                {{-- <div class="post-format">
                                    <span><i class="fa fa-camera"></i></span>
                                </div> --}}
                                <h2 class="blog-title"><a href="{{ route('post',$post->slug) }}">{{ $post->title }}</a></h2>
                                <div class="entry-meta">
                                    {{-- <span class="meta-part"><i class="ico-user"></i><a href="#">{{ $post->posted_by }}</a></span> --}}
                                    <span class="meta-part"><i class="ico-calendar-alt-fill"></i><a href="#">{{ date('M j,Y',strtotime($post->created_at)) }}</a></span>
                                    <span class="meta-part"><i class="ico-comments"></i><a href="#"><span class="fb-comments-count" data-href="{{  asset('post/').'/'.$post->slug }}"></span></a></span>
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
                                <div class="feature-inner">
                                    <a data-lightbox="roadtrip" href="{{  asset('images/posts/').'/'.$post->image }}"><img alt="" src="{{  asset('images/posts/').'/'.$post->image }}"></a>
                                </div>
                                <div class="post-content">
                                    <p>{{ str_limit(strip_tags($post->subtitle), 35) }}</p>
                                </div>
                                <div class="entry-more">
                                    <div class="pull-left">
                                        <a class="btn btn-common" href="{{ route('post',$post->slug) }}">Read More <i class="ico-arrow-right"></i></a>
                                    </div>
                                    <div class="share-icon pull-right">
                                        <span class="socialShare"></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                    <article>
                        <ul class="pager">
                            <li style="list-style: none">{{ $posts->links() }}</li>
                        </ul>
                    </article>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="entry-widget">
                           <p>google ads</p> 
                        </div>
                        <div class="entry-widget">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab1">Recent</a></li>
                                <li><a data-toggle="tab" href="#tab2">Editors Choice</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane in active fadeInDown" id="tab1">
                                    <ul class="posts-list">
                                        @foreach($recents as $recent)
                                            <li>
                                                <div class="widget-thumb">
                                                    <a href="#"><img alt="" class="timg" src="{{  asset('images/posts/front/').'/'.$recent->image2 }}"></a>
                                                </div>
                                                <div class="widget-content">
                                                    <a href="{{ route('post',$recent->slug) }}">{{ $recent->title }}</a>
                                                    <div class="meta">
                                                        <span><i class="ico-calendar-alt-fill"></i>{{ date('M j,Y',strtotime($post->created_at)) }}</span>
                                                        <span><i class="ico-star"></i>
                                                            @foreach( $recent->categories as $category)
                                                                <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a>
                                                            @endforeach
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="tab-pane in active fadeInDown" id="tab2">
                                    <ul class="posts-list">
                                        @foreach($editors as $editor)
                                            <li>
                                                <div class="widget-thumb">
                                                    <a href="#"><img alt="" class="timg" src="{{  asset('images/posts/front/').'/'.$editor->image2 }}"></a>
                                                </div>
                                                <div class="widget-content">
                                                    <a href="{{ route('post',$editor->slug) }}">{{ $editor->title }}</a>
                                                    <div class="meta">
                                                        <span><i class="ico-calendar-alt-fill"></i>{{ $editor->created_at }}</span>
                                                        <span><i class="ico-tag"></i>
                                                            @foreach( $editor->categories as $category)
                                                                <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a>
                                                            @endforeach
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <a class="btn btn-common more" href="#">More Stories <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="entry-widget">
                            <h5 class="widget-title">Categories</h5>
                            <div class="accordion">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        @foreach($categories as $category)
                                            <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="{{ route('category',$category->slug) }}"><i class="ico-keyboard_arrow_right"></i>{{ $category->name }}</a></h4>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry-widget">
                            <p>google ads</p> 
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
                        <div class="entry-widget">
                            <h5 class="widget-title">Tags</h5>
                            <div class="tag">
                                @foreach($tags as $tag)
                                    <a href="{{ route('tag',$tag->slug) }}" style="background-color: #92a8d1; color:black; font-size:12px; font-weight:bold; margin-right:5px; border-radius:5px; border:1px solid gray; padding:10px;">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="entry-widget">
                            <p>google ads</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection