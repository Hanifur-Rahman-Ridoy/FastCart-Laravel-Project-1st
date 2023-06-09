<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Feb 2023 15:37:23 GMT -->
<head>
    
    <link rel="icon" href="{{ asset('/') }}front/assets/images/favicon/1.png" type="image/x-icon">
    <title>Log In</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('/') }}front/assets/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/assets/css/vendors/feather-icon.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/assets/css/vendors/slick/slick-theme.css">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/assets/css/bulk-style.css">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('/') }}front/assets/css/style.css">
</head>

<body>

   

 
 
   

    <!-- log in section start -->
    <section class="log-in-section background-image-2 section-b-space">
        <div class="container-fluid-lg w-100">
            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                    <div class="image-contain">
                        <img src="{{ asset('/') }}front/assets/images/inner-page/log-in.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>Welcome To Fastkart</h3>
                            <h4>Log In Your Account</h4>
                        </div>

                        <div class="input-box">
                            <form class="row g-4" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" >
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Password" name="password" >
                                        <label for="password">Password</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="forgot-box">
                                        <div class="form-check ps-0 m-0 remember-box">
                                            <input class="checkbox_animated check-box" type="checkbox"
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                        </div>
                                        <a href="forgot.html" class="forgot-password">Forgot Password?</a>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-animation w-100 justify-content-center" type="submit">Log
                                        In</button>
                                </div>
                            </form>
                        </div>

                        {{-- <div class="other-log-in">
                            <h6>or</h6>
                        </div>

                        <div class="log-in-button">
                            <ul>
                                <li>
                                    <a href="https://www.google.com/" class="btn google-button w-100">
                                        <img src="{{ asset('/') }}front/assets/images/inner-page/google.png" class="blur-up lazyload"
                                            alt=""> Log In with Google
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" class="btn google-button w-100">
                                        <img src="{{ asset('/') }}front/assets/images/inner-page/facebook.png" class="blur-up lazyload"
                                            alt=""> Log In with Facebook
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="other-log-in">
                            <h6></h6>
                        </div>

                        <div class="sign-up-box">
                            <h4>Don't have an account?</h4>
                            <a href="sign-up.html">Sign Up</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- log in section end -->

   


    <!-- latest jquery-->
    <script src="{{ asset('/') }}front/assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('/') }}front/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}front/assets/js/bootstrap/popper.min.js"></script>

    <!-- feather icon js-->
    <script src="{{ asset('/') }}front/assets/js/feather/feather.min.js"></script>
    <script src="{{ asset('/') }}front/assets/js/feather/feather-icon.js"></script>

    <!-- Slick js-->
    <script src="{{ asset('/') }}front/assets/js/slick/slick.js"></script>
    <script src="{{ asset('/') }}front/assets/js/slick/slick-animation.min.js"></script>
    <script src="{{ asset('/') }}front/assets/js/slick/custom_slick.js"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset('/') }}front/assets/js/lazysizes.min.js"></script>

    <!-- script js -->
    <script src="{{ asset('/') }}front/assets/js/script.js"></script>

    <!-- thme setting js -->

</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Feb 2023 15:37:23 GMT -->
</html>