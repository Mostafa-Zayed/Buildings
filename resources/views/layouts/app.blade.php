<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>One</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/flexslider.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header">
    <div class="container"> <a class="navbar-brand" href="index.html"><i class="fa fa-paper-plane"></i> ONE</a>
        <div class="menu"> <a class="toggleMenu" href="#"><img src="{{asset('frontend/images/nav_icon.png')}}" alt="" /> </a>
            <ul class="nav" id="nav">
                <li class="current"><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                <div class="clear"></div>
            </ul>
            <script type="text/javascript" src="{{asset('frontend/js/responsive-nav.js')}}"></script>
        </div>
    </div>
</div>
@yield('content')


<div class="footer">
    <div class="footer_bottom">
        <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
        <div class="copy">
            <p>Copyright &copy; 2015 Company Name. Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></p>
        </div>
    </div>
</div>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.flexslider.js')}}"></script>
</body>
</html>

