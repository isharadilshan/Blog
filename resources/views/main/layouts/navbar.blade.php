<header class="site-header">
    <nav class="navbar navbar-default navbar-intimate role=" data-offset-top="50" data-spy="affix">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-target="#navigation" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span><span class="icon-bar"></span></button>
                <div class="logo">
                    <a class="navbar-brand" href="{{ route('mainpage') }}"><img height="50" width="350" src="{{  asset('main/img/logo/32bit.png') }}"></a>
                </div>
            </div>
            <div class="side">
                <a class="show-search"><i class="ico-search"></i></a>
            </div>
            <form class="full-search">
                <div class="container">
                    <div class="row">
                        <input class="form-control" placeholder="Search" type="text"> <a class="close-search"><span class="ico-times"></span></a>
                    </div>
                </div>
            </form>
            <div class="navbar-collapse collapse" id="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ route('mainpage') }}">Home</a>
                    </li>
                    {{-- <li class="dropdown dropdown-toggle">
                        <a data-toggle="dropdown" href="#">Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html">Blog View</a></li>
                            <li><a href="single.html">Single Post</a></li>
                        </ul>
                    </li> --}}
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li>
                        <a href="#">Download</a>
                    </li>
                    @guest
                        <li>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        </li>
                        <li>
                            <a href="{{ route('login') }}">Sign In</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #669999;">
                                @if(Auth::user()->isUser())
                                    <a class="dropdown-item" href="{{ route('user') }}">
                                        {{ __('Profile') }}
                                    </a>
                                @else
                                    <a class="dropdown-item" href="{{ route('admin') }}">
                                        {{ __('Profile') }}
                                    </a>
                                @endif
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('contact') }}">Contact</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <ul class="wpb-mobile-menu">
        <li>
            <a href="{{ route('mainpage') }}">Home</a>
            {{-- <ul>
                <li><a href="fullscreen-slider.html">Home - FullscreenSlider</a></li>
                <li class="active"><a href="carousel-slider.html">Home - Post Carousel</a></li>
                <li><a href="index.html">Home - Default</a></li>
            </ul> --}}
        </li>
        {{-- <li>
            <a href="#">Portfolio</a>
            <ul>
                <li><a href="portfolio-col-3.html">Portfolio 3 column</a></li>
                <li><a href="portfolio-col-4.html">Portfolio 4 column</a></li>
                <li><a href="portfolio-item.html">Single Project</a></li>
            </ul>
        </li> --}}
        {{-- <li>
            <a href="#">Blog</a>
            <ul>
                <li>
                    <a href="blog.html">Blog View</a>
                </li>
                <li>
                    <a href="single.html">Single Post</a>
                </li>
            </ul>
        </li> --}}
        <li>
            <a href="{{ route('contact') }}">Contact</a>
        </li>
        <li>
            <a href="#">Download</a>
        </li>
    </ul>
</header>