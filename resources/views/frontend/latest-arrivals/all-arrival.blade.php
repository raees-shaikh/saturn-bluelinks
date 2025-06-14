@extends('layouts.app')
@section('pageTitle', 'Latest Offers')
@section('content')
    <style>
        .main-breadcrumbs .wt-breadcrumb .b-links {
            color: #80ddff;
             !important;
        }
    </style>
    <div class="page-content">
        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
            <div class="overlay-main site-bg-secondry opacity-05"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h1 class="site-text-primary text-whiteb text-white">Latest Offers</h1>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->
                    <div class="main-breadcrumbs">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="b-links">Latest Offers</li>
                        </ul>
                    </div>
                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->
        <div class="section-full p-t30  p-b50 bg-gray-light">
            <div class="container">
                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer text-center mb-0">
                    <div class="wt-small-separator site-text-primary">
                        <div class="sep-leaf-left"></div>
                        <h2 class="d-inline">Latest Offers</h2>
                        <div class="sep-leaf-right"></div>
                    </div>
                </div>
                <!-- TITLE END-->
                <div class="section-content">
                    <div class="row justify-content-center row-eq-height">
                        @forelse($categories as $key=>$categorie)
                            <!-- COLUMNS 1 -->
                            <a href="{{ route('frontend.offer.category', $categorie->slug) }}">
                                <div class="col-lg-4 col-md-6 animate_line">
                                    <div class="wt-box service-box-1-new bg-white cardbg h-100">
                                        <div class="wt-icon-box-wraper-new">
                                            <div class="icon-xl inline-icon">
                                                <img src="{{ asset('storage/images/latest_arrival/' . $categorie->image) }}"
                                                    alt="" style="width:100px;height:100px">
                                            </div>
                                            <div class="wt-icon-number-new">
                                                <span>{{ tableRowSrNo($loop->index, $categories) }}</span></div>
                                        </div>

                                        <div class="service-box-title-new title-style-2 site-text-secondry">
                                            <h3 class="s-title-one">{{ $categorie->title }}</h3>
                                        </div>

                                        <div class="service-box-new-link">
                                            <a href="{{ route('frontend.offer.category', $categorie->slug) }}"
                                                class="site-button-link">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <div>
                                <p>No Offers Found</p>
                            </div>
                        @endforelse
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        {{ $categories->onEachSide(1)->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
