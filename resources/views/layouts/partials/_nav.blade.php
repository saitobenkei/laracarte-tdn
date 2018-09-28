<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">Laracarte</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="">Artisans</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Planet <span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                        <li><a href="http://Laravel.com">Laravel.com</a></li>
                        <li><a href="http://Laravel.io">Laravel.io</a></li>
                        <li><a href="http://Laracasts">Laracasts</a></li>
                        <li><a href="http://Larajob">Larajob</a></li>
                        <li><a href="http://Laravel news">Laravel News</a></li>
                        <li><a href="http://Larachat">Larachat</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li><a href="#about">Login</a></li>
                <li><a href="#contact">Register</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
