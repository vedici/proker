<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ConIt !</title>
        <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('fonts/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/Footer-Clean.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/Footer-Dark.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/Navigation-with-Button.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/styles.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/message.css')}}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <nav class="navbar navbar-default navigation-clean-button">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">ConIt</a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="active" role="presentation">
                            <a href="#">First Item</a>
                        </li>
                        <li role="presentation">
                            <a href="#">Second Item</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="#">First Item</a></li>
                                <li role="presentation"><a href="#">Second Item</a></li>
                                <li role="presentation"><a href="#">Third Item</a></li>
                            </ul>
                        </li>
                    </ul>
                    <p class="navbar-text navbar-right actions"><a class="navbar-link login" href="#">Log In</a> <a class="btn btn-default action-button" role="button" href="#">Sign Up</a></p>
                </div>
            </div>
        </nav>

        <div class="container-fluid text-center" style="margin-top: 25px; margin-bottom: 25px;">
            @yield('content')
        </div>

        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-push-6 item text">
                            <h3>Company Name</h3>
                            <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                        </div>
                        <div class="col-md-3 col-md-pull-6 col-sm-4 item">
                            <h3>Services</h3>
                            <ul>
                                <li>
                                    <a href="#">Web design</a>
                                </li>
                                <li>
                                    <a href="#">Development</a>
                                </li>
                                <li>
                                    <a href="#">Hosting</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-md-pull-6 col-sm-4 item">
                            <h3>About</h3>
                            <ul>
                                <li>
                                    <a href="#">Company</a>
                                </li>
                                <li>
                                    <a href="#">Team</a>
                                </li>
                                <li>
                                    <a href="#">Careers</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-sm-4 item social">
                            <a href="#"><i class="icon ion-social-facebook"></i></a>
                            <a href="#"><i class="icon ion-social-twitter"></i></a>
                            <a href="#"><i class="icon ion-social-snapchat"></i></a>
                            <a href="#"><i class="icon ion-social-instagram"></i></a>
                        </div>
                    </div>
                    <p class="copyright">Company Name © 2016</p>
                </div>
            </footer>
        </div>
        <script src="{{URL::asset('js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
    </body>
</html>