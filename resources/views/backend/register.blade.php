<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Seller - Register</title>
    <meta name="twitter:description" content="description ">
    <meta name="twitter:image" content="{{asset('backend/assets/img/avatars/avatar2.jpeg')}}">
    <meta property="og:image" content="{{asset('backend/assets/img/avatars/avatar4.jpeg')}}">
    <meta name="description" content="admin panel is for admi">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="twitter title">
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
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url('{{asset('backend/assets/img/dogs/signup.jpg')}}');"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
<form class="user" method="POST" action="{{route('seller.user_create')}}">
@csrf
<div class="form-group row">
    <!-- name -->
<div class="col-sm-12 mb-3 mb-sm-0"><input class="form-control form-control-user" id="name"  type="text" name="name"  placeholder="Name" ></div>
</div>
<!-- email -->
<div class="form-group"><input class="form-control form-control-user" id="email" type="email" name="email"  aria-describedby="emailHelp" placeholder="Email Address" ></div>
<!-- password -->
<div class="form-group row">

<div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password"  id="password" name="password" placeholder="Password" ></div>
<!-- confirm -->
<div class="col-sm-6"><input class="form-control form-control-user" id="password_confirmation"   type="password" name="password_confirmation" placeholder="Repeat Password"></div>
</div><button class="btn btn-primary btn-block text-white btn-user" type="submit">Register Account</button>
<hr><a class="btn btn-primary btn-block text-white btn-google btn-user" role="button"><i class="fab fa-google"></i>&nbsp; Register with Google</a><a class="btn btn-primary btn-block text-white btn-facebook btn-user" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Register with Facebook</a>
<hr>
</form>
<div class="text-center"><a class="small" href="#">Forgot Password?</a></div>
<div class="text-center"><a class="small" href="#">Already have an account? Login!</a></div>
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
</body>

</html>