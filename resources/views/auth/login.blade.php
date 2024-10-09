<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NewsBit - News Magazine Newspaper HTML Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    
    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('asset/frontend/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('asset/frontend/plugins/font-awesome/css/font-awesome.min.css')}}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset('asset/frontend/plugins/slick-carousel/slick.css')}}">
    <link rel="stylesheet" href="{{asset('asset/frontend/plugins/slick-carousel/slick-theme.css')}}">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="{{asset('asset/frontend/css/style.css')}}">
</head>
<body>


<section class="login-signup section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7">
                <div class="login">
                    <div class="text-center"><a href="index.html"><img src="{{asset('asset/frontend/images/logos/logo.png')}}" alt="" class="img-fluid"></a></div>

                    <h3 class="mt-4">Login Here</h3>
                    <p class="mb-5">Enter your valid mail & password</p>
   
                    <form method="POST" action="{{ route('login') }}" class="login-form row">
                    @csrf
                    <div class="col-md-12">
                            <div class="form-group">
                                <label for="loginemail">Email</label>
                                <input type="text" id="loginemail" class="form-control" name="email" placeholder="Enter mail" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="loginPassword">Password</label>
                                <input type="password" id="loginPassword" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Login</button>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $errors)
                                    <li>{{$errors}}</li>
                                @endforeach
                            </ul>
                        </div>
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                            @endif
                            <p class="mt-5 mb-0">Not a member yet? <a href="{{route('register')}}">Register Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- THEME JAVASCRIPT FILES
================================================== -->
<!-- initialize jQuery Library -->
<script src="{{asset('asset/frontend/plugins/jquery/jquery.js')}}"></script>
<!-- Bootstrap jQuery -->
<script src="{{asset('asset/frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Slick Slider -->
<script src="{{asset('asset/frontend/plugins/slick-carousel/slick.min.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{asset('asset/frontend/plugins/google-map/gmap.js')}}"></script>
<!-- main js -->
<script src="{{asset('asset/frontend/js/custom.js')}}"></script>

</body>
</html>