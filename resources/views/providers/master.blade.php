<!DOCTYPE html>
<html lang="en">

<head>
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
    <div class="list_popup__ justify-content-center align-items-center">
        <form action="" method="" class="cardform_ p-2">
            <div class="d-flex justify-content-between align-items-center my-3 shadow-lg">
                <input type="checkbox" name="" id="op1" class="d-none input_check">
                <label for="op1" class="w-100 text-md-right p-4 m-0 d-flex justify-content-between align-items-center">
                    <span class="text-dark">resturant</span>
                    <input type="text" value="20$" name="" class="border-light p-2 bg-transparent nice-style">
                </label>
            </div>
            <div class="d-flex justify-content-between align-items-center my-3 shadow-lg">
                <input type="checkbox" name="" id="op2" class="d-none input_check">
                <label for="op2" class="w-100 text-md-right p-4 m-0 d-flex justify-content-between align-items-center">
                    <span class="text-dark">spa</span>
                    <input type="text" value="20$" name="" class="border-light p-2 bg-transparent nice-style">
                </label>
            </div>
            <div class="d-flex justify-content-between align-items-center my-3 shadow-lg">
                <input type="checkbox" name="" id="op3" class="d-none input_check">
                <label for="op3" class="w-100 text-md-right p-4 m-0 d-flex justify-content-between align-items-center">
                    <span class="text-dark"> women' Salons</span>
                    <input type="text" value="20$" name="" class="border-light p-2 bg-transparent nice-style">
                </label>
            </div>
            <div class="d-flex justify-content-between align-items-center my-3 shadow-lg">
                <input type="checkbox" name="" id="op4" class="d-none input_check">
                <label for="op4" class="w-100 text-md-right p-4 m-0 d-flex justify-content-between align-items-center">
                    <span class="text-dark"> men' Salons</span>
                    <input type="text" value="20$" name="" class="border-light p-2 bg-transparent nice-style">
                </label>
            </div>
            <div class="d-flex justify-content-between align-items-center my-3 shadow-lg">
                <input type="checkbox" name="" id="op5" class="d-none input_check">
                <label for="op5" class="w-100 text-md-right p-4 m-0 d-flex justify-content-between align-items-center">
                    <span class="text-dark"> سيتم وضع جميع الخدمات من الداتا بيز بالباك اند</span>
                    <input type="text" value="20$" name="" class="border-light p-2 bg-transparent nice-style">
                </label>
            </div>
            <button class="btn text-white" style="background-color: #5F5AFF;">Save</button>
            <button class="btn text-white" type="button" id="close_list"
                style="background-color: #fd0bb4;">Cancel</button>
        </form>
    </div>
    <div class="q_p opa">
        <div class="question_popup">
            <div class="bg-white card_succ">
                <div class="close_">
                    <button class="btn" style="font-size: 20px;">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="img_succ">
                    <h4 class="my-4 mx-3" style="color: var(--pink);">Has the work been completed</h4>
                </div>
            </div>
            <button class="popup_btn ques_yes_popup mt-4" style="width: 45%;">Yes</button>
            <span style="color: #fd0bb4;">or</span>
            <button class="popup_btn ques_no_popup mt-4" style="width: 45%;">No</button>
            <button class="popup_btn ques_no_popup mt-4" style="width: 96%;">no show up</button>
        </div>
        <div class="card_pop_ cp_">
            <div class="close text-left">
                <button class="c2"><i class="fas fa-times text-dark"></i></button>
            </div>
            <form action="" method="post">
                <div class="form-group">
                    <select name="" id="sell_">
                        <option value="">Card</option>
                        <option value="">Cash</option>
                    </select>
                </div>
                <div class="datapay">
                    <div class="d-flex justify-content-between align-items-center my-2">
                        <p class="m-0" style="font-size: 13px;">Total invoice value</p>
                        <div class="df">
                            <button class="btn" id="menu_" type="button"
                                style="background-color: #5F5AFF;color: white;">menu</button>
                            <form action="" method="post">
                                <input style="width: 70px;" type="number" name="" id="input_click">
                            </form>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center my-2">
                        <p class="m-0" style="font-size: 13px;">Value of the amount paid to enter the queue</p>
                        <p class="text-danger m-0">280$</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center my-2">
                        <p class="m-0" style="font-size: 13px;">Amount required for payment </p>
                        <p class="text-danger m-0">210$</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center my-2">
                        <p class="m-0" style="font-size: 13px;">Tax</p>
                        <p class="text-danger m-0">5$</p>
                    </div>
                    <div class="tm d-flex m-auto">
                        <h5 style="color: #fd0bb4;" class="mr-2">Received</h5>
                        <i style="font-size: 25px; color: #5F5AFF;" class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="footer_popup_button d-flex justify-content-end">
                    <button class="cancel cancel2 close_" style="color: #fd0bb4;" type="button">paid</button>
                </div>
            </form>
        </div>

    </div>
    <div class="loading">
        <img class="wow hinge" src="{{asset('../images/Group 43398.png')}}" alt="">
    </div>

    <main class="d-flex justify-content-between">
        <!-- popups -->
        <div class="popup">
            <div class="popup_one">
                <div class="close text-left">
                    <button class="c"><i class="fas fa-times"></i></button>
                </div><br>
                <div class="body_popup">
                    <div class="search">
                        <form action="">
                            <i class="fas fa-search"></i>
                            <input type="search" name="" id="" placeholder="Search" class="search_input">
                        </form>
                    </div><br>
                    <div class="tabel_content">
                        <div class="head_ d-flex justify-content-between align-items-center">
                            <!-- <h6 class="ml-2">Name</h6> -->
                            <h6 class="ml-2">phone number</h6>
                            <!-- <h6 class="ml-2">paid amount</h6> -->
                            <h6 class="ml-2">actions</h6>
                            <!-- <h6 class="ml-2">Status</h6> -->
                        </div>
                        <div class="bodys">
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <!-- <div class="d-flex justify-content-between"><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div> -->
                                 <p class="mx-1">0595050554551</p>
                                <!--<p class="mx-1">222</p> -->
                                <div class="d-flex justify-content-center">
                                    <button class="btn go mx-2"
                                        style="color: white;font-size: 12px;background: var(--pink);">cancel</button>
                                    <button class="mx-1 btn mx-2"
                                        style="color: white;font-size: 12px;background: var(--blue);">Go
                                        Back</button>
                                </div>
                                <!-- <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <!-- <div class="d-flex justify-content-between"><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div> -->
                                 <p class="mx-1">0595050554551</p>
                                <!--<p class="mx-1">222</p> -->
                                <div class="d-flex justify-content-center">
                                    <button class="btn go mx-2"
                                        style="color: white;font-size: 12px;background: var(--pink);">cancel</button>
                                    <button class="mx-1 btn mx-2"
                                        style="color: white;font-size: 12px;background: var(--blue);">Go
                                        Back</button>
                                </div>
                                <!-- <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <!-- <div class="d-flex justify-content-between"><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div> -->
                                 <p class="mx-1">0595050554551</p>
                                <!--<p class="mx-1">222</p> -->
                                <div class="d-flex justify-content-center">
                                    <button class="btn go mx-2"
                                        style="color: white;font-size: 12px;background: var(--pink);">cancel</button>
                                    <button class="mx-1 btn mx-2"
                                        style="color: white;font-size: 12px;background: var(--blue);">Go
                                        Back</button>
                                </div>
                                <!-- <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <!-- <div class="d-flex justify-content-between"><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div> -->
                                 <p class="mx-1">0595050554551</p>
                                <!--<p class="mx-1">222</p> -->
                                <div class="d-flex justify-content-center">
                                    <button class="btn go mx-2"
                                        style="color: white;font-size: 12px;background: var(--pink);">cancel</button>
                                    <button class="mx-1 btn mx-2"
                                        style="color: white;font-size: 12px;background: var(--blue);">Go
                                        Back</button>
                                </div>
                                <!-- <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <!-- <div class="d-flex justify-content-between"><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div> -->
                                 <p class="mx-1">0595050554551</p>
                                <!--<p class="mx-1">222</p> -->
                                <div class="d-flex justify-content-center">
                                    <button class="btn go mx-2"
                                        style="color: white;font-size: 12px;background: var(--pink);">cancel</button>
                                    <button class="mx-1 btn mx-2"
                                        style="color: white;font-size: 12px;background: var(--blue);">Go
                                        Back</button>
                                </div>
                                <!-- <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <!-- <div class="d-flex justify-content-between"><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div> -->
                                 <p class="mx-1">0595050554551</p>
                                <!--<p class="mx-1">222</p> -->
                                <div class="d-flex justify-content-center">
                                    <button class="btn go mx-2"
                                        style="color: white;font-size: 12px;background: var(--pink);">cancel</button>
                                    <button class="mx-1 btn mx-2"
                                        style="color: white;font-size: 12px;background: var(--blue);">Go
                                        Back</button>
                                </div>
                                <!-- <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <!-- <div class="d-flex justify-content-between"><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div> -->
                                 <p class="mx-1">0595050554551</p>
                                <!--<p class="mx-1">222</p> -->
                                <div class="d-flex justify-content-center">
                                    <button class="btn go mx-2"
                                        style="color: white;font-size: 12px;background: var(--pink);">cancel</button>
                                    <button class="mx-1 btn mx-2"
                                        style="color: white;font-size: 12px;background: var(--blue);">Go
                                        Back</button>
                                </div>
                                <!-- <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <!-- <div class="d-flex justify-content-between"><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div> -->
                                 <p class="mx-1">0595050554551</p>
                                <!--<p class="mx-1">222</p> -->
                                <div class="d-flex justify-content-center">
                                    <button class="btn go mx-2"
                                        style="color: white;font-size: 12px;background: var(--pink);">cancel</button>
                                    <button class="mx-1 btn mx-2"
                                        style="color: white;font-size: 12px;background: var(--blue);">Go
                                        Back</button>
                                </div>
                                <!-- <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <!-- <div class="d-flex justify-content-between"><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div> -->
                                 <p class="mx-1">0595050554551</p>
                                <!--<p class="mx-1">222</p> -->
                                <div class="d-flex justify-content-center">
                                    <button class="btn go mx-2"
                                        style="color: white;font-size: 12px;background: var(--pink);">cancel</button>
                                    <button class="mx-1 btn mx-2"
                                        style="color: white;font-size: 12px;background: var(--blue);">Go
                                        Back</button>
                                </div>
                                <!-- <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <!-- <div class="d-flex justify-content-between"><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div> -->
                                 <p class="mx-1">0595050554551</p>
                                <!--<p class="mx-1">222</p> -->
                                <div class="d-flex justify-content-center">
                                    <button class="btn go mx-2"
                                        style="color: white;font-size: 12px;background: var(--pink);">cancel</button>
                                    <button class="mx-1 btn mx-2"
                                        style="color: white;font-size: 12px;background: var(--blue);">Go
                                        Back</button>
                                </div>
                                <!-- <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                    </select>
                                </div> -->
                            </div>
                        </div>

                    </div>
                    <div class="footer_popup_button d-flex justify-content-end">
                        <button class="cancel">Cancel</button>
                        <button class="confim_btn ml-4">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup2">
            <div class="card_pop">
                <div class="close text-left">
                    <button class="c2"><i class="fas fa-times text-dark"></i></button>
                </div>
                <div class="img_pop mb-4">
                    <img src="{{asset('../images/cmcm.png')}}" alt="">
                </div>
                <form action="" method="post">
                    <p>enter customer phone number</p>
                    <div class="form-group d-flex ">
                        <span>+972</span>
                        <input type="number" name="" id="" placeholder="05155450405">
                    </div>
                    <div class="form-group">
                        <input type="text" name="" id="name_order" placeholder="name">
                    </div>
                    <div class="footer_popup_button d-flex justify-content-end">
                        <button class="cancel cancel2" style="color: #fd0bb4;" type="button">Cancel</button>
                        <button class="confim_btn2 ml-4">Confirm</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="left_popu d-flex justify-content-between align-items-center flex-row-reverse">
            <button class="btn" id="door">
                <i class="fas fa-ellipsis-v"></i>
            </button>
            <div class="menu_pop d-flex justify-content-between align-items-center">
                <a href="" class="user my-4 d-flex justify-content-left align-items-center">
                    <img src="{{asset('../images/NoPath - Copy (16).png')}}" alt="">
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
                    <img src="{{asset('../images/mor.png')}}" alt="">
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
        <!-- end popups -->
        <div class="col-lg-2 p-0 aside">
            <aside class="bg-white text-center col-lg-12 p-3">
                <div class="logo mr-5 mb-5">
                    <a href="">
                        <img id="logo" src="{{asset('../images/1234567.png')}}" alt="">
                    </a>
                </div>
                <div class="content-sidepar text-left px-2">
                    <p class="mb-4 ml-3">Admin tools</p>
                    <a href="" class="user my-4 d-flex justify-content-left align-items-center">
                        <img src="{{asset('../images/NoPath - Copy (16).png')}}" alt="">
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
                        <img src="{{asset('../images/mor.png')}}" alt="">
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
        <div class="col-lg-10 main-content p-0 main_">
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
                            <img src="{{asset('../images/NoPath - Copy (16).png')}}" alt="">
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
