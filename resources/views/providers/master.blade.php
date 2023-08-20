
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saloons</title>
    <link rel="stylesheet" href="{{asset('../css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/all.css')}}">
    <link rel="stylesheet" href="{{asset('../css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('../css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
    <link rel="stylesheet" href="{{asset('../css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('../css/swiper-bundle.min.css')}}" />


    @yield('style')
</head>

<body>
<div class="loading">
    <img class="wow hinge" src="../images/1234567.png" alt="">
</div>
<div class="popup3">
    <div class="card_pop">
        <div class="close text-left">
            <button class="c3"><i class="fas fa-times text-dark"></i></button>
        </div>
        <div class="img_pop mb-4">
            <img src="../images/cmcm.png" alt="">
        </div>
        <form action="" method="post">
            <div class="d-flex justify-content-between align-items-center wid_size">
                <p class="m-0">enter a new Period</p>
                <input type="text" style="width: 150px;" name="" id="date_" placeholder="period title">
            </div>
            <div class="form-group">
                <input type="number" name="" id="date_" placeholder="from">
            </div>
            <div class="form-group">
                <input type="number" name="" id="date__" placeholder="to">
            </div>
            <div class="footer_popup_button d-flex justify-content-end">
                <button class="cancel cancel3" style="color: #fd0bb4;" type="button">Cancel</button>
                <button class="confim_btn2 ml-4" type="button">Save</button>
            </div>
        </form>
    </div>
</div>
<main class="d-flex justify-content-between">
    <div class="left_popu d-flex justify-content-between align-items-center flex-row-reverse">
        <button class="btn" id="door">
            <i class="fas fa-ellipsis-v"></i>
        </button>
        <div class="menu_pop d-flex justify-content-between align-items-center">
            <a href="" class="user my-4 d-flex justify-content-left align-items-center">
                <img src="../images/NoPath - Copy (16).png" alt="">
                <div class="para ml-2">
                    <p>Account</p>
                </div>
            </a>
            <a href="" class="my-4 customer d-flex justify-content-left align-items-center">
                <i class="fas fa-home"></i>
                <div class="para ml-2">
                    <p>Home</p>
                </div>
            </a>
            <a href="" class="my-4 customer d-flex justify-content-left align-items-center">
                <img src="../images/mor.png" alt="">
                <div class="para ml-2">
                    <p>Operations</p>
                </div>
            </a>
            <a href="" class="my-4 customer d-flex justify-content-left align-items-center">
                <i class="fas fa-sliders-h"></i>
                <div class="para ml-2">
                    <p>Setup</p>
                </div>
            </a>
            <a href="" class="my-4 customer d-flex justify-content-left align-items-center">
                <i class="fas fa-file-alt"></i>
                <div class="para ml-2">
                    <p>Reports</p>
                </div>
            </a>
            <a href="" class="my-4 customer d-flex justify-content-left align-items-center">
                <i class="fas fa-user-plus"></i>
                <div class="para ml-2">
                    <p>Create New User</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-2 p-0 aside bg-white">
        <aside class="bg-white text-center col-lg-12 p-3">
            <div class="logo mr-5 mb-5">

                <a href="">
                    <img id="logo" src="../images/1234567.png" alt="">
                </a>
            </div>
            <div class="content-sidepar text-left px-2">
                <p class="mb-4 ml-3">Admin tools</p>
                <a href="" class="user my-4 d-flex justify-content-left align-items-center">
                    <img src="../images/NoPath - Copy (16).png" alt="">
                    <div class="para ml-2">
                        <p>Account</p>
                    </div>
                </a>
                <a href="" class="my-4 customer d-flex justify-content-left align-items-center">
                    <i class="fas fa-home"></i>
                    <div class="para ml-2">
                        <p>Home</p>
                    </div>
                </a>
                <a href="" class="my-4 customer d-flex justify-content-left align-items-center">
                    <img src="../images/mor.png" alt="">
                    <div class="para ml-2">
                        <p>Operations</p>
                    </div>
                </a>
                <a href="" class="my-4 customer d-flex justify-content-left align-items-center">
                    <i class="fas fa-sliders-h"></i>
                    <div class="para ml-2">
                        <p>Setup</p>
                    </div>
                </a>
                <a href="" class="my-4 customer d-flex justify-content-left align-items-center">
                    <i class="fas fa-file-alt"></i>
                    <div class="para ml-2">
                        <p>Reports</p>
                    </div>
                </a>
                <a href="" class="my-4 customer d-flex justify-content-left align-items-center">
                    <i class="fas fa-user-plus"></i>
                    <div class="para ml-2">
                        <p>Create New User</p>
                    </div>
                </a>
            </div>
        </aside>
    </div>
    <div class="col-lg-10 main-content main_ p-0">
        <header class="bg-white head col-lg-12">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="col-lg-6 d-flex justify-content-start align-items-center">
                    <h2 class="mr-5">Operation</h2>
                    <div class="switch_ ml-5">
                        <span>open</span>
                        <div class="sw">
                            <input type="checkbox" hidden="hidden" id="username">
                            <label class="switch" for="username"></label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <div class="user d-flex justify-content-left align-items-center">
                        <img src="../images/NoPath - Copy (16).png" alt="">
                        <div class="para ml-2">
                            <p>Ahmed Bassam</p>
                            <p class="text-secondary">Web Dev</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
    </div>






</main>
    <script src="{{asset('../js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('../js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('../js/wow.min.js')}}"></script>
    <script src="{{asset('../js/script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  @yield('js')
</body>

</html>
