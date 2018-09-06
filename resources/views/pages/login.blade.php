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
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
  </head>
  <body style="background-color:#80808017">
    <div class="row" style="background-color:#32465a;">
      <div class="col-md-4" style="margin-top: 15px; color:white;">Logo</div>
      <div class="col-md-8" style="margin-top: 15px;">
        <form class="col-md-7 form-inline" type="post" action="">
          <input type="text" class="form-control" placeholder="Username"/>
          <input type="text" class="form-control" placeholder="Password"/>
          <input type="submit" class="btn btn-default" placeholder="Login"/>
        </form>
        <a class="col-md-5" href="#" style="color:white;">Forgot Password?</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3" style="margin-top:35px;">
        <div class="panel panel-default" style="background-color:#80808017;">
          <div class="panel-header" style="border-bottom:solid 2px grey;">
            <h3 style="text-align:center;">Sign Up</h3>
            <h5 style="text-align:center;">Come Join Our Community to Support Local Producer</h5>
          </div>
          <div class="panel-body">
            <form class="col-md-6 col-md-offset-3">
              <div class="form-group">
                <label for="firstname">First Name :</label>
                <input type="text" class="form-control" id="firstname">
              </div>
              <div class="form-group">
                <label for="lastname">Last Name :</label>
                <input type="text" class="form-control" id="lastname">
              </div>
              <div class="form-group">
                <label for="email">Email address :</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password :</label>
                <input type="password" class="form-control" id="pwd">
              </div>
              <div class="form-group">
                <label for="pwd">Type Your Password Again :</label>
                <input type="password" class="form-control" id="pwdVer">
              </div>
              <h5 style="font-size:12px; color:grey;">By clicking Join now, you agree to the ConIt User Agreement, Privacy Policy, and Cookie Policy.</h5>
              <button type="submit" class="btn btn-primary" style="width:100%;">Submit</button>
            </form>
          </div>
        </div>
      </div>
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
                          <li><a href="#">Web design</a></li>
                          <li><a href="#">Development</a></li>
                          <li><a href="#">Hosting</a></li>
                      </ul>
                  </div>
                  <div class="col-md-3 col-md-pull-6 col-sm-4 item">
                      <h3>About</h3>
                      <ul>
                          <li><a href="#">Company</a></li>
                          <li><a href="#">Team</a></li>
                          <li><a href="#">Careers</a></li>
                      </ul>
                  </div>
                  <div class="col-md-12 col-sm-4 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
              </div>
              <p class="copyright">Company Name © 2016</p>
          </div>
      </footer>
  </div>
  </body>
</html>
