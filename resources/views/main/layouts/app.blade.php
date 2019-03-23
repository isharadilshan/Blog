<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" type="image/png" href="{{  asset('main/img/logo/16bit.png') }}"/>
        <title>@yield('title')</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134198571-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-134198571-1');
        </script>
       <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
       <script>
         (adsbygoogle = window.adsbygoogle || []).push({
           google_ad_client: "ca-pub-5518129895139253",
           enable_page_level_ads: true
         });
       </script>
        @include('main/layouts/head')
    </head>
    <body>
        @include('main/layouts/navbar')

            @section('content')
                @show

        @include('main/layouts/footer')
    </body>
</html>