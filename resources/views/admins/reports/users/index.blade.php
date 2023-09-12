<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saloons</title>
    <link rel="stylesheet" href="{{ asset('../css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('../css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('../css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('../css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('../css/hover-min.css')}}">
    <link rel="stylesheet" href="{{ asset('../css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('../css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('../css/swiper-bundle.min.css')}}">
    <link href="{{asset('admin_assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
          href="{{ asset('dashboard/app-assets/vendors/css/extensions/toastr.min.css') }}">
    <style>
        header {
            border: none;
            padding: 15px 0;
        }

        #search_in {
            width: 140px;
            border: 1px solid gray;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
        }

        /* ما تاخدها عالcss */
        .data_card {
            margin: 90px 0 20px !important;
            box-shadow: 0 0 10px #00000071;
            position: relative;
        }

        .check {
            width: 100%;
        }

        .now {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 6px 20px;
            background: #05c5523d;
            border: 1px solid #05C552;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        .now span {
            background: white;
            padding: 3px 5px;
            border-radius: 10px;
            font-size: 12px;
            color: black;
        }

        .now p {
            margin: 0;
        }

        .data_person .d-flex p {
            font-size: 55px;
            margin: 0;
        }

        .data_parent span {
            color: black !important;
        }

        .switch-data_card {
            position: relative;
            bottom: 30px;
        }

        .queues p {
            font-size: 20px;
        }

        .two {
            width: 100%;
        }

        /* Custom Select wrapper */
        .select {
            position: relative;
            display: flex;
            width: 11em;
            height: 3em;
            border-radius: .25em;
            overflow: hidden;
        }

        /* Arrow */
        .select::after {
            content: '\25BC';
            position: absolute;
            top: -3px;
            right: 0;
            padding: 1em;
            background-color: #F8F8FA;
            border-left: 1px solid rgb(191, 191, 191);
            transition: .25s all ease;
            pointer-events: none;
        }

        /* ما تاخده من هان */
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-wrapper {
            height: 749px !important;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            display: flex;
            width: 300.333px !important;
            background-color: transparent;
            justify-content: center;
            align-items: center;
            height: 791px !important;
        }

        .card_prof {
            width: 90%;
        }

        @media (max-width: 760px) {
            .swiper-button-next {
                right: 20px;
            }

            .swiper-button-prev {
                left: 20px;
            }
        }

        .swiper-button-next {
            position: absolute;
            top: 400px;
            right: -20px;
        }

        .swiper-button-prev {
            position: absolute;
            top: 400px;
            left: 10px;
        }

        .swiper-button-prev img {
            width: 40px;
        }

        .swiper-button-next img {
            width: 40px;
        }

        /* dskvkds */
        .container {
            overflow: hidden;

        }

        .logo {
            position: relative;
        }

        .logo #door {
            position: absolute;
            right: -50px;
            top: 10px;
            font-size: 20px;
            color: #5F5AFF;
        }

        .trans3 {
            display: none;
        }

        main {
            overflow: hidden;
        }

        @media (min-width: 390px) and (max-width: 480px) {
            .swiper-slide {
                width: 364.333px !important;
            }
        }
    </style>
</head>

<body>
    <div class="loading">
        <img class="wow hinge" src="{{ asset('../images/Group 43398.png')}}" alt="">
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
                            <h6>Name</h6>
                            <h6>Amount</h6>
                            <h6>Status</h6>
                        </div>
                        <div class="bodys">
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between"><span class="mr-4 text-dark">1</span><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div>
                                <p>222</p>
                                <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                        <option value="2">No JS</option>
                                        <option value="3">Nice!</option>
                                    </select>
                                </div>
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between"><span class="mr-4 text-dark">1</span><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div>
                                <p>222</p>
                                <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                        <option value="2">No JS</option>
                                        <option value="3">Nice!</option>
                                    </select>
                                </div>
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between"><span class="mr-4 text-dark">1</span><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div>
                                <p>222</p>
                                <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                        <option value="2">No JS</option>
                                        <option value="3">Nice!</option>
                                    </select>
                                </div>
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between"><span class="mr-4 text-dark">1</span><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div>
                                <p>222</p>
                                <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                        <option value="2">No JS</option>
                                        <option value="3">Nice!</option>
                                    </select>
                                </div>
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between"><span class="mr-4 text-dark">1</span><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div>
                                <p>222</p>
                                <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                        <option value="2">No JS</option>
                                        <option value="3">Nice!</option>
                                    </select>
                                </div>
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between"><span class="mr-4 text-dark">1</span><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div>
                                <p>222</p>
                                <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                        <option value="2">No JS</option>
                                        <option value="3">Nice!</option>
                                    </select>
                                </div>
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between"><span class="mr-4 text-dark">1</span><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div>
                                <p>222</p>
                                <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                        <option value="2">No JS</option>
                                        <option value="3">Nice!</option>
                                    </select>
                                </div>
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between"><span class="mr-4 text-dark">1</span><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div>
                                <p>222</p>
                                <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                        <option value="2">No JS</option>
                                        <option value="3">Nice!</option>
                                    </select>
                                </div>
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between"><span class="mr-4 text-dark">1</span><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div>
                                <p>222</p>
                                <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                        <option value="2">No JS</option>
                                        <option value="3">Nice!</option>
                                    </select>
                                </div>
                            </div>
                            <div class="body_content d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between"><span class="mr-4 text-dark">1</span><span
                                        class="text-dark">Ahmed
                                        Mohsen</span></div>
                                <p>222</p>
                                <div class="select sel_ect">
                                    <select class="select_ sel_ect_">
                                        <option value="1">waiting</option>
                                        <option value="2">No JS</option>
                                        <option value="3">Nice!</option>
                                    </select>
                                </div>
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
                    <img src="{{ asset('../images/cmcm.png')}}" alt="">
                </div>
                <form action="" method="post">
                    <p>Enter Your Phone Number</p>
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
                    <img src="{{ asset('../images/NoPath - Copy (16).png')}}" alt="">
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
                    <img src="{{ asset('../images/mor.png')}}" alt="">
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
                        <img id="logo" src="{{ asset('../images/1234567.png')}}" alt="">
                    </a>
                </div>
                 <div class="content-sidepar text-left px-2">
                    <p class="mb-4 ml-3">Admin tools</p>
                    <a href="" class="user my-4 d-flex justify-content-left align-items-center">
                        <img src="{{ asset('../images/NoPath - Copy (16).png')}}" alt="">
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
                        <img src="{{ asset('../images/mor.png')}}" alt="">
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
                            <img src="{{ asset('../images/NoPath - Copy (16).png')}}" alt="">
                            <div class="para ml-2">
                                <p>Ahmed Bassam</p>
                                <p class="text-secondary">Web Dev</p>
                            </div>
                        </div>
                    </div>
            </header>

            <div class="container">
                <div class="content-body pt-5 px-3">
                    <h3 class="ml-5">Lorem</h3>
                    <div class="statistic_parent col-lg-12 d-flex justify-content-between">
                        <div class="table_ col-lg-9">
                            <table id="datatable_user" class="w-100 bg-white" style="box-shadow: 0 0 10px rgb(231, 231, 231);">
                                <thead>
                                <tr class="">
                                    <th style="font-size: 14px;">Name</th>
                                    <th style="font-size: 14px;">Phone</th>
                                    <th style="font-size: 14px;">Email</th>
                                    <th style="font-size: 14px;">Queuing</th>
                                    <th style="font-size: 14px;">cancel</th>
                                    <th style="font-size: 14px;">Details</th>
                                </tr>
                                </thead>



                            </table>
                        </div>
                        <div class="_statistic_ col-lg-3">
                            <div class="stc mb-4 bg-white d-flex justify-content-between align-items-center p-4 w-100"
                                style="box-shadow: 0 0 10px rgb(231, 231, 231);border-left: 5px solid #5F5AFF;">
                                <p class="m-0">Today's sums</p>
                                <p class="m-0">{{ $today }}</p>
                            </div>
                            <div class="stc mb-4 bg-white d-flex justify-content-between align-items-center p-4 w-100"
                                style="box-shadow: 0 0 10px rgb(231, 231, 231);border-left: 5px solid #fd0bb4;">
                                <p class="m-0">Week</p>
                                <p class="m-0">{{ $lastWeek }}</p>
                            </div>
                            <div class="stc mb-4 bg-white d-flex justify-content-between align-items-center p-4 w-100"
                                style="box-shadow: 0 0 10px rgb(231, 231, 231);border-left: 5px solid #5F5AFF;">
                                <p class="m-0">Month</p>
                                <p class="m-0">{{ $lastMonth }}</p>
                            </div>
                            <div class="stc mb-4 bg-white d-flex justify-content-between align-items-center p-4 w-100"
                                style="box-shadow: 0 0 10px rgb(231, 231, 231);border-left: 5px solid #fd0bb4;">
                                <p class="m-0">Quarter</p>
                                <p class="m-0">{{ $lastQuarter }}</p>
                            </div>
                            <div class="stc mb-4 bg-white d-flex justify-content-between align-items-center p-4 w-100"
                                style="box-shadow: 0 0 10px rgb(231, 231, 231);border-left: 5px solid #5F5AFF;">
                                <p class="m-0">Year</p>
                                <p class="m-0">{{ $lastYear }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 table__ mx-3 my-5 change_">
                        <h3>Lorem</h3>
                        <div class="table_">
                        <table class="w-100 bg-white" style="box-shadow: 0 0 10px rgb(231, 231, 231);">
                            <tr class="">
                                <th style="font-size: 14px;"><button style="background: transparent;border: none;"><i
                                            class="fas fa-sort-amount-down-alt"></i></button>Date</th>
                                <th style="font-size: 14px;"><button style="background: transparent;border: none;"><i
                                            class="fas fa-sort-amount-down-alt"></i></button>Time</th>
                                <th style="font-size: 14px;"><button style="background: transparent;border: none;"><i
                                            class="fas fa-sort-amount-down-alt"></i></button>section</th>
                                <th style="font-size: 14px;"><button style="background: transparent;border: none;"><i
                                            class="fas fa-sort-amount-down-alt"></i></button>S-P Name
                                </th>
                                <th style="font-size: 14px;"><button style="background: transparent;border: none;"><i
                                            class="fas fa-sort-amount-down-alt"></i></button>Rate</th>
                                <th style="font-size: 14px;"><button style="background: transparent;border: none;"><i
                                            class="fas fa-sort-amount-down-alt"></i></button>Pay</th>
                                <th style="font-size: 14px;"><button style="background: transparent;border: none;"><i
                                            class="fas fa-sort-amount-down-alt"></i></button>Status</th>
                            </tr>
                            <tr class="my-3">
                                <td>12</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                            </tr>
                            <tr class="my-3">
                                <td>12</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                            </tr>
                            <tr class="my-3">
                                <td>12</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                            </tr>
                            <tr class="my-3">
                                <td>12</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                            </tr>
                            <tr class="my-3">
                                <td>12</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                                <td>Lorem, ipsum.</td>
                            </tr>

                        </table>
                    </div>
                    </div>
                </div>
            </div>

    </main>

    <script src="{{ asset('../js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('../js/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('../js/wow.min.js')}}"></script>
    <script src="{{ asset('../js/script.js')}}"></script>
    <script src="{{asset('admin_assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/table-datatable.js')}}"></script>
    <script src="{{ asset('dashboard/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script>

        var table = $('#datatable_user').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            searching: false,
            paging: false,
            info: false,
            ajax: {
                url:  '{{ route('report.user.getdata') }}' ,
            },
            columns: [
                {
                    data: 'name',
                    name: 'name',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'phone',
                    name: 'phone',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'email',
                    name: 'email',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'queuing',
                    name: 'queuing',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'cancel',
                    name: 'cancel',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'details',
                    name: 'details',
                    orderable: false,
                    searchable: false
                },
            ]

        });





        $(document).ready(function () {
            $('.change_').fadeOut();
            var det = document.querySelectorAll('#det');
            det.forEach(btn => {
                $(btn).click(() => {
                    $('.change_').fadeIn();
                    window.scrollTo({
                        top: 800,
                        behavior: 'smooth'
                    });
                });
            });





            $('.popup').fadeOut();
            $('.popup2').fadeOut();

            var views = document.querySelectorAll('.view_all');
            views.forEach(function (view) {
                view.onclick = function () {
                    $('.popup').fadeIn();
                };
            });
            var send_card = document.querySelectorAll('.send_card ');
            send_card.forEach(function (send_cards) {
                send_cards.onclick = function () {
                    $('.popup2').fadeIn();
                };
            });

            $('.c').click(() => {
                $('.popup').fadeOut();
            })
            $('.cancel').click(() => {
                $('.popup').fadeOut();
            })
            $('.c2').click(() => {
                $('.popup2').fadeOut();
            })
            $('.cancel2').click(() => {
                $('.popup2').fadeOut();
            })

            var swiper = new Swiper('.swiper', {
                slidesPerView: 3,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

            });

            function checkScreenSize() {
                var screenSize = $(window).width();

                if (screenSize <= 500) {
                    var swiper = new Swiper('.swiper', {
                        slidesPerView: .9,
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },

                    });

                } else {
                    var swiper = new Swiper('.swiper', {
                        slidesPerView: 3,
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },

                    });
                }
            }

            checkScreenSize();

            $(window).resize(function () {
                checkScreenSize();
            });
            // location.reload();

            $('label').click(function () {
                // إخفاء جميع العناصر المرتبطة بالألسنة الأخرى
                $('.tab').hide();

                // إظهار العناصر المرتبطة بالألسنة المحددة باستخدام الانيميشن
                $(this).next('.tab').fadeIn(500);
            });
        });
        new WOW().init();
    </script>
</body>

</html>
