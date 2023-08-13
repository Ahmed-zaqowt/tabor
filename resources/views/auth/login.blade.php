<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taboor</title>
    <link rel="stylesheet" href="{{asset('../css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/all.css')}}">
    <link rel="stylesheet" href="{{asset('../css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('../css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
    <link rel="stylesheet" href="{{asset('../css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('../css/swiper-bundle.min.css')}}" />
    <style>
        body,
        .cardForm {
            background: linear-gradient(to right, #5F5AFF, #FD0BB5);
        }
        header .container .links a{
            /* font-siz/e: 13px; */
        }
        .img {
            background-image: url('{{asset('images/Group\ 44490.png')}}');
            background-size: cover;
            background-repeat: no-repeat;
        }

        main {
            height: 615px;
        }

        main .container {
            height: 615px;
        }

        main .container .row {
            height: 685px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loginCard {
            border-radius: 40px;
            color: white;
            padding: 70px 50px !important;
            min-height: 620px !important;
        }

        .cardForm {
            border-radius: 20px;
            text-align: center;
            padding: 49px 35px !important;
            height: 95%;
            width: 87%;
            position: relative;
        }

        .cardForm h2 {
            margin: 20px 0 45px;
        }

        .form-group {
            position: relative;
            margin: 15px auto;
        }

        .input-login-style {
            padding: 7px 7px 7px 35px;
            border-radius: 10px;
            width: 90%;
            margin: auto;
            border: none;
        }

        .form-group img {
            position: absolute;
            left: 29px;
            top: 10px;
            width: 14px;
        }

        .btn-light {
            padding: 10px 100px;
            color: #FD0BB5;
            border-radius: 10px;
            border: none;
            position: absolute;
            bottom: 30px;
            left: 80px;
        }

        .check {
            width: 50%;
            justify-content: left !important;
            font-size: 12px;
            align-items: center;
        }

        .links_login {
            padding: 10px 10px 30px;
        }

        .links_login div a,
        span {
            color: white;
            font-weight: 500;
        }

        .check input {
            width: fit-content;
            padding: 0;
            margin: 0;
            margin: 0 10px 0 10px;
        }

        .forgot {
            margin: 0 5px 0 0px;
            font-size: 12px;
        }

        .sign-up {
            padding: 30px 0 20px 0;
            text-align: center;
        }

        .sign-up p {
            margin: 0;
            padding: 0;
            color: #C7C7C7;
            font-weight: 600;
        }

        .sign-up p a {
            color: #FD0BB5;
            margin-left: 12px;
        }

        .form {
            display: flex;
            flex-direction: column;
        }

        @media (min-width: 994px) and (max-width: 1201px) {
            .cardForm {
                border-radius: 20px;
                text-align: center;
                padding: 49px 35px !important;
                height: 95%;
                width: 100%;
                position: relative;
            }

            .cardForm h2 {
                margin: 20px 0 45px;
            }

            .form-group {
                position: relative;
                margin: 15px auto;
            }

            .input-login-style {
                padding: 7px 7px 7px 35px;
                border-radius: 10px;
                width: 90%;
                margin: auto;
                border: none;
            }

            .form-group img {
                position: absolute;
                left: 29px;
                top: 10px;
                width: 14px;
            }

            .btn-light {
                padding: 10px 100px;
                color: #FD0BB5;
                border-radius: 10px;
                border: none;
                position: absolute;
                bottom: 30px;
                left: 45px;
            }

            .check {
                width: 50%;
                justify-content: left !important;
                font-size: 10px;
                align-items: center;
            }

            .links_login {
                padding: 10px 10px 30px;
            }

            .links_login div a,
            span {
                color: white;
                font-weight: 500;
            }

            .check input {
                width: fit-content;
                padding: 0;
                margin: 0;
                margin: 0 4px 0 0px;
            }

            .forgot {
                margin: 0 5px 0 0px;
                font-size: 10px;
            }
        }

        @media (min-width: 605px) and (max-width: 767px) {
            .cardForm {
                border-radius: 20px;
                text-align: center;
                padding: 49px 35px !important;
                height: 95%;
                width: 100% !important;
                position: relative;
            }

            .cardForm h2 {
                margin: 20px 0 45px;
            }

            .form-group {
                position: relative;
                margin: 15px auto;
            }

            .input-login-style {
                padding: 7px 7px 7px 35px;
                border-radius: 10px;
                width: 90%;
                margin: auto;
                border: none;
            }

            .form-group img {
                position: absolute;
                left: 29px;
                top: 10px;
                width: 14px;
            }

            .btn-light {
                padding: 10px 74px;
                color: #FD0BB5;
                border-radius: 10px;
                border: none;
                position: absolute;
                bottom: 30px;
                left: 52px;
            }

            .check {
                width: 50%;
                justify-content: left !important;
                font-size: 10px;
                align-items: center;
            }

            .links_login {
                padding: 10px 10px 30px;
            }

            .links_login div a,
            span {
                color: white;
                font-weight: 500;
            }

            .check input {
                width: fit-content;
                padding: 0;
                margin: 0;
                margin: 0 4px 0 0px;
            }

            .forgot {
                margin: 0 5px 0 0px;
                font-size: 10px;
                position: relative;
                top: 6px;
            }
        }

        @media (min-width: 768px) and (max-width: 994px) {
            .cardForm {
                border-radius: 20px;
                text-align: center;
                padding: 49px 35px !important;
                height: 95%;
                width: 100% !important;
                position: relative;
            }

            .cardForm h2 {
                margin: 20px 0 45px;
            }

            .form-group {
                position: relative;
                margin: 15px auto;
            }

            .input-login-style {
                padding: 7px 7px 7px 35px;
                border-radius: 10px;
                width: 90%;
                margin: auto;
                border: none;
            }

            .form-group img {
                position: absolute;
                left: 29px;
                top: 10px;
                width: 14px;
            }

            .btn-light {
                padding: 10px 74px;
                color: #FD0BB5;
                border-radius: 10px;
                border: none;
                position: absolute;
                bottom: 30px;
                left: 45px;
            }

            .check {
                width: 50%;
                justify-content: left !important;
                font-size: 10px;
                align-items: center;
            }

            .links_login {
                padding: 10px 10px 30px;
            }

            .links_login div a,
            span {
                color: white;
                font-weight: 500;
            }

            .check input {
                width: fit-content;
                padding: 0;
                margin: 0;
                margin: 0 4px 0 0px;
            }

            .forgot {
                margin: 0 5px 0 0px;
                font-size: 10px;
                position: relative;
                top: 6px;
            }
        }

        @media (min-width: 390px) and (max-width: 480px) {}

        @media (min-width: 481px) and (max-width: 605px) {
            .cardForm {
                border-radius: 20px;
                text-align: center;
                padding: 49px 35px !important;
                height: 95%;
                width: 100% !important;
                position: relative;
            }

            .cardForm h2 {
                margin: 20px 0 45px;
            }

            .form-group {
                position: relative;
                margin: 15px auto;
            }

            .form-group {
                width: fit-content;
                position: relative;
                left: 0;
                width: 100%;
            }

            .input-login-style {
                padding: 7px 7px 7px 35px;
                border-radius: 10px;
                width: 90%;
                margin: auto;
                border: none;
            }

            .form-group img {
                position: absolute;
                left: 29px;
                top: 10px;
                width: 14px;
            }

            .btn-light {
                padding: 10px 74px;
                color: #FD0BB5;
                border-radius: 10px;
                border: none;
                position: absolute;
                bottom: 30px;
                left: 55px ;
                width:51vw;
            }

            .check {
                width: 50%;
                justify-content: left !important;
                align-items: center;
            }
            .check span{
                font-size: 12px !important;
            }
            .links_login div a{
                font-size: 12px !important;
            }
            .links_login {
                padding: 10px 10px 30px;
            }

            .links_login div a,
            span {
                color: white;
                font-weight: 500;
            }

            .check input {
                width: fit-content;
                padding: 0;
                margin: 0;
                margin: 0 4px 0 0px;
            }

            .forgot {
                margin: 0 5px 0 0px;
                font-size: 12px !important;
                position: relative;
                top: 5px;
            }
        }

        @media (min-width: 390px) and (max-width: 480px) {
            .cardForm {
                border-radius: 20px;
                text-align: center;
                padding: 49px 35px !important;
                height: 95%;
                width: 100% !important;
                position: relative;
            }

            .cardForm h2 {
                margin: 20px 0 45px;
            }

            .form-group {
                position: relative;
                margin: 15px auto;
            }

            .form-group {
                width: fit-content;
                position: relative;
                left: 0;
                width: 100%;
            }

            .input-login-style {
                padding: 7px 7px 7px 35px;
                border-radius: 10px;
                width: 90%;
                margin: auto;
                border: none;
            }

            .form-group img {
                position: absolute;
                left: 20px;
                top: 10px;
                width: 14px;
            }

            .btn-light {
                padding: 5px 10px;
                color: #FD0BB5;
                border-radius: 10px;
                border: none;
                font-size: 14px;
                position: absolute;
                bottom: 40px;
                left: 50px ;
                width:20vw;
            }

            .check {
                width: 50%;
                justify-content: left !important;
                align-items: center;
            }
            .check span{
                font-size: 10px !important;
            }
            .links_login div a{
                font-size: 10px !important;
            }
            .links_login {
                padding: 10px 10px 30px;
            }

            .links_login div a,
            span {
                color: white;
                font-weight: 500;
            }

            .check input {
                width: fit-content;
                padding: 0;
                margin: 0;
                margin: 0 4px 0 0px;
            }

            .forgot {
                margin: 0 5px 0 0px;
                font-size: 12px !important;
                position: relative;
                top: 1px;
            }
        }
        @media (max-width: 390px) {
            .cardForm {
                border-radius: 20px;
                text-align: center;
                padding: 49px 35px !important;
                height: 95%;
                width: 100% !important;
                position: relative;
            }

            .cardForm h2 {
                margin: 20px 0 45px;
            }

            .form-group {
                position: relative;
                margin: 15px auto;
            }

            .form-group {
                width: fit-content;
                position: relative;
                left: 0;
                width: 100%;
            }
            .loginCard {
                padding: 70px 20px !important;
            }
            .input-login-style {
                padding: 7px 7px 7px 35px;
                border-radius: 10px;
                width: 90%;
                margin: auto;
                border: none;
            }

            .form-group img {
                position: absolute;
                left: 20px;
                top: 10px;
                width: 14px;
            }

            .btn-light {
                padding: 5px 10px;
                color: #FD0BB5;
                border-radius: 10px;
                border: none;
                font-size: 14px;
                position: absolute;
                bottom: 40px;
                left: 50px ;
                width:20vw;
            }

            .check {
                width: 50%;
                justify-content: left !important;
                align-items: center;
            }
            .check span{
                font-size: 10px !important;
            }
            .links_login div a{
                font-size: 10px !important;
            }
            .links_login {
                padding: 10px 10px 30px;
            }

            .links_login div a,
            span {
                color: white;
                font-weight: 500;
            }

            .check input {
                width: fit-content;
                padding: 0;
                margin: 0;
                margin: 0 4px 0 0px;
            }

            .forgot {
                margin: 0 5px 0 0px;
                font-size: 12px !important;
                position: relative;
                top: 1px;
            }
        }
    </style>
</head>

<body>
<header class="bg-white">
    <div class="container d-flex justify-content-between ">
        <div class="logo col-lg-2 wow flipInX"><a href="index.html"><img src="{{asset('images/1234567.png')}}" alt=""></a></div>

        <div class="links col-lg-7 d-flex align-itemss-center justify-content-between">
            <a href="" class="wow bounceIn" data-wow-duration=".5s">Home</a>
            <a href="" class="wow bounceIn" data-wow-duration="1s">Service</a>
            <a href="" class="wow bounceIn" data-wow-duration="1.5s">About us</a>
            <a href="" class="wow bounceIn" data-wow-duration="2s">Connect with us</a>
            <a href="" class="wow bounceIn" data-wow-duration="2.5s">Find your place</a>
            <a href="" class="wow bounceIn" data-wow-duration="3s">Profile</a>
        </div>
        <div class="menu col-lg-3 text-right w-25">
            <div class="d-flex flex-column justify-content-start position-relative uu" style="left: 50px;">
                <button class="sign_in wow fadeIn my-1 w-50" style="font-size: 14px;">sign in</button>
                <button class="sign_in wow fadeIn my-1 w-50" style="font-size: 14px;">sign up</button>
            </div>
            <button class="btn ml-4 toggle_"><i class="fas fa-ellipsis-v"></i></button>
            <div class="block text-left">
                <a href="" class="wow bounceIn" data-wow-duration=".5s">Home</a>
                <a href="" class="wow bounceIn" data-wow-duration="1s">Service</a>
                <a href="" class="wow bounceIn" data-wow-duration="1.5s">About us</a>
                <a href="" class="wow bounceIn" data-wow-duration="2s">Connect with us</a>
                <a href="" class="wow bounceIn" data-wow-duration="2.5s">Find your place</a>
                <a href="" class="wow bounceIn" data-wow-duration="3s">Profile</a>
            </div>
        </div>
    </div>
</header>
<main style="margin-top: 80px;">
    <div class="container">
        <div class="row">
            <div class="loginCard bg-white d-flex justify-content-between align-item-center col-md-12 mx-auto py-5 px-4"
                 style="height: 86%;">
                <div class="col-lg-6 img"></div>
                <div class="col-lg-5 form">
                    <div class="cardForm p-4">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <h2>Login</h2>
                            <div class="form-group">
                                <img src="{{asset('images/Iconly-Broken-Profile.svg')}}" alt="">
                                <input class="input-login-style" type="number" name="phone" id=""
                                       placeholder="@lang('Phone Number')">
                            </div>
                            <div class="form-group">
                                <img src="{{asset('images/svgexport (50).svg')}}" alt="">
                                <input class="input-login-style" type="password" name="password" id=""
                                       placeholder="@lang('Password')">
                            </div>
                            <div class="d-flex justify-content-between links_login align-item-center">
                                <div class="check d-flex align-item-center">
                                    <input class="input-login-style" type="checkbox" name="remember" id="">
                                    <span>@lang('Remember me')</span>
                                </div>
                                <div class="forgot">
                                    <a href="">@lang('Forgot Password?')</a>
                                </div>
                            </div>
                            <button type="submit" class="btn-light">Login</button>
                        </form>
                    </div>
                    <div class="sign-up">
                        <p>New here?<a href="" class="pink">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="{{asset('../js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('../js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('../js/wow.min.js')}}"></script>
<script src="{{asset('../js/script.js')}}"></script>
</body>

</html>
