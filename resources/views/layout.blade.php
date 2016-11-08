<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cafe Nomad @Taipei</title>
        <meta name="description" content="台北最適合工作的咖啡廳清單。">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name='og:title' content="Cafe Nomad @Taipei - 台北最適合工作的咖啡廳清單">

        <meta name='og:description' content="Cafe Nomad @Taipei - 台北最適合工作的咖啡廳清單">

        <meta name='og:image' content="{{url('/img/cafenomad-screenshot.png')}}">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.3.0/list.min.js"></script>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

        <style>
            body {
                font-size: 15px;
            }
        </style>

        <script src="//load.sumome.com/" data-sumo-site-id="7c684f18608f53b96f6d1bb3f4ff9fc0ecb35560cd77fa6315b852c44ca65353" async="async"></script><script src="//load.sumome.com/" data-sumo-site-id="7c684f18608f53b96f6d1bb3f4ff9fc0ecb35560cd77fa6315b852c44ca65353" async="async"></script>

    </head>
    <body>

        <div class='container'>
            <div class='row'>
                @include('_header')
            </div>
            <br />
            <div class='row'>
                <ul class="nav nav-tabs">
                    <li role="presentation" @if($navTab=='/') class="active" @endif><a href="/">咖啡廳清單</a></li>
                    <li role="presentation"><a href="https://www.facebook.com/groups/561078630763040/" target='_blank'>Facebook 社團</a></li>
                    <li role="presentation" @if($navTab=='/discuss') class="active" @endif><a href="/discuss">留言板</a></li>
                </ul>
            </div>
            <br />

            @yield('content')

        </div>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-85456048-2', 'auto');
          ga('send', 'pageview');

        </script>

    </body>
</html>
