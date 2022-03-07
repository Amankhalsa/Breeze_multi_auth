<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Seller - Login</title>
    <meta name="twitter:description" content="description ">
    <meta name="twitter:image" content="{{asset('backend/assets/img/avatars/avatar2.jpeg')}}">
    <meta property="og:image" content="{{asset('backend/assets/img/avatars/avatar4.jpeg')}}">
    <meta name="description" content="admin panel is for Seller">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="twitter title">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
    <link rel="icon" type="image/jpeg" sizes="60x60" href="{{asset('backend/assets/img/avatars/avatar5.jpeg')}}">
    <link rel="icon" type="image/jpeg" sizes="60x60" href="{{asset('backend/assets/img/avatars/avatar5.jpeg')}}">
    <link rel="icon" type="image/jpeg" sizes="60x60" href="{{asset('backend/assets/img/avatars/avatar5.jpeg')}}">
    <link rel="icon" type="image/jpeg" sizes="60x60" href="{{asset('backend/assets/img/avatars/avatar5.jpeg')}}">
    <link rel="icon" type="image/jpeg" sizes="60x60" href="{{asset('backend/assets/img/avatars/avatar5.jpeg')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/bootstrap/css/bootstrap.min.css')}}">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url('{{asset('backend/assets/img/dogs/image3.jpg')}}');"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                    </div>
                                    
                                        <!-- session  -->
@if(Session::has('error'))
<div class="alert alert-success alert-dismissible fade show" role="alert" id="cls">
  <strong>{{Session::get('error')}}</strong>
  <a  class="btn-close btn1" href="{{route('seller_login')}}">x</a>
</div>
@endif
        <!-- session  -->
<form method="POST" action="{{route('seller.login')}}" class="user">
             @csrf
<!-- email -->
<div class="form-group"><input class="form-control form-control-user"   type="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..."></div>
<!-- password  -->
<div class="form-group"><input class="form-control form-control-user"  type="password" name="password"  placeholder="Password" ></div>
<div class="form-group">
<div class="custom-control custom-checkbox small">
<div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
</div>
</div><button class="btn btn-primary btn-block text-white btn-user" type="submit">Login</button>
    <hr><a class="btn btn-primary btn-block text-white btn-google btn-user" role="button"><i class="fab fa-google"></i>&nbsp; Login with Google</a><a class="btn btn-primary btn-block text-white btn-facebook btn-user" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Login with Facebook</a>
                                        <hr>
                                    </form>
                                    <div class="text-center">

                                    
                                    <a class="small" href="#">Forgot Password?</a>
                                  
                                </div>
                                    <div class="text-center"><a class="small" href="{{route('seller.register')}} ">Create an Account!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="{{asset('backend/assets/js/script.min.js')}}"></script>
    <script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $("#cls").fadeOut();
  });

});
</script>
</body>

</html>