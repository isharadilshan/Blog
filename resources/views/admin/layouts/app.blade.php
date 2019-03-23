<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="{{  asset('main/img/logo/16bit.png') }}"/>
    <title>Tech_Blog-Admin Panel</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134198571-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-134198571-1');
    </script>
    @include('admin.layouts.head')
</head>
<body>
    <div class="app header-default side-nav-dark">
        <div class="layout">
            @include('admin.layouts.navbar')
            @include('admin.layouts.sidebar')
            @section('content')
                @show
            @include('admin.layouts.footer')
        </div>
    </div>
    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
</body>
</html>