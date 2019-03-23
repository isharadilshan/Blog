@extends('main.layouts.app')
@section('title','Tech-Blog')
@section('headSection')
    <style>
        .timg {
            max-width: 70px;
            max-height: 70px;
        }
        .timg2 {
            max-width: 200px;
            max-height: 200px;
        }
    </style>
    <link href="{{ asset('/main/css/prism.css') }}" media="screen" rel="stylesheet">
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
    <div class="single-post" id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <article class="single-post-content">
                        <div class="blog-item-wrap">
                            <a href="{{  asset('images/posts/').'/'.$post->image }}"><img alt="{{ $post->image }}" src="{{  asset('images/posts/').'/'.$post->image }}"></a>
                        </div>
                        <br>
                        <div class="meta">
                            {{-- <span class="meta-part"><i style="color:red;" class="ico-user"></i><a href="#">{{ $post->posted_by }}</a></span> --}}
                            <span class="meta-part"><i style="color:red;" class="ico-calendar-alt-fill"></i><a href="#">{{ date('M j,Y',strtotime($post->created_at)) }}</a></span>
                            <span class="meta-part"><i style="color:red;" class="ico-comments"></i><a href="#"><span class="fb-comments-count" data-href="{{  asset('post/').'/'.$post->slug }}"></span></a></span>
                            <span class="meta-part"><i style="color:red;" class="ico-tag"></i>
                                @foreach( $post->tags as $tag)
                                    <a href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a>
                                @endforeach
                            </span>
                            <span class="meta-part"><i style="color:red;" class="ico-star"></i>
                                @foreach( $post->categories as $category)
                                    <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a>
                                @endforeach
                            </span>
                        </div>
                        <br>
                        <div id="comments"><p>{!! htmlspecialchars_decode($post->body) !!}</p></div>
                    </article>
                    <article>
                        <div id="comments">
                            <ol class="comments-list">
                                <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div>
                            </ol>
                        </div>
                    </article>
                    <article>
                        <div class="relate-post">
                            <h3><b>Related Post</b></h3>
                            <div class="row">
                                @foreach ($relatedPosts as $related)
                                    <div class="col-sm-6">
                                        <ul class="posts-list">
                                            <li>
                                                <div class="widget-thumb">
                                                    <a href="{{ route('post',$post->slug) }}"><img class="timg" alt="" src="{{  asset('images/posts/').'/'.$related->image2 }}"></a>
                                                </div>
                                                <div class="widget-content">
                                                    <h3><a href="{{ route('post',$post->slug) }}">{{ $related->title }}</a></h3>
                                                    <div class="meta">
                                                        <span class="meta-part"><i style="color:red;" class="ico-calendar-alt-fill"></i><a href="#">{{ date('M j,Y',strtotime($post->created_at)) }}</a></span>
                                                        <span class="meta-part"><i style="color:red;" class="ico-tag"></i>
                                                            @foreach( $post->tags as $tag)
                                                                <a href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a>
                                                            @endforeach
                                                        </span>
                                                        <span class="meta-part"><i style="color:red;" class="ico-star"></i>
                                                            @foreach( $post->categories as $category)
                                                                <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a>
                                                            @endforeach
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </li>
                                        </ul>
                                    </div>  
                                @endforeach      
                            </div>
                        </div>
                    </article>
                    <article>
                        <p>google ads</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="entry-widget">
                            <div class="widget-profile">
                                <div class="image"><img alt="" src="{{ asset('main/img/blog/cover.webp') }}"></div>
                                <div class="portfolio"><img alt="" src="{{ asset('main/img/blog/image.webp') }}"></div>
                                <div class="info">
                                    <h3 class="name">Ishara Dilshan</h3>
                                    <p class="details">Hi everyone, I would describe myself as a developer. Keep on trying until it's done! I would probably describe myself as a nature lover. In this blog you can see my travel experiences and photos. You can download them too... If you have any doubt ask me on <a style="color:#7433FF;" href="https://ko-fi.com/"><b>Facebook</b></a> or <a style="color:#7433FF;" href="https://ko-fi.com/"><b>Twitter</b></a> and follow me on these social media to get latest updates. Wish you all the very best, Thank you.</p>
                                    <div class="social-links">
                                        <a class="twitter social-link" data-placement="top" data-toggle="tooltip" href="https://twitter.com/BackendDevelop2" title="Twitter"><i class="fa fa-twitter"></i></a><a class="facebook social-link" data-placement="top" data-toggle="tooltip" href="https://www.facebook.com/Back-End-Developer-325579044730857" title="Facebook"><i class="fa fa-facebook"></i></a><a class="linkedin social-link" data-placement="top" data-toggle="tooltip" href="https://www.linkedin.com/in/ishara-dilshan" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry-widget">
                            <h5 class="widget-title">Make a Donation</h5>
                            <div class="accordion">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                            <input type="hidden" name="cmd" value="_s-xclick" />
                                            <input type="hidden" name="hosted_button_id" value="QPMBW5RB6B3UQ" />
                                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                                            <img alt="" border="0" src="https://www.paypal.com/en_LK/i/scr/pixel.gif" width="1" height="1" />
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                    <a href="{{ route('post',$recent->slug) }}"><img alt="" class="timg" src="{{  asset('images/posts/front/').'/'.$recent->image2 }}"></a>
                                                </div>
                                                <div class="widget-content">
                                                    <a href="{{ route('post',$recent->slug) }}">{{ $recent->title }}</a>
                                                    <div class="meta">
                                                        <span><i style="color:red;" class="ico-calendar-alt-fill"></i>{{ date('M j,Y',strtotime($post->created_at)) }}</span>
                                                        <span><i style="color:red;" class="ico-star"></i>
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
                                <div class="tab-pane fadeInDown" id="tab2">
                                    <ul class="posts-list">
                                        @foreach($editors as $editor)
                                            <li>
                                                <div class="widget-thumb">
                                                    <a href="{{ route('post',$editor->slug) }}"><img alt="" class="timg" src="{{  asset('images/posts/front/').'/'.$editor->image2 }}"></a>
                                                </div>
                                                <div class="widget-content">
                                                    <a href="{{ route('post',$editor->slug) }}">{{ $editor->title }}</a>
                                                    <div class="meta">
                                                        <span><i style="color:red;" class="ico-calendar-alt-fill"></i>{{ $editor->created_at }}</span>
                                                        <span><i style="color:red;" class="ico-tag"></i>
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
                                            <a href="{{ route('category',$category->slug) }}"><h4 class="panel-title"><i class="ico-keyboard_arrow_right"></i>{{ $category->name }}</h4></a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry-widget">
                            <h5 class="widget-title">Flicker Widget</h5>
                            <div class="flickr">
                                <ul>
                                    <li><a href="#"><img alt="" src="{{ asset('main/img/blog/thumb1.webp') }}"></a></li>
                                    <li><a href="#"><img alt="" src="{{ asset('main/img/blog/thumb2.webp') }}"></a></li>
                                    <li><a href="#"><img alt="" src="{{ asset('main/img/blog/thumb3.webp') }}"></a></li>
                                    <li><a href="#"><img alt="" src="{{ asset('main/img/blog/thumb4.webp') }}"></a></li>
                                    <li><a href="#"><img alt="" src="{{ asset('main/img/blog/thumb5.webp') }}"></a></li>
                                    <li><a href="#"><img alt="" src="{{ asset('main/img/blog/thumb6.webp') }}"></a></li>
                                </ul>
                                <a class="btn btn-common more" href="#">More Stories<i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="entry-widget">
                            <p>google ads</p> 
                        </div>
                        <div class="entry-widget">
                            <h5 class="widget-title">Tags</h5>
                            <div class="tag">
                                @foreach($tags as $tag)
                                    <a href="{{ route('tag',$tag->slug) }}" style="background-color: #92a8d1; color:black ; font-size:15px; font-weight:bold; margin-right:5px; border-radius:5px; border:1px solid gray; padding:5px;"><span class="small">{{ $tag->name }}</span></a>
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
@section('footerSection')
    <script src="{{ asset('/main/js/prism.js') }}" async></script>
@endsection
