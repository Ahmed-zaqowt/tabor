<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saloons</title>
    <link rel="stylesheet" href="{{ asset('../css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('../css/all.css') }} ">
    <link rel="stylesheet" href="{{ asset('../css/animate.css') }} ">
    <link rel="stylesheet" href="{{ asset('../css/font-awesome.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('../css/hover-min.css') }} ">
    <link rel="stylesheet" href="{{ asset('../css/style.css') }} ">
    <link rel="stylesheet" href="{{ asset('../css/responsive.css') }} ">
    <link rel="stylesheet" href="{{ asset('../css/swiper-bundle.min.css') }}" />
    <link href="{{asset('admin_assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
          href="{{ asset('dashboard/app-assets/vendors/css/extensions/toastr.min.css') }}">
    <style>
        header {
            border: none;
            padding: 15px 0;
            z-index: 1 !important;
        }

        .q_p {
            display: flex;
            position: fixed;
            top: 0;
            bottom: 0;
            padding: 20px;
            left: 0;
            right: 0;
            z-index: 111111111111111111111111111111111111111111;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to left, #fd0bb433, #605aff36);
        }

        .opa {
            opacity: 0;
        }

        .question_popup {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
        }

        #now_ {
            cursor: pointer;
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

        .now:hover {
            text-decoration: none;
        }

        /* dskvkds */
        .container {
            overflow: hidden;

        }
        .search form{
            width: 100%;
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

        @media (max-width: 390px) {
             .sel_ect {
                width: 100% !important;
            }
        }

        @media (min-width: 390px) and (max-width: 480px) {
            .swiper-slide {
                width: 364.333px !important;
            }

            .sel_ect {
                width: 100% !important;
            }

            .sell_ {
                width: 100% !important;
            }
        }

        .cp_ {
            display: none !important;
        }

        #sell_ {
            border: 1px solid gray;
            padding: 10px;
            width: 380px;
            border-radius: 7px;
            -webkit-border-radius: 7px;
            -moz-border-radius: 7px;
            -ms-border-radius: 7px;
            -o-border-radius: 7px;
            margin: 0 10px;
        }

        .list_popup__ {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            z-index: 91111111111111111111;
            background-color: rgba(0, 0, 0, 0.301);
            display: flex;
        }

        .cardform_ {
            width: 70%;
            border-radius: 15px;
            background-color: white;
            overflow: auto;
            height: 83%;
        }

        .input_check:checked+label {
            background-color: #fd0bb4;
            content: 'Selected';
        }

        .nice-style {
            border: 1px solid rgb(220, 220, 220);
            border-radius: 14px;
        }
    </style>
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
        <div classw-100 text-md-right class="question_popup">
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
        <img class="wow hinge" src="{{ asset('../images/Group 43398.png') }} " alt="">
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
                    <img src="{{ asset('../images/cmcm.png') }} " alt="">
                </div>
                <form action="{{ route('operation.add_user') }}" method="post">
                    @csrf
                    <input id="id" name="id" type="hidden">
                    <p>enter customer phone number</p>
                    <div class="form-group d-flex ">
                        <span>+972</span>
                        <input type="number" name="phone" id="" placeholder="05155450405">
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" id="name_order" placeholder="name">
                    </div>
                    <div class="footer_popup_button d-flex justify-content-end">
                        <button class="cancel cancel2" style="color: #fd0bb4;" type="button">Cancel</button>
                        <button type="submit" class="confim_btn2 ml-4">Confirm</button>
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
                    <img src="{{ asset('../images/NoPath - Copy (16).png') }} " alt="">
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
                    <img src="{{ asset('../images/mor.png') }} " alt="">
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
                        <img id="logo" src="{{ asset('../images/1234567.png') }} " alt="">
                    </a>
                </div>
                <div class="content-sidepar text-left px-2">
                    <p class="mb-4 ml-3">Admin tools</p>
                    <a href="" class="user my-4 d-flex justify-content-left align-items-center">
                        <img src="{{ asset('../images/NoPath - Copy (16).png') }} " alt="">
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
                        <img src="{{ asset('../images/mor.png') }} " alt="">
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
                        <h2 class="mr-5">Orders</h2>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <div class="user d-flex justify-content-left align-items-center">
                            <img src="{{ asset('../images/NoPath - Copy (16).png') }} " alt="">
                            <div class="para ml-2">
                                <p>Ahmed Bassam</p>
                                <p class="text-secondary">Web Dev</p>
                            </div>
                        </div>
                    </div>
            </header>

            <div class="container">
                <div class="tabels_content py-5">
                    <div class="tabels__ my-5">
                        <p class="ml-3" style="color: #5F5AFF;font-size: 20px;">Currently in service</p>
                        <table id="datatable_service" class="col-lg-12">
                          {{--  <tr class="">
                                <th></th>
                                <th colspan="6"><span style="color: #fd0bb4;">search </span><input style="width: 77%;"
                                        type="search" name="" id="search_in"></th>
                            </tr>--}}
                            <thead>
                            <tr class="">
                                <th>#</th>
                                <th>@lang('Category')</th>
                                <th>@lang('Name')</th>
                                <th>@lang('Phone Number')</th>
                                <th>@lang('Email')</th>
                                <th>@lang('Company Name')</th>
                                <th>@lang('CR Number')</th>
                                <th>@lang('Country')</th>
                                <th>@lang('City')</th>
                                <th>@lang('Details')</th>
                            </tr>
                            </thead>
                        </table>
                        <div class="pagination d-flex justify-content-between align-items-center ">
                            <a href=""> <i class="fas fa-chevron-left"></i></a>
                            <a href="" class="a">1</a>
                            <a href="" class="a">2</a>
                            <a href="" class="a">3</a>
                            <a href="" class="a">4</a>
                            <a href=""><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script src="{{ asset('../js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('../js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('../js/wow.min.js') }}"></script>
    <script src="{{ asset('../js/script.js') }}"></script>
    <script src="{{ asset('../js/getdata.js') }}"></script>
    <script src="{{asset('admin_assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/table-datatable.js')}}"></script>
    <script src="{{ asset('dashboard/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $(document).on('change', '.select_status', function(event) {
             alert("ahmed zaqowt ./. ") ;
              var form =  document.getElementById("form_status");
              var data = new FormData(form) ;
              let url = $(form).attr('action');
              var method = $(form).attr('method');
                $.ajax({
                    type: method,
                    cache: false,
                    contentType: false,
                    processData: false,
                    url: url ,
                    data: data,

                    beforeSend: function() {},
                    success: function(result) {
                        toastr.success(result.success);
                        table.draw()
                    },
                    error: function(data) {
                        if (data.status === 422) {
                            var response = data.responseJSON;
                            $.each(response.errors, function(key, value) {
                                var str = (key.split("."));
                                if (str[1] === '0') {
                                    key = str[0] + '[]';
                                }
                                $('[name="' + key + '"], [name="' + key + '[]"]').addClass(
                                    'is-invalid');
                                $('[name="' + key + '"], [name="' + key + '[]"]').closest(
                                    '.form-group').find('.invalid-feedback').html(value[0]);
                            });
                        } else {
                            console.log('ahmed');
                        }
                    }
                });
            });
        });

        $(document).ready(function() {
            $(document).on('click', '.add-customer', function(event) {
                var button = $(this)
                var id = button.data('id')
                $('#id').val(id);
            });
        });






        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //bindTable
        var table = $('#datatable_service').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            searching: false,
            paging: false,
            info: false,
            ajax: {
                url:  '{{ route('order.getdata') }}' ,
            },
            columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
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
                    data: 'category',
                    name: 'category',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'company_name',
                    name: 'company',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'status',
                    name: 'status',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]

        });


        {{--      front      --}}
        $(document).ready(function () {
            $('#menu_').click(() => {
                $('.list_popup__').slideDown(2500);
                $('.q_p').slideUp(1000);
            })
            $('.select_').change(() => {
                swal("Status changed");
            })
            $('.popup').fadeOut();
            $('.popup2').fadeOut();
            $('.list_popup__').hide();

            $('#close_list').click((e) => {
                e.preventDefault();
                $('.list_popup__').slideUp();
            })
            // $('#input_click').click((e) => {
            //     e.preventDefault();
            //     $('.list_popup__').slideDown(2500);
            //     $('.q_p').slideUp(1000);
            // })
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
            var nowElements = Array.from(document.querySelectorAll('#now_'));
            $('.q_p').fadeOut();
            nowElements.forEach(element => {
                element.addEventListener('click', () => {
                    $('.q_p').fadeIn();
                    $('.q_p').removeClass('opa');
                    $('.question_popup').fadeIn();
                    console.log('dsgkvmksfmvdkmksdkv');
                });
            });


            $('.ques_yes_popup').click(() => {
                $('.question_popup').fadeOut();
                $('.question_popup').addClass('cp_');
                $('.card_pop_').removeClass('cp_');
                console.log('dsgknbfnsjlv');
            })
            $('.close_').click(() => {
                $('.q_p').fadeOut();
                $('.question_popup').removeClass('cp_');
                $('.card_pop_').addClass('cp_');
            });
            $('.ques_no_popup ').click(() => {
                $('.q_p').fadeOut();
            })
            $('.c2 ').click(() => {
                $('.q_p').fadeOut();
                $('.question_popup').removeClass('cp_');
                $('.card_pop_').addClass('cp_');
            })


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
