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

        #msms {
            display: block;
            padding: 10px;
            margin: 10px auto;
            background-color: #f1f1f1;
            border: none;
            outline: none;
            font-size: 14px !important;
            font-family: 'Open Sans', sans-serif !important;
            width: 100%;
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

        div.dataTables_wrapper div.dataTables_filter input{
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



        .nice-style {
            border: 1px solid rgb(220, 220, 220);
            border-radius: 14px;
        }
    </style>
</head>

<body>
<main class="d-flex justify-content-between">



    <div class="col-lg-2 p-0 aside">
        <aside class="bg-white text-center col-lg-12 p-3">
            <div class="logo mr-5 mb-5">
                <a href="">
                    <img id="logo" src="{{ asset('../images/1234567.png') }} " alt="">
                </a>
            </div>
            <div class="content-sidepar text-left px-2">
                <p class="mb-4 ml-3">Admin tools</p>
                 @include('admins.parts.side')
            </div>
        </aside>
    </div>
    <div class="col-lg-10 main-content p-0 main_">
        <header class="bg-white head col-lg-12">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="col-lg-6 d-flex justify-content-start align-items-center">
                    <h2 class="mr-5">Orders</h2>
                </div>
                @include('admins.parts.header')
            </div>
        </header>

        <div class="container">
            <div class="wrapper">
                <div class="form-wrapper">
                    <fieldset class="section fieldset is-active mt-5">
                        <h3 id="title"></h3>
                        <form method="post" action="{{route('admin.store')}}" class="add-mode-form">
                            @csrf
                            <input type="hidden" name="id"  id="id">
                            <input type="text" name="name"  id="name" placeholder="yor name">
                            <div class="invalid-feedback"></div>
                            <input type="number" name="phone" id="phone" placeholder="phone number">
                            <div class="invalid-feedback"></div>
                            <input type="text" name="email"  id="email" placeholder="Email">
                            <div class="invalid-feedback"></div>
                            <select id="msms">
                                <option>user</option>
                                <option>user</option>
                                <option>user</option>
                                <option>user</option>
                            </select>
                            <div class="invalid-feedback"></div>
                            <div class="b_t_n_s d-flex flex-column">
                                <button class="button border-0 mb-2">Submit</button>
                                <button type="button" class="button_preve resetform" >Reset Form</button>
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
            <div class="tabels_content py-5">
                <div class="tabels__ my-5">
                    <p class="ml-3" style="color: #5F5AFF;font-size: 20px;">Tabor Admins</p>
                    <table id="datatable_service" class="col-lg-12">
                        {{--  <tr class="">
                              <th></th>
                              <th colspan="6"><span style="color: #fd0bb4;">search </span><input style="width: 77%;"
                                      type="search" name="" id="search_in"></th>
                          </tr>--}}
                        <thead>
                        <tr class="">
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Reset</th>
                            <th>Action</th>
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


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //bindTable
    $('#title').text('Added User To Tabor')
    var table = $('#datatable_service').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        searching: false,
        paging: false,
        info: false,
        ajax: {
            url:  '{{ route('admin.getdata') }}' ,
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
                data: 'role',
                name: 'role',
                orderable: true,
                searchable: true
            },
            {
                data: 'status',
                name: 'status',
                orderable: true,
                searchable: true
            },
            {
                data: 'reset',
                name: 'reset',
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

    $('.add-mode-form').on('submit', function (event) {
        $('.search_input').val("").trigger("change")

        event.preventDefault();
        var data = new FormData(this);
        let url = $(this).attr('action');
        var method = $(this).attr('method');
        $('input').removeClass('is-invalid');
        $('select').removeClass('is-invalid');
        $('.invalid-feedback').text('');
        console.log(data)
        $.ajax({
            type: method,
            cache: false,
            contentType: false,
            processData: false,
            url: url,
            data: data,


            success: function (result) {
                $('.add-mode-form').trigger("reset");
                toastr.success(result.success);
                $('#title').text('Added User To Tabor')
                table.draw()
            },
            error: function (data) {
                $('.done').html('@lang("save")').prop('disabled', false);

                if (data.status === 422) {
                    var response = data.responseJSON;
                    $.each(response.errors, function (key, value) {
                        toastr.error(value);
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

                }
            }
        });
    });

    $(document).ready(function() {
        $(document).on('click', '.edit_btn', function(event) {
            $('input').removeClass('is-invalid');
            $('.invalid-feedback').text('');
            event.preventDefault();
            var button = $(this)
            var id = button.data('id')
            $('#id').val(id);
            $('#name').val(button.data('name'))
            $('#phone').val(button.data('phone'))
            $('#email').val(button.data('email'))
            $('html, body').animate({ scrollTop: 0 }, 'slow');
            $('#title').text('Update User To Tabor')
        });
    });

    $(document).ready(function() {
        $(document).on('click', '.resetform', function(event) {
            $('.add-mode-form').trigger("reset");
        });
    });

    new WOW().init();
</script>
</body>

</html>
