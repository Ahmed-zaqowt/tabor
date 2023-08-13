@extends('providers.master')
    @section('style')
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
    @endsection
@section('content')
    <div class="container">
        <div class="content-body pt-5 px-3">
            <div class="customer_btn">
                <span>Customers</span>
                <button class="border-pink ml-5"><i class="fas fa-plus"></i> add new customer to
                    the fastest tabor</button>
            </div>
            <div class="content-b my-5">
                <!-- Swiper -->

                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="two">
                                <div class="card_prof bg-white">
                                    <div class="_img_">
                                        <div class="layer_card_img_prof"></div>
                                        <img src="{{asset('../images/NoPath - Copy (16).png')}}" alt="">
                                    </div>
                                    <div class="data_card mt-4">
                                        <div
                                            class="switch-data_card w-100 d-flex justify-content-between align-items-center">
                                            <span>Lorem Lorem</span>
                                            <div class="sw">
                                                <input type="checkbox" hidden="hidden" id="username1">
                                                <label class="switch" for="username1"></label>
                                            </div>
                                        </div>
                                        <div class="data_person">
                                            <div class="data_parent">
                                                <div class="d-flex align-items-center">
                                                    <p>12</p>
                                                    <span class="ml-3">person</span>
                                                </div>
                                                <div class="text-center queues">
                                                    <p class="m-0 text-secondary">in tabor</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="send_card text-white py-4">
                                        <i class="fas fa-plus"></i> add customer to tabor
                                    </button>
                                </div>
                                <div class="names">
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <button class="view_all">
                                        <p class="m-0">view All</p>
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="two">
                                <div class="card_prof bg-white">
                                    <div class="_img_">
                                        <div class="layer_card_img_prof"></div>
                                        <img src="{{asset('../images/NoPath - Copy (16).png')}}" alt="">
                                    </div>
                                    <div class="data_card mt-4">
                                        <div
                                            class="switch-data_card w-100 d-flex justify-content-between align-items-center">
                                            <span>Lorem Lorem</span>
                                            <div class="sw">
                                                <input type="checkbox" hidden="hidden" id="username2">
                                                <label class="switch" for="username2"></label>
                                            </div>
                                        </div>
                                        <div class="data_person">
                                            <div class="data_parent">
                                                <div class="d-flex align-items-center">
                                                    <p>12</p>
                                                    <span class="ml-3">person</span>
                                                </div>
                                                <div class="text-center queues">
                                                    <p class="m-0 text-secondary">in tabor</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button id="now_"
                                                class="text-dark text-decoration-none now d-flex justify-content-between align-items-center">
                                            <p>0555</p>
                                            <span id="now_">Now</span>
                                        </button>
                                    </div>
                                    <button class="send_card text-white py-4">
                                        <i class="fas fa-plus"></i> add customer to tabor
                                    </button>
                                </div>
                                <div class="names">
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <button class="view_all">
                                        <p class="m-0">view All</p>
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="two">
                                <div class="card_prof bg-white">
                                    <div class="_img_">
                                        <div class="layer_card_img_prof"></div>
                                        <img src="{{asset('../images/NoPath - Copy (16).png')}}" alt="">
                                    </div>
                                    <div class="data_card mt-4">
                                        <div
                                            class="switch-data_card w-100 d-flex justify-content-between align-items-center">
                                            <span>Lorem Lorem</span>
                                            <div class="sw">
                                                <input type="checkbox" hidden="hidden" id="username4">
                                                <label class="switch" for="username4"></label>
                                            </div>
                                        </div>
                                        <div class="data_person">
                                            <div class="data_parent">
                                                <div class="d-flex align-items-center">
                                                    <p>12</p>
                                                    <span class="ml-3">person</span>
                                                </div>
                                                <div class="text-center queues">
                                                    <p class="m-0 text-secondary">in tabor</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button id="now_"
                                                class="text-dark text-decoration-none now d-flex justify-content-between align-items-center">
                                            <p>0555</p>
                                            <span id="now_">Now</span>
                                        </button>
                                    </div>
                                    <button class="send_card text-white py-4">
                                        <i class="fas fa-plus"></i> add customer to tabor
                                    </button>
                                </div>
                                <div class="names">
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <button class="view_all">
                                        <p class="m-0">view All</p>
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="two">
                                <div class="card_prof bg-white">
                                    <div class="_img_">
                                        <div class="layer_card_img_prof"></div>
                                        <img src="{{asset('../images/NoPath - Copy (16).png')}}" alt="">
                                    </div>
                                    <div class="data_card mt-4">
                                        <div
                                            class="switch-data_card w-100 d-flex justify-content-between align-items-center">
                                            <span>Lorem Lorem</span>
                                            <div class="sw">
                                                <input type="checkbox" hidden="hidden" id="username5">
                                                <label class="switch" for="username5"></label>
                                            </div>
                                        </div>
                                        <div class="data_person">
                                            <div class="data_parent">
                                                <div class="d-flex align-items-center">
                                                    <p>12</p>
                                                    <span class="ml-3">person</span>
                                                </div>
                                                <div class="text-center queues">
                                                    <p class="m-0 text-secondary">in tabor</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="send_card text-white py-4">
                                        <i class="fas fa-plus"></i> add customer to tabor
                                    </button>
                                </div>
                                <div class="names">
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <button class="view_all">
                                        <p class="m-0">view All</p>
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="two">
                                <div class="card_prof bg-white">
                                    <div class="_img_">
                                        <div class="layer_card_img_prof"></div>
                                        <img src="{{asset('../images/NoPath - Copy (16).png')}}" alt="">
                                    </div>
                                    <div class="data_card mt-4">
                                        <div
                                            class="switch-data_card w-100 d-flex justify-content-between align-items-center">
                                            <span>Lorem Lorem</span>
                                            <div class="sw">
                                                <input type="checkbox" hidden="hidden" id="username5">
                                                <label class="switch" for="username5"></label>
                                            </div>
                                        </div>
                                        <div class="data_person">
                                            <div class="data_parent">
                                                <div class="d-flex align-items-center">
                                                    <p>12</p>
                                                    <span class="ml-3">person</span>
                                                </div>
                                                <div class="text-center queues">
                                                    <p class="m-0 text-secondary">in tabor</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="send_card text-white py-4">
                                        <i class="fas fa-plus"></i> add customer to tabor
                                    </button>
                                </div>
                                <div class="names">
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <button class="view_all">
                                        <p class="m-0">view All</p>
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="two">
                                <div class="card_prof bg-white">
                                    <div class="_img_">
                                        <div class="layer_card_img_prof"></div>
                                        <img src="{{asset('../images/NoPath - Copy (16).png')}}" alt="">
                                    </div>
                                    <div class="data_card mt-4">
                                        <div
                                            class="switch-data_card w-100 d-flex justify-content-between align-items-center">
                                            <span>Lorem Lorem</span>
                                            <div class="sw">
                                                <input type="checkbox" hidden="hidden" id="username5">
                                                <label class="switch" for="username5"></label>
                                            </div>
                                        </div>
                                        <div class="data_person">
                                            <div class="data_parent">
                                                <div class="d-flex align-items-center">
                                                    <p>12</p>
                                                    <span class="ml-3">person</span>
                                                </div>
                                                <div class="text-center queues">
                                                    <p class="m-0 text-secondary">in tabor</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="send_card text-white py-4">
                                        <i class="fas fa-plus"></i> add customer to tabor
                                    </button>
                                </div>
                                <div class="names">
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <button class="view_all">
                                        <p class="m-0">view All</p>
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="two">
                                <div class="card_prof bg-white">
                                    <div class="_img_">
                                        <div class="layer_card_img_prof"></div>
                                        <img src="{{asset('../images/NoPath - Copy (16).png')}}" alt="">
                                    </div>
                                    <div class="data_card mt-4">
                                        <div
                                            class="switch-data_card w-100 d-flex justify-content-between align-items-center">
                                            <span>Lorem Lorem</span>
                                            <div class="sw">
                                                <input type="checkbox" hidden="hidden" id="username5">
                                                <label class="switch" for="username5"></label>
                                            </div>
                                        </div>
                                        <div class="data_person">
                                            <div class="data_parent">
                                                <div class="d-flex align-items-center">
                                                    <p>12</p>
                                                    <span class="ml-3">person</span>
                                                </div>
                                                <div class="text-center queues">
                                                    <p class="m-0 text-secondary">in tabor</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="send_card text-white py-4">
                                        <i class="fas fa-plus"></i> add customer to tabor
                                    </button>
                                </div>
                                <div class="names">
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <div class="name my-2 d-flex justify-content-between align-items-center">
                                        <p>0590590556</p>
                                        <p>1</p>
                                    </div>
                                    <button class="view_all">
                                        <p class="m-0">view All</p>
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="swiper-button-next"><img src="{{asset('../images/Group 39244.png')}}" alt=""></div>
                <div class="swiper-button-prev"><img src="{{asset('../images/Group 39245.png')}}" alt=""></div>
                <div class="cards_profile d-flex justify-content-between">








                </div>
            </div>
        </div>
        <div class="tabels_content py-5">
            <div class="tabels__ my-5">
                <p class="ml-3" style="color: #5F5AFF;font-size: 20px;">Currently in service</p>
                <table class="col-lg-12">
                    <tr class="">
                        <th></th>
                        <th colspan="6"><span style="color: #fd0bb4;">search </span><input style="width: 77%;"
                                                                                           type="search" name="" id="search_in"></th>
                    </tr>
                    <tr class="">
                        <th></th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Phone Number</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Name</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Staff</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> paid amount</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Status</th>
                        <th> Actions</th>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">finished</option>
                                    <option value="3">on service</option>
                                    <option value="2">go back</option>
                                    <option value="2">no show up</option>
                                    <option value="2">cancel</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">finished</option>
                                    <option value="3">on service</option>
                                    <option value="2">go back</option>
                                    <option value="2">no show up</option>
                                    <option value="2">cancel</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">finished</option>
                                    <option value="3">on service</option>
                                    <option value="2">go back</option>
                                    <option value="2">no show up</option>
                                    <option value="2">cancel</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">finished</option>
                                    <option value="3">on service</option>
                                    <option value="2">go back</option>
                                    <option value="2">no show up</option>
                                    <option value="2">cancel</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">finished</option>
                                    <option value="3">on service</option>
                                    <option value="2">go back</option>
                                    <option value="2">no show up</option>
                                    <option value="2">cancel</option>
                                </select>
                            </div>
                        </td>
                    </tr>

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
            <div class="tabels__ my-5">
                <p class="ml-3" style="color: #5F5AFF;font-size: 20px;">In tabor</p>
                <table class="col-lg-12">
                    <tr class="">
                        <th></th>
                        <th colspan="6"><span style="color: #fd0bb4;">search </span><input style="width: 77%;"
                                                                                           type="search" name="" id="search_in"></th>
                    </tr>
                    <tr class="">
                        <th></th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Phone Number</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Name</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Staff</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> paid amount</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Status</th>
                        <th> Actions</th>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">cancel</option>
                                    <option value="2">go back</option>
                                    <option value="3">waiting</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">cancel</option>
                                    <option value="2">go back</option>
                                    <option value="3">waiting</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">cancel</option>
                                    <option value="2">go back</option>
                                    <option value="3">waiting</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">cancel</option>
                                    <option value="2">go back</option>
                                    <option value="3">waiting</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">cancel</option>
                                    <option value="2">go back</option>
                                    <option value="3">waiting</option>
                                </select>
                            </div>
                        </td>
                    </tr>

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
            <div class="tabels__ my-5">
                <p class="ml-3" style="color: #5F5AFF; font-size: 20px;">finished</p>
                <table class="col-lg-12">
                    <tr class="">
                        <th></th>
                        <th colspan="6"><span style="color: #fd0bb4;">search </span><input style="width: 77%;"
                                                                                           type="search" name="" id="search_in"></th>
                    </tr>
                    <tr class="">
                        <th></th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Phone Number</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Name</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Staff</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> paid amount</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Status</th>
                        <th> Actions</th>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="2">on service</option>
                                    <option value="3">finished</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="2">on service</option>
                                    <option value="3">finished</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="2">on service</option>
                                    <option value="3">finished</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="2">on service</option>
                                    <option value="3">finished</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="2">on service</option>
                                    <option value="3">finished</option>
                                </select>
                            </div>
                        </td>
                    </tr>

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

            <div class="tabels__ my-5">
                <p class="ml-3" style="color: #5F5AFF;font-size: 20px;">canceled</p>
                <table class="col-lg-12">
                    <tr class="">
                        <th></th>
                        <th colspan="6"><span style="color: #fd0bb4;">search </span><input style="width: 77%;"
                                                                                           type="search" name="" id="search_in"></th>
                    </tr>
                    <tr class="">
                        <th></th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Phone Number</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Name</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Staff</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> paid amount</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Status</th>
                        <th> Actions</th>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">canceled</option>
                                    <option value="1">waiting</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">canceled</option>
                                    <option value="1">waiting</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">canceled</option>
                                    <option value="1">waiting</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">canceled</option>
                                    <option value="1">waiting</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">canceled</option>
                                    <option value="1">waiting</option>
                                </select>
                            </div>
                        </td>
                    </tr>

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
            <div class="tabels__ my-5">
                <p class="ml-3" style="color: #5F5AFF;font-size: 20px;">no show up</p>
                <table class="col-lg-12">
                    <tr class="">
                        <th></th>
                        <th colspan="6"><span style="color: #fd0bb4;">search </span><input style="width: 77%;"
                                                                                           type="search" name="" id="search_in"></th>
                    </tr>
                    <tr class="">
                        <th></th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Phone Number</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Name</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Staff</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> paid amount</th>
                        <th><button style="background: transparent;border: none;"><i
                                    class="fas fa-sort-amount-down-alt"></i></button> Status</th>
                        <th> Actions</th>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">on service</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">on service</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">on service</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">on service</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="my-3">
                        <td class="checkbox"><input type="checkbox" name="" id="" class="check"></td>
                        <td>0595063676</td>
                        <td>Ahmed Ramin</td>
                        <td>Ahmed Ramin</td>
                        <td>222</td>
                        <td>Now</td>
                        <td>
                            <div class="select">
                                <select class="select_">
                                    <option value="1">on service</option>
                                </select>
                            </div>
                        </td>
                    </tr>

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
@endsection


@section('js')
    <script>
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
@endsection


