<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>
    <link rel="stylesheet" href="https://highlightjs.org/static/styles/tomorrow-night.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @section('styles')
    {{-- HTML::style('business-casual/css/bootstrap.min.css') --}}
    {{-- HTML::style('business-casual/css/business-casual.css') --}}
    {{-- HTML::style('css/app.css') --}}

    {{ HTML::style('dist/css/styles.css') }}
    @show


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Cheikhou Oumar Ly</div>
    <h2 class="text-center job">Web developer at
    <small><a href="#">Vivializ</a></small>
    </h2>


    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li @if(Route::is('home')) class="active" @endif>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li @if(Route::is('about')) class="active" @endif>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li @if(Route::is('blog')) class="active" @endif>
                        <a href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li @if(Route::is('contact')) class="active" @endif>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        @yield('container')

    </div>
    <!-- /.container -->

    <div class="footer">
      <div class="container">
        <p class="text-muted" style="display:inline-block">
        Copyright &copy; Your Website {{ date('Y') }}.
        </p>
        <div class="btn-group">
            <button type="button" class="btn btn-default">Left</button>
            <button type="button" class="btn btn-default">Middle</button>
            <button type="button" class="btn btn-default">Right</button>
        </div>
      </div>
    </div>

    @section('scripts')
    {{ HTML::script('dist/js/scripts.js') }}
    <script src="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.2/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    @show

</body>

</html>
