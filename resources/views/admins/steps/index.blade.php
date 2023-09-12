@extends('providers.master')
@section('style')

    <style>
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

        input:checked+.switch {
            background: #72da67;
        }

        input:checked+.switch::before {
            left: 27px;
            background: #fff;
        }

        input:checked+.switch:active::before {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.28), 0 0 0 20px rgba(0, 150, 136, 0.2);
        }

        .user img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .user .para p {
            margin: 0;
        }

        .para p:nth-child(1) {
            font-size: 15px;
        }

        .para p:nth-child(2) {
            font-size: 13px;
        }

        header {
            border: none;
            padding: 15px 0;
        }

        .main-content {
            background: #F8F8FA;
        }


        /* ما تاخدها عالcss */
        .data_card {
            margin: 90px 0 20px !important;
            box-shadow: 0 0 10px #00000071;
            position: relative;
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
        }

        .now p {
            margin: 0;
        }

        .data_person .d-flex p {
            font-size: 55px;
            margin: 0;
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

        /* dskvkds */
        .names {
            background-color: white;
            padding: 10px;
            margin-top: 30px;
            width: 90%;
            border-radius: 20px;
        }

        header {
            z-index: 1;
        }

        .name {
            background-color: #F8F8FA;
            padding: 10px 25px;

            border-radius: 15px;
        }

        .name p {
            margin: 0;
            font-size: 14px;
        }

        .view_all {
            background-color: transparent;
            height: fit-content;
            font-size: 14px;
            border: none;
        }

        .content-body {
            border-bottom: 10px solid white;
            height: fit-content;
            position: relative;
        }

        body {
            background-color: #F8F8FA;
        }

        .container {
            overflow: hidden;

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

        /* select tabel */
        .select_ {
            /* Reset Select */
            appearance: none;
            outline: 0;
            border: 0;
            box-shadow: none;
            /* Personalize */
            flex: 1;
            padding: 0 1em;
            color: black;
            background-color: #F8F8FA;
            background-image: none;
            cursor: pointer;
        }

        /* Remove IE arrow */
        .select_::-ms-expand {
            display: none;
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

        /* Transition */
        .select:hover::after {
            color: #f39c12;
        }

        table {
            background-color: #F8F8FA;
        }

        table td {
            width: 170px;
            padding: 10px 10px;
            border: 10px solid #F8F8FA;
        }

        table th {
            width: 80px;
            padding: 20px 10px;
            border: 10px solid #F8F8FA;
        }

        table tr {
            background-color: white;
            border-radius: 10px !important;
            padding: 20px;
        }

        .checkbox {
            width: fit-content !important;
        }

        .tabels__ {
            margin-bottom: 150px !important;
        }


        .content-sidepar a {
            padding: 10px 15px;
            width: 100%;
            border-radius: 10px;
            color: black;
        }



        /* COLUMNS */

        .col {
            display: block;
            float: left;
            margin: 0 0 0 1.6%;
        }

        .col:first-of-type {
            margin-left: 0;
        }

        .cf:before,
        .cf:after {
            content: " ";
            display: table;
        }

        .cf:after {
            clear: both;
        }

        .cf {
            zoom: 1;
        }

        @media (min-width: 390px) and (max-width: 480px) {
            main {
                /* overflow: hidden; */
            }
        }

        @media (max-width: 390px) {
            main {
                /* overflow: hidden; */
            }

            .fieldset {
                width: 80% !important;
            }

            .bt_n {
                width: 81%;
            }

            .steps {
                width: 100%;
            }

            .container {
                padding: 0 !important;
            }

            .para p:nth-child(1) {
                font-size: 10px;
                width: fit-content !important;
                margin: 0;
                padding: 0;
            }

            .para p:nth-child(2) {
                font-size: 10px;
                width: fit-content !important;
                margin: 0;
                padding: 0;
            }
        }

        .wrapper {
            width: 100%;
            margin: 30px 0;
        }

        /* STEPS */

        .steps {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #fff;
            text-align: center;
        }


        .steps li {
            display: inline-block;
            margin: 20px;
            color: #ccc;
            padding-bottom: 5px;
        }

        .steps li.is-active {
            border-bottom: 1px solid #3498db;
            color: #3498db;
        }

        /* FORM */

        .buttons {
            position: relative;
            bottom: 110px;
        }

        .logo {
            position: relative;
        }

        main {
            overflow: hidden;
        }

        .table {
            position: relative;
            width: 188%;
            /* right: 86px; */
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

        table td {
            min-width: 180px !important;
        }

        .rowspan {
            min-width: 100px !important;

        }

        body {
            height: 100%;
        }

        .cvcvc label {
            display: block;
            margin: 10px auto;
            background-color: #f1f1f1;
            border: none;
            outline: none;
            font-size: 14px !important;
            font-family: 'Open Sans', sans-serif !important;
            height: 42px;
            width: 20%;
            margin-left: 5px;
            cursor: pointer;
        }

        .nmn label {
            display: block;
            margin: 10px auto;
            background-color: #f1f1f1;
            border: none;
            outline: none;
            font-size: 14px !important;
            font-family: 'Open Sans', sans-serif !important;
            height: 42px;
        }

        .cvv label {
            display: block;
            margin: 10px auto;
            background-color: #f1f1f1;
            border: none;
            outline: none;
            font-size: 14px !important;
            font-family: 'Open Sans', sans-serif !important;
            height: 42px;
            width: 40%;
            margin-left: 5px;
            cursor: pointer;
        }

        @media (min-width: 390px) and (max-width: 480px) {
            .head .container div:nth-child(2) {
                width: 160px !important;
            }

            .head .container div:nth-child(1) h2 {
                font-size: 20px !important;
                position: relative;
                right: 10px;
            }

            .para p:nth-child(1) {
                font-size: 11px;
            }

            .para p:nth-child(2) {
                font-size: 10px;
            }
        }

        .bntnt {
            padding: 10px;
            border-radius: 10px;
            background-color: white;
            border: 1px solid #fd0bb4;
        }

        .show_show {
            display: flex;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="wrapper">
            <!-- أضف هذا الكود في نهاية ملف HTML -->
            <div class="steps">
                <ul>
                    <li class="is-active">contact information</li>
                    <li>service provider information</li>

                    <li>adding another branch</li>
                </ul>
            </div>

            <div class="form-wrapper">

                <fieldset class="section fieldset is-active mt-5">
                    <h3>Your Details</h3>
                    <form method="post" action="{{route('provider.store.salon')}}" class="add-mode-form">
                        @csrf
                        <input type="text" name="name" value="{{@$salon->name}}" id="name" placeholder="yor name">
                        <div class="invalid-feedback"></div>
                        <input type="text" name="email" value="{{@$salon->email}}" id="email" placeholder="Email">
                        <div class="invalid-feedback"></div>
                        <input type="text" name="representing" value="{{@$salon->representing}}" id="email" placeholder="who are you representing">
                        <div class="invalid-feedback"></div>
                        <input type="number" name="phone" value="{{@$salon->phone}}" id="phone" placeholder="phone number">
                        <div class="invalid-feedback"></div>
                        <input type="number" name="phone_other" value="{{@$salon->phone_other}}"  id="email" placeholder="another phone number">
                        <div class="invalid-feedback"></div>
                        <div class="b_t_n_s d-flex flex-column">
                            <div class="button bt_n2 my-2">Next</div>
                            <button class="button border-0">save</button>
                        </div>
                    </form>
                </fieldset>

                <!-- أضف باقي الستيبس هنا -->
                <fieldset class="section fieldset mt-5 col-lg-12">
                    <h3>Your Details</h3>
                    <form method="post" action="{{route('provider.store.details')}}" class="add-mode-form-2"   enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex cvcvc">

                            <div class="col-lg-6">
                                <input type="hidden" name="uuid" class="uuid_salon" value="{{@$salon->uuid}}" placeholder="uuid">

                                <input type="text" name="service_provider_name" value="{{@$salon->service_provider_name}}" id="name"
                                       placeholder="Service Provider Name that will appered to customer">
                                <input type="text" name="company_name" value="{{@$salon->company_name}}" id="email" placeholder="Company Name">
                                <select name="category" id="msms">
                                    <option value="">resturant</option>
                                    <option value="">spa</option>
                                    <option value="women" {{(@$salon->category=='women')?'selected':''}}>women' Salons</option>
                                    <option value="men" {{(@$salon->category=='men')?'selected':''}}>men' Salons</option>
                                    <option value="">other</option>
                                </select>
                                <div class="d-flex justify-content-between align-items-center size_w">
                                    <input type="text" name="cr" value="{{@$salon->cr}}" id="email" placeholder="cr number">
                                    <label for="e1"
                                           class="text-left pl-2 d-flex align-items-center justify-content-center"
                                           style="padding: 0 !important;">
                                        <p class="m-0 text-secondary" style="font-size: 11px;width: fit-content;">
                                            <i class="fas fa-camera"></i>
                                        </p>
                                        <input type="file" name="cr_image" id="e1" placeholder="" class="d-none">
                                    </label>
                                </div>
                                <div class="d-flex justify-content-between align-items-center size_w">
                                    <input type="text" name="tax" value="{{@$salon->tax}}" id="email" placeholder="tax number">
                                    <label for="e1"
                                           class="text-left pl-2 d-flex align-items-center justify-content-center"
                                           style="padding: 0 !important;">
                                        <p class="m-0 text-secondary" style="font-size: 11px;width: fit-content;">
                                            <i class="fas fa-camera"></i>
                                        </p>
                                        <input type="file" name="tax_image"  placeholder="" class="d-none">
                                    </label>
                                </div>
                                <div class="d-flex justify-content-between align-items-center size_w">
                                    <input type="text" name="mail_number" value="{{@$salon->mail_number}}" id="email" placeholder="wasel mail number">
                                    <label for="e1"
                                           class="text-left pl-2 d-flex align-items-center justify-content-center"
                                           style="padding: 0 !important;">
                                        <p class="m-0 text-secondary" style="font-size: 11px;width: fit-content;">
                                            <i class="fas fa-camera"></i>
                                        </p>
                                        <input type="file" name="mail_number_image"  id="e1" placeholder="" class="d-none">
                                    </label>
                                </div>
                                <!-- <div class="d-flex justify-content-between align-items-center">
                                <input type="text" name="email" id="email" placeholder="attachment of signed tabor contract">
                                <label for="e1" class="text-left pl-2 d-flex align-items-center justify-content-center" style="padding: 0 !important;">
                                    <p class="m-0 text-secondary" style="font-size: 11px;width: fit-content;">
                                        <i class="fas fa-camera"></i>
                                    </p>
                                    <input type="file" name="email" id="e1" placeholder="" class="d-none">
                                </label>
                                 </div> -->

                            </div>
                            <div class="col-lg-6">
                                <select name="country" id="msms">
                                    <option value="" disabled>country</option>
                                    <option value="palestine" {{(@$salon->country=='palestine')?'selected':''}}>palestine</option>
                                    <option value="" >eygpt</option>
                                    <option value="">sudan</option>
                                    <option value="">usa</option>
                                    <option value="">other</option>
                                </select>
                                <select name="city" id="msms">
                                    <option value="" disabled>city</option>
                                    <option value="gaza" {{(@$salon->city=='gaza')?'selected':''}}>gaza</option>
                                    <option value="">hebron</option>
                                    <option value="">jerusalem</option>
                                    <option value="">london</option>
                                    <option value="">other</option>
                                </select>
                                <div class="d-flex justify-content-between align-items-center size_w">
                                    <input type="text" value="{{@$salon->contract}}" name="contract" id="email"
                                           placeholder="attachment of signed tabor contract">
                                    <label for="e1"
                                           class="text-left pl-2 d-flex align-items-center justify-content-center"
                                           style="padding: 0 !important;">
                                        <p class="m-0 text-secondary" style="font-size: 11px;width: fit-content;">
                                            <i class="fas fa-camera"></i>
                                        </p>
                                        <input type="file" name="contract_image" id="e1" placeholder="" class="d-none">
                                    </label>
                                </div>
                                <input type="text" name="location" id="email" placeholder="google location">
                            </div>
                        </div>
                        <div class="b_t_n_s d-flex flex-column">
                            <div class="button bt_n2 my-2">Next</div>
                            <button class="button border-0 mb-2">save</button>
                            <button class="button_preve">Previous</button>
                        </div>
                    </form>
                </fieldset>




                <fieldset class="section fieldset mt-5">
                    <h3>adding another branch</h3>
                    <h5 style="font-size: 15px;">do you want to add another branch?</h5>
                    <form method="post" action="{{route('provider.store.salon')}}" class="add-mode-form-1">
                        @csrf
                        <input type="hidden" name="uuid"  class="uuid_salon">

                        <input type="text" name="name" value="{{@$salon->name}}" id="name" placeholder="yor name">
                        <div class="invalid-feedback"></div>
                        <input type="text" name="email" value="{{@$salon->email}}" id="email" placeholder="Email">
                        <div class="invalid-feedback"></div>
                        <input type="text" name="representing" value="{{@$salon->representing}}" id="email" placeholder="who are you representing">
                        <div class="invalid-feedback"></div>
                        <input type="number" name="phone" value="{{@$salon->phone}}" id="phone" placeholder="phone number">
                        <div class="invalid-feedback"></div>
                        <input type="number" name="phone_other" value="{{@$salon->phone_other}}"  id="email" placeholder="another phone number">
                        <div class="invalid-feedback"></div>
                        <div class="b_t_n_s d-flex flex-column">
                            <div class="button bt_n2 my-2">Next</div>
                            <button class="button border-0">save</button>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
@endsection


@section('js')

    <script type="text/javascript" src="{{ asset('dist/image-uploader.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/image-uploader_2.min.js') }}"></script>    <script>
        $('.input-images').imageUploader({
            // preloaded: preloaded,
            imagesInputName: 'images[]',
            preloadedInputName: 'delete_images',
            maxSize: 2 * 1024 * 1024,
            maxFiles: 4
        });


        $(document).ready(function () {
            $('#hide_hide').fadeOut();
            $('#show_show').fadeOut();
            $('.nummin').fadeOut();
            $('.btn_noo').click(() => {
                $('#hide_hide').fadeIn();

            })
            $('.no_').click(() => {
                for (let i = 0; i <= 100; i++) {
                    $('#loop').append(`
                    <option value="">${i}</option>
                    `);
                }
                $('#show_show').fadeIn(1500);
                $('#show_show').css('display', 'flex');
                $('.fs_ .butu').fadeOut(1000);
            })
            $('.mint').change(() => {
                if ($('.mint').val() == 'other') {
                    console.log($('.mint').val());
                    $('.nummin').fadeIn();
                }
            })

            $(".popup3").fadeOut(10);
            $(".popup3").fadeOut();
            $('._plus_').click(() => {
                $(".popup3").fadeIn();
            })
            $('.cancel3').click(() => {
                $(".popup3").fadeOut();
            })
            $('.c3').click(() => {
                $(".popup3").fadeOut();
            })
            var swiper = new Swiper('.swiper', {
                slidesPerView: 3,
                direction: getDirection(),
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                on: {
                    resize: function () {
                        swiper.changeDirection(getDirection());
                    },
                },
            });

            function getDirection() {
                var windowWidth = window.innerWidth;
                var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

                return direction;
            }
            // location.reload();

            $('label').click(function () {
                $('.tab').hide();
                $(this).next('.tab').fadeIn(500);
            });
        });
        new WOW().init();

        $(document).ready(function () {
            $(".button").click(function () {
                var button = $(this);
                var currentSection = button.parents(".section");
                var currentSectionIndex = currentSection.index();
                var headerSection = $(".steps li").eq(currentSectionIndex);
                currentSection.removeClass("is-active").next().addClass("is-active");
                headerSection.removeClass("is-active").next().addClass("is-active");

                $(".form-wrapper").submit(function (e) {
                    e.preventDefault();
                });

                if (currentSectionIndex === 9) {
                    $(document).find(".form-wrapper .section").first().addClass("is-active");
                    $(document).find(".steps li").first().addClass("is-active");
                }
            });

            $(document).on("click", ".button_preve", function () {
                var button = $(this);
                var currentSection = button.parents(".section");
                var currentSectionIndex = currentSection.index();
                var headerSection = $(".steps li").eq(currentSectionIndex);

                if (currentSectionIndex > 0) {
                    currentSection.removeClass("is-active").prev().addClass("is-active");
                    headerSection.removeClass("is-active").prev().addClass("is-active");
                }
                // create element p ?
                $(".form-wrapper").submit(function (e) {
                    e.preventDefault();
                });

                if (currentSectionIndex === 8) {
                    $(document).find(".form-wrapper .section").first().addClass("is-active");
                    $(document).find(".steps li").first().addClass("is-active");
                }
            });
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
                    $('.add_model_form').trigger("reset");
                    console.log(result)
                    $('.uuid_salon').val(result.uuid)
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

        $('.add-mode-form-2').on('submit', function (event) {
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
                    $('.add_model_form').trigger("reset");
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

        $('.add-mode-form-3').on('submit', function (event) {
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
                    $('.add_model_form').trigger("reset");
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

    </script>
@endsection


