@extends('layouts.app')
@section('pageTitle', 'Products')
@section('content')
    <style>
        .w-200 {
            width: 200px;
        }

        @media screen and (max-width:767px) {
            .w-200 {
                width: 230px;
            }

            .fa-plus-circle {
                margin-left: 5px;
            }
        }

        .btn-style {
            border-radius: 5px;
            border-color: #1C63B8;
            color: #1C63B8;
            font-weight: bold;
            box-shadow: 0 9px rgb(178, 195, 218);
        }

        .btn-style:hover {
            background: #1C63B8;

        }

        .btn-style:active {
            background-color: #1C63B8;
            box-shadow: 0 5px rgb(178, 195, 218);
            ;
            transform: translateY(4px);
            border-color: #1C63B8;
        }

        @keyframes slideInLeft {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(0);
            }
        }

        .slideInLeft {
            animation: 1s ease-out 0s 1 slideInLeft;
        }

        .fa-info-circle {
            font-size: larger;
        }
        .main-breadcrumbs .wt-breadcrumb .b-links{
        color: #80ddff !important;
    }
    </style>
    <div class="page-content">
        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
            <div class="overlay-main site-bg-secondry opacity-05">

            </div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="site-text-primary text-white">Products</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div class="main-breadcrumbs">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li class="b-links">Products</li>
                        </ul>
                    </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <section class="service-details pt-0 pb-3    bg-gray-light" id="expertise_products">
            <div class="container ">
                <div class="auto-container">
                    <div class="row clearfix ">
                        <div class="col-12 ">
                            <h2 class="text-center m-0 p-0 pt-4">Products</h2>
                            <div class="col-12 content-side  mt-2">
                                <div class="service-details-content ">
                                    <div class="content-two">

                                        <div class="feature-list">
                                            <!-- <h3 class="text-center">Our Products</h3>-->
                                            <div class="row clearfix  ">

                                                <div class="main col-lg-3 col-md-6 col-sm-6 column  mt-4">
                                                    <div class="single-item wow slideInLeft animated" data-wow-delay="0ms"
                                                        data-wow-duration="700ms">

                                                        <div class="d-flex justify-content-center ">


                                                            <a href="#"
                                                                class="info-btn-clr btn-style w-200 btn btn-outline-primary py-2 px-2 info"
                                                                data-toggle="modal" data-target="#popup-product-1">

                                                                AGROTECH TEXTILES
                                                                <i class="fa fa-info-circle"></i>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3  col-sm-6 column  mt-4">
                                                    <div class="single-item wow slideInLeft animated" data-wow-delay="0ms"
                                                        data-wow-duration="700ms">

                                                        <div class="d-flex justify-content-center ">


                                                            <a href="#"
                                                                class="info-btn-clr btn-style w-200 btn btn-outline-primary py-2 px-2 info"
                                                                data-toggle="modal" data-target="#popup-product-2">
                                                                <!--<i class="fas fa-info mr-2"></i>-->

                                                                BUILDTECH TEXTILES
                                                                <i class="fa fa-info-circle"></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3  col-sm-6 column  mt-4">
                                                    <div class="single-item wow slideInLeft animated" data-wow-delay="0ms"
                                                        data-wow-duration="700ms">

                                                        <div class="d-flex justify-content-center ">


                                                            <a href="#"
                                                                class="info-btn-clr btn w-200 btn-style btn-outline-primary py-2 px-2 info"
                                                                data-toggle="modal" data-target="#popup-product-3">

                                                                CLOTHTECH TEXTILES
                                                                <i class="fa fa-info-circle"></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3  col-sm-6 column  mt-4">
                                                    <div class="single-item wow slideInLeft animated" data-wow-delay="0ms"
                                                        data-wow-duration="700ms">

                                                        <div class="d-flex justify-content-center ">


                                                            <a href="#"
                                                                class="info-btn-clr btn w-200 btn-style btn-outline-primary py-2 px-2 info"
                                                                data-toggle="modal" data-target="#popup-product-4">

                                                                GEOTECH TEXTILES
                                                                <i class="fa fa-info-circle"></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3  col-sm-6 column  mt-4">
                                                    <div class="single-item wow slideInLeft animated" data-wow-delay="0ms"
                                                        data-wow-duration="700ms">

                                                        <div class="d-flex justify-content-center ">


                                                            <a href="#"
                                                                class="info-btn-clr btn w-200 btn-style btn-outline-primary py-2 px-2 info"
                                                                data-toggle="modal" data-target="#popup-product-5">

                                                                HOMETECH TEXTILES
                                                                <i class="fa fa-info-circle"></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6  column  mt-4">
                                                    <div class="single-item wow slideInLeft animated" data-wow-delay="0ms"
                                                        data-wow-duration="700ms">

                                                        <div class="d-flex justify-content-center ">


                                                            <a href="#"
                                                                class="info-btn-clr w-200 btn btn-style btn-outline-primary py-2 px-2 info"
                                                                data-toggle="modal" data-target="#popup-product-6">

                                                                INDUTECH TEXTILES
                                                                <i class="fa fa-info-circle"></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6  column  mt-4">
                                                    <div class="single-item wow slideInLeft animated" data-wow-delay="0ms"
                                                        data-wow-duration="700ms">

                                                        <div class="d-flex justify-content-center ">


                                                            <a href="#"
                                                                class="info-btn-clr btn w-200 btn-style btn-outline-primary py-2 px-2 info"
                                                                data-toggle="modal" data-target="#popup-product-7">

                                                                MEDITECH TEXTILES
                                                                <i class="fa fa-info-circle"></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6  column  mt-4">
                                                    <div class="single-item wow slideInLeft animated" data-wow-delay="0ms"
                                                        data-wow-duration="700ms">

                                                        <div class="d-flex justify-content-center ">


                                                            <a href="#"
                                                                class="info-btn-clr btn w-200 btn-style btn-outline-primary py-2 px-2 info"
                                                                data-toggle="modal" data-target="#popup-product-8">

                                                                MOBILTECH TEXTILES
                                                                <i class="fa fa-info-circle"></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6  column  mt-4">
                                                    <div class="single-item wow slideInLeft animated" data-wow-delay="0ms"
                                                        data-wow-duration="700ms">

                                                        <div class="d-flex justify-content-center ">


                                                            <a href="#"
                                                                class="info-btn-clr btn w-200 btn-style btn-outline-primary py-2 px-2 info"
                                                                data-toggle="modal" data-target="#popup-product-9">

                                                                OEKOTECH TEXTILES
                                                                <i class="fa fa-info-circle"></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6  column  mt-4">
                                                    <div class="single-item wow slideInLeft animated" data-wow-delay="0ms"
                                                        data-wow-duration="700ms">

                                                        <div class="d-flex justify-content-center ">


                                                            <a href="#"
                                                                class="info-btn-clr w-200 btn btn-style btn-outline-primary py-2 px-2 info"
                                                                data-toggle="modal" data-target="#popup-product-10">

                                                                PACKTECH TEXTILES
                                                                <i class="fa fa-info-circle"></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6  column  mt-4">
                                                    <div class="single-item wow slideInLeft animated" data-wow-delay="0ms"
                                                        data-wow-duration="700ms">

                                                        <div class="d-flex justify-content-center ">


                                                            <a href="#"
                                                                class="info-btn-clr w-200 btn btn-style btn-outline-primary py-2 px-2 info"
                                                                data-toggle="modal" data-target="#popup-product-11">

                                                                PROTECH TEXTILES
                                                                <i class="fa fa-info-circle"></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6  column mt-4">
                                                    <div class="single-item wow slideInLeft animated" data-wow-delay="0ms"
                                                        data-wow-duration="700ms">

                                                        <div class="d-flex justify-content-center ">


                                                            <a href="#"
                                                                class="info-btn-clr w-200 btn btn-style btn-outline-primary py-2 px-2 info"
                                                                data-toggle="modal" data-target="#popup-product-12">

                                                                SPORTECH TEXTILES
                                                                <i class="fa fa-info-circle"></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6  column  mt-4 mb-sm-3 ">
                                                    <div class="single-item wow slideInLeft animated" data-wow-delay="0ms"
                                                        data-wow-duration="700ms">

                                                        <div class="d-flex justify-content-center ">


                                                            <a href="#"
                                                                class="info-btn-clr w-200 btn btn-style btn-outline-primary py-2 px-2 info"
                                                                data-toggle="modal" data-target="#popup-product-13">

                                                                INFRATECH TEXTILES
                                                                <i class="fa fa-info-circle"></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3  mt-4 col-sm-6  column mb-3 ">
                                                    <div class="single-item wow slideInLeft animated" data-wow-delay="0ms"
                                                        data-wow-duration="700ms">

                                                        <div class="d-flex justify-content-center ">


                                                            <a href="#"
                                                                class="info-btn-clr w-200 btn btn-style btn-outline-primary py-2 px-2 info"
                                                                data-toggle="modal" data-target="#popup-product-14">

                                                                FILTERTECH TEXTILES
                                                                <i class="fa fa-info-circle"></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- large modal -->
                                                <div class="modal fade" id="popup-product-1" tabindex="-1"
                                                    role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body pt-0">
                                                                <div class="product-card pb-2">
                                                                    <button type="button"
                                                                        class="close popup-close p-2 m-0"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <img src="images/product-img/benninger.jpg"
                                                                        alt="" class="w-100 "
                                                                        style="height: 300px">
                                                                    <div class="m-0 p-0 card-title">
                                                                        <div class="d-flex align-items-center">
                                                                            <h3 class="p-0 px-2 mb-0 mt-3 text-capitalize">
                                                                                AGROTECH TEXTILES
                                                                            </h3>
                                                                        </div>


                                                                    </div>

                                                                    <p class="p-2">Lorem ipsum, dolor sit amet
                                                                        consectetur adipisicing elit. Dolore dolorem
                                                                        excepturi harum provident ducimus deserunt unde
                                                                        alias nostrum? Recusandae, est voluptates autem
                                                                        mollitia doloremque facilis cum quis quia cumque
                                                                        iusto.</p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="popup-product-2" tabindex="-1"
                                                    role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body pt-0">
                                                                <div class="product-card pb-2">
                                                                    <button type="button"
                                                                        class="close popup-close p-2 m-0"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <img src="images/product-img/benninger.jpg"
                                                                        alt="" class="w-100 "
                                                                        style="height: 300px">
                                                                    <div class="m-0 p-0 card-title">
                                                                        <div class="d-flex align-items-center">
                                                                            <h3 class="p-0 px-2 mb-0 mt-3 text-capitalize">
                                                                                BUILDTECH TEXTILES
                                                                            </h3>
                                                                        </div>


                                                                    </div>

                                                                    <p class="p-2">Lorem ipsum, dolor sit amet
                                                                        consectetur adipisicing elit. Dolore dolorem
                                                                        excepturi harum provident ducimus deserunt unde
                                                                        alias nostrum? Recusandae, est voluptates autem
                                                                        mollitia doloremque facilis cum quis quia cumque
                                                                        iusto.</p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="popup-product-3" tabindex="-1"
                                                    role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body pt-0">
                                                                <div class="product-card pb-2">
                                                                    <button type="button"
                                                                        class="close popup-close p-2 m-0"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <img src="images/product-img/benninger.jpg"
                                                                        alt="" class="w-100 "
                                                                        style="height: 300px">
                                                                    <div class="m-0 p-0 card-title">
                                                                        <div class="d-flex align-items-center">
                                                                            <h3 class="p-0 px-2 mb-0 mt-3 text-capitalize">
                                                                                CLOTHTECH TEXTILES
                                                                            </h3>
                                                                        </div>


                                                                    </div>

                                                                    <p class="p-2">Lorem ipsum, dolor sit amet
                                                                        consectetur adipisicing elit. Dolore dolorem
                                                                        excepturi harum provident ducimus deserunt unde
                                                                        alias nostrum? Recusandae, est voluptates autem
                                                                        mollitia doloremque facilis cum quis quia cumque
                                                                        iusto.</p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="popup-product-4" tabindex="-1"
                                                    role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body pt-0">
                                                                <div class="product-card pb-2">
                                                                    <button type="button"
                                                                        class="close popup-close p-2 m-0"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <img src="images/product-img/benninger.jpg"
                                                                        alt="" class="w-100 "
                                                                        style="height: 300px">
                                                                    <div class="m-0 p-0 card-title">
                                                                        <div class="d-flex align-items-center">
                                                                            <h3 class="p-0 px-2 mb-0 mt-3 text-capitalize">
                                                                                GEOTECH TEXTILES
                                                                            </h3>
                                                                        </div>


                                                                    </div>

                                                                    <p class="p-2">Lorem ipsum, dolor sit amet
                                                                        consectetur adipisicing elit. Dolore dolorem
                                                                        excepturi harum provident ducimus deserunt unde
                                                                        alias nostrum? Recusandae, est voluptates autem
                                                                        mollitia doloremque facilis cum quis quia cumque
                                                                        iusto.</p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="popup-product-5" tabindex="-1"
                                                    role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content ">
                                                            <div class="modal-body pt-0">
                                                                <div class="product-card pb-2">
                                                                    <button type="button"
                                                                        class="close popup-close p-2 m-0"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <img src="images/product-img/benninger.jpg"
                                                                        alt="" class="w-100 "
                                                                        style="height: 300px">
                                                                    <div class="m-0 p-0 card-title">
                                                                        <div class="d-flex align-items-center">
                                                                            <h3 class="p-0 px-2 mb-0 mt-3 text-capitalize">
                                                                                HOMETECH TEXTILES
                                                                            </h3>
                                                                        </div>


                                                                    </div>

                                                                    <p class="p-2">Lorem ipsum, dolor sit amet
                                                                        consectetur adipisicing elit. Dolore dolorem
                                                                        excepturi harum provident ducimus deserunt unde
                                                                        alias nostrum? Recusandae, est voluptates autem
                                                                        mollitia doloremque facilis cum quis quia cumque
                                                                        iusto.</p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="popup-product-6" tabindex="-1"
                                                    role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body pt-0">
                                                                <div class="product-card pb-2">
                                                                    <button type="button"
                                                                        class="close popup-close p-2 m-0"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <img src="images/product-img/benninger.jpg"
                                                                        alt="" class="w-100 "
                                                                        style="height: 300px">
                                                                    <div class="m-0 p-0 card-title">
                                                                        <div class="d-flex align-items-center">
                                                                            <h3 class="p-0 px-2 mb-0 mt-3 text-capitalize">
                                                                                INDUTECH TEXTILES
                                                                            </h3>
                                                                        </div>


                                                                    </div>

                                                                    <p class="p-2">Lorem ipsum, dolor sit amet
                                                                        consectetur adipisicing elit. Dolore dolorem
                                                                        excepturi harum provident ducimus deserunt unde
                                                                        alias nostrum? Recusandae, est voluptates autem
                                                                        mollitia doloremque facilis cum quis quia cumque
                                                                        iusto.</p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="popup-product-7" tabindex="-1"
                                                    role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body pt-0">
                                                                <div class="product-card pb-2">
                                                                    <button type="button"
                                                                        class="close popup-close p-2 m-0"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <img src="images/product-img/benninger.jpg"
                                                                        alt="" class="w-100 "
                                                                        style="height: 300px">
                                                                    <div class="m-0 p-0 card-title">
                                                                        <div class="d-flex align-items-center">
                                                                            <h3 class="p-0 px-2 mb-0 mt-3 text-capitalize">
                                                                                MEDITECH TEXTILES
                                                                            </h3>
                                                                        </div>


                                                                    </div>

                                                                    <p class="p-2">Lorem ipsum, dolor sit amet
                                                                        consectetur adipisicing elit. Dolore dolorem
                                                                        excepturi harum provident ducimus deserunt unde
                                                                        alias nostrum? Recusandae, est voluptates autem
                                                                        mollitia doloremque facilis cum quis quia cumque
                                                                        iusto.</p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="popup-product-8" tabindex="-1"
                                                    role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body pt-0">
                                                                <div class="product-card pb-2">
                                                                    <button type="button"
                                                                        class="close popup-close p-2 m-0"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <img src="images/product-img/benninger.jpg"
                                                                        alt="" class="w-100 "
                                                                        style="height: 300px">
                                                                    <div class="m-0 p-0 card-title">
                                                                        <div class="d-flex align-items-center">
                                                                            <h3 class="p-0 px-2 mb-0 mt-3 text-capitalize">
                                                                                MOBILTECH TEXTILES
                                                                            </h3>
                                                                        </div>


                                                                    </div>

                                                                    <p class="p-2">Lorem ipsum, dolor sit amet
                                                                        consectetur adipisicing elit. Dolore dolorem
                                                                        excepturi harum provident ducimus deserunt unde
                                                                        alias nostrum? Recusandae, est voluptates autem
                                                                        mollitia doloremque facilis cum quis quia cumque
                                                                        iusto.</p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="popup-product-9" tabindex="-1"
                                                    role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body pt-0">
                                                                <div class="product-card pb-2">
                                                                    <button type="button"
                                                                        class="close popup-close p-2 m-0"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <img src="images/product-img/benninger.jpg"
                                                                        alt="" class="w-100 "
                                                                        style="height: 300px">
                                                                    <div class="m-0 p-0 card-title">
                                                                        <div class="d-flex align-items-center">
                                                                            <h3 class="p-0 px-2 mb-0 mt-3 text-capitalize">
                                                                                OEKOTECH TEXTILES
                                                                            </h3>
                                                                        </div>


                                                                    </div>

                                                                    <p class="p-2">Lorem ipsum, dolor sit amet
                                                                        consectetur adipisicing elit. Dolore dolorem
                                                                        excepturi harum provident ducimus deserunt unde
                                                                        alias nostrum? Recusandae, est voluptates autem
                                                                        mollitia doloremque facilis cum quis quia cumque
                                                                        iusto.</p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="popup-product-10" tabindex="-1"
                                                    role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body pt-0">
                                                                <div class="product-card pb-2">
                                                                    <button type="button"
                                                                        class="close popup-close p-2 m-0"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <img src="images/product-img/benninger.jpg"
                                                                        alt="" class="w-100 "
                                                                        style="height: 300px">
                                                                    <div class="m-0 p-0 card-title">
                                                                        <div class="d-flex align-items-center">
                                                                            <h3 class="p-0 px-2 mb-0 mt-3 text-capitalize">
                                                                                PACKTECH TEXTILES
                                                                            </h3>
                                                                        </div>


                                                                    </div>

                                                                    <p class="p-2">Lorem ipsum, dolor sit amet
                                                                        consectetur adipisicing elit. Dolore dolorem
                                                                        excepturi harum provident ducimus deserunt unde
                                                                        alias nostrum? Recusandae, est voluptates autem
                                                                        mollitia doloremque facilis cum quis quia cumque
                                                                        iusto.</p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="popup-product-11" tabindex="-1"
                                                    role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body pt-0">
                                                                <div class="product-card pb-2">
                                                                    <button type="button"
                                                                        class="close popup-close p-2 m-0"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <img src="images/product-img/benninger.jpg"
                                                                        alt="" class="w-100 "
                                                                        style="height: 300px">
                                                                    <div class="m-0 p-0 card-title">
                                                                        <div class="d-flex align-items-center">
                                                                            <h3 class="p-0 px-2 mb-0 mt-3 text-capitalize">
                                                                                PROTECH TEXTILES
                                                                            </h3>
                                                                        </div>


                                                                    </div>

                                                                    <p class="p-2">Lorem ipsum, dolor sit amet
                                                                        consectetur adipisicing elit. Dolore dolorem
                                                                        excepturi harum provident ducimus deserunt unde
                                                                        alias nostrum? Recusandae, est voluptates autem
                                                                        mollitia doloremque facilis cum quis quia cumque
                                                                        iusto.</p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="popup-product-12" tabindex="-1"
                                                    role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body pt-0">
                                                                <div class="product-card pb-2">
                                                                    <button type="button"
                                                                        class="close popup-close p-2 m-0"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <img src="images/product-img/benninger.jpg"
                                                                        alt="" class="w-100 "
                                                                        style="height: 300px">
                                                                    <div class="m-0 p-0 card-title">
                                                                        <div class="d-flex align-items-center">
                                                                            <h3 class="p-0 px-2 mb-0 mt-3 text-capitalize">
                                                                                SPORTECH TEXTILES
                                                                            </h3>
                                                                        </div>


                                                                    </div>

                                                                    <p class="p-2">Lorem ipsum, dolor sit amet
                                                                        consectetur adipisicing elit. Dolore dolorem
                                                                        excepturi harum provident ducimus deserunt unde
                                                                        alias nostrum? Recusandae, est voluptates autem
                                                                        mollitia doloremque facilis cum quis quia cumque
                                                                        iusto.</p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="popup-product-13" tabindex="-1"
                                                    role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body pt-0">
                                                                <div class="product-card pb-2">
                                                                    <button type="button"
                                                                        class="close popup-close p-2 m-0"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <img src="images/product-img/benninger.jpg"
                                                                        alt="" class="w-100 "
                                                                        style="height: 300px">
                                                                    <div class="m-0 p-0 card-title">
                                                                        <div class="d-flex align-items-center">
                                                                            <h3 class="p-0 px-2 mb-0 mt-3 text-capitalize">
                                                                                INFRATECH TEXTILES
                                                                            </h3>
                                                                        </div>


                                                                    </div>

                                                                    <p class="p-2">Lorem ipsum, dolor sit amet
                                                                        consectetur adipisicing elit. Dolore dolorem
                                                                        excepturi harum provident ducimus deserunt unde
                                                                        alias nostrum? Recusandae, est voluptates autem
                                                                        mollitia doloremque facilis cum quis quia cumque
                                                                        iusto.</p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="popup-product-14" tabindex="-1"
                                                    role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body pt-0">
                                                                <div class="product-card pb-2">
                                                                    <button type="button"
                                                                        class="close popup-close p-2 m-0"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <img src="images/product-img/benninger.jpg"
                                                                        alt="" class="w-100 "
                                                                        style="height: 300px">
                                                                    <div class="m-0 p-0 card-title">
                                                                        <div class="d-flex align-items-center">
                                                                            <h3 class="p-0 px-2 mb-0 mt-3 text-capitalize">
                                                                                FILTERTECH TEXTILES
                                                                            </h3>
                                                                        </div>


                                                                    </div>

                                                                    <p class="p-2">Lorem ipsum, dolor sit amet
                                                                        consectetur adipisicing elit. Dolore dolorem
                                                                        excepturi harum provident ducimus deserunt unde
                                                                        alias nostrum? Recusandae, est voluptates autem
                                                                        mollitia doloremque facilis cum quis quia cumque
                                                                        iusto.</p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>

        <section class="bg-gray-light">
            <div class="row ">

                <div class="container">
                    <div class="col-md-4 mx-auto mb-2">

                    <div class="card">
                      <div class="card-header">Title</div>
                      <div class="card-body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni modi, reiciendis consequatur tenetur cupiditate beatae obcaecati nesciunt ratione ex esse optio et. Et qui deserunt doloribus odit repudiandae cupiditate voluptatibus!</div>

                    </div>
                  </div>
            </div></div>
        </section>

        <!-- GALLERY CONTENT START -->




       <!-- <div class="section-full p-t50 p-b50 bg-gray-light">
            <div class="container">
                <div class=" row">-->
                    <!--removed margin-left 15 px ,class is "product-grid"-->

                    <!--<div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/rapier weaving.jpg" class="showImg">
                                    <img src="images/product-img/rapier weaving.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Lindauer</b> Dornier Rapier & Airjet World Class Looms For Technical Textiles
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/ngr.png" class="showImg">
                                    <img src="images/product-img/ngr.png" alt="">
                                </a>
                                <p class="about">
                                    <b>NGR</b> Austria World Class Plastics PP/HDPE Recycling Lines
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/img 4.png" class="showImg">
                                    <img src="images/product-img/img 4.png" alt="">
                                </a>
                                <p class="about">
                                    <b>Tsudakoma</b> Looms Airjet World Class Looms For Technical Textiles
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/toyota.jpg" class="showImg">
                                    <img src="images/product-img/toyota.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Toyota</b> Looms Airjet World Class Looms For Technical Textiles
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/picanol.jpg" class="showImg">
                                    <img src="images/product-img/picanol.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Picanol</b> Rapier & Airjet Looms Airjet World Class Looms For Technical Textiles
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/starlinger.jpg" class="showImg">
                                    <img src="images/product-img/starlinger.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Starlinger</b> PP/HDPE Extrusion Tape World Class Manufacturing Lines
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle">

                            <div class="product-image">
                                <a href="images/product-img/starling_circular.jpg" class="showImg">
                                    <img src="images/product-img/starling_circular.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Starlinger</b> PP/HDPE Tape Circular Weaving World Class Manufacturing Lines
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/starling_coating.jpg" class="showImg">
                                    <img src="images/product-img/starling_coating.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Starlinger</b> PP/HDPE Coating World Class Manufacturing Lines
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/starlinger2.jpg" class="showImg">
                                    <img src="images/product-img/starlinger2.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Starlinger</b> PP/HDPE Conversion World Class Manufacturing Lines
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/starlinger3.jpg" class="showImg">
                                    <img src="images/product-img/starlinger3.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Starlinger</b> PP/HDPE Waste Recycling World Class Manufacturing Lines
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/lohia.jpg" class="showImg">
                                    <img src="images/product-img/lohia.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Lohia</b> PP/HDPE Etrusion Tape World Class Manufacturing Lines
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/lohia-tape-winder.jpg" class="showImg">
                                    <img src="images/product-img/lohia-tape-winder.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Lohia</b> PP/HDPE Tape winders World Class Manufacturing Lines
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/lohia-circular.jpg" class="showImg">
                                    <img src="images/product-img/lohia-circular.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Lohia</b> PP/HDPE Tape Circular Weaving World Class Manufacturing Lines
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/lohia3.jpg" class="showImg">
                                    <img src="images/product-img/lohia3.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Lohia</b> PP/HDPE Coating World Class Manufacturing Lines
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/lohia6.jpg" class="showImg">
                                    <img src="images/product-img/lohia6.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Lohia</b> PP/HDPE Filament Spinning World Class Manufacturing Lines
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/farespa.jpg" class="showImg">
                                    <img src="images/product-img/farespa.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Fare</b> Polypropylene One Step Staple Fiber World Class Manufacturing Lines
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/farespa2.jpg" class="showImg">
                                    <img src="images/product-img/farespa2.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Fare</b> Polypropylene Two Step Staple Fiber World class Manufacturing Lines
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/oerlikon.jpg" class="showImg">
                                    <img src="images/product-img/oerlikon.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Oerlikon</b> Barmag Polypropylene Staple Fiber World Class Manufacturing Lines
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/dilo.jpg" class="showImg">
                                    <img src="images/product-img/dilo.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Dilo</b> Needle Punching World Class Manufacturing Lines For Non Wovens
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/karlmayer.jpg" class="showImg">
                                    <img src="images/product-img/karlmayer.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Karlmayer</b> World Class Warp Knitting, Circular & Flat Knitting Machines
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/menzel.jpg" class="showImg">
                                    <img src="images/product-img/menzel.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Menzel</b> World Class Coating & Winding Machines
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/autefa.jpg" class="showImg">
                                    <img src="images/product-img/autefa.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Autefa</b>World Class Manufacturing Lines For Non Wovens
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/benninger.jpg" class="showImg">
                                    <img src="images/product-img/benninger.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Benninger</b> World Class Manufacturing Lines For Warping, Coating, Finishing
                                    Machineries
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/reifenhauser.jpg" class="showImg">
                                    <img src="images/product-img/reifenhauser.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Reifenhauser</b> World Class Manufacturing Lines For Extrusion, Non Wovens, Recycling
                                    Machineries
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/saurer.jpg" class="showImg">
                                    <img src="images/product-img/saurer.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Saurer</b> World Class Manufacturing Machineries For, Cabling, Twisting, Spinning
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 animate_line">
                        <div class="wt-box service-box-1-new bg-white cardbg h-100 cardstyle">
                            <div class="product-image">
                                <a href="images/product-img/zimmer.jpg" class="showImg">
                                    <img src="images/product-img/zimmer.jpg" alt="">
                                </a>
                                <p class="about">
                                    <b>Zimmer</b> World Class Manufacturing Lines For Warping, Coating, Finishing
                                    Machineries
                                </p>
                            </div>
                        </div>
                    </div>








                </div>
            </div>
        </div>-->
        <!-- GALLERY CONTENT END -->

    </div>
@endsection
