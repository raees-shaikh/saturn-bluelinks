@extends('layouts.app')
@section('pageTitle', ucfirst($category->title . ' - Latest Offers'))
@section('content')
    <style>
        .main-breadcrumbs .wt-breadcrumb .b-links {
            color: #80ddff;
             !important;
        }
    </style>
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
            <div class="overlay-main site-bg-secondry opacity-05"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="site-text-primary text-white">
                                {{-- {{ $category->title }} --}}
                            </h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div class="main-breadcrumbs">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="/">Home</a></li>
                            <li><a href="{{ route('frontend.offer.index') }}">Latest Offers</a></li>
                            <li class="b-links">{{ $category->title }}</li>
                        </ul>
                    </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- OUR BLOG START -->
        <div class="section-full  p-t80 p-b50 bg-white">
            <div class="container">

                <!-- BLOG SECTION START -->
                <div class="section-content">
                    <div class="row d-flex justify-content-center">

                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                            <div class="row">
                                @forelse($offers as $offer)
                                    <div class="col-md-6 col-12 my-3">
                                        <div class="project-img-effect-1 h-100">
                                            <div class="wt-info mt-2 h-100">
                                                <h3 class="wt-tilte  m-b10 m-t0">{{ $offer->title }}</h3>
                                                <a href="{{ route('frontend.offer.show', ['category' => $category->slug, 'offer' => $offer->slug]) }}"
                                                    class="site-button-link">View Offer</a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 m-b30 text-center text-md-left">
                                        <p>No Offers Found</p>
                                    </div>
                                @endforelse
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                {{ $offers->onEachSide(1)->links('pagination::bootstrap-4') }}
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 rightSidebar  m-b30">
                            <aside class="side-bar">
                                <!-- CATEGORY -->
                                <div class="widget widget_services p-a20">
                                    <div class="text-left m-b30">
                                        <h3 class="widget-title">Other Categories</h3>
                                    </div>
                                    <ul>
                                        @forelse ($relatedCategories as $rCategory)
                                            <li><a
                                                    href="{{ route('frontend.offer.category', $rCategory->slug) }}">{{ $rCategory->title }}</a>
                                            </li>
                                        @empty
                                            <li>No Offers Found</li>
                                        @endforelse
                                    </ul>
                                </div>

                            </aside>

                        </div>
                    </div>
                </div>




            </div>

        </div>

    </div>
    <!-- OUR BLOG END -->



    </div>
    <!-- CONTENT END -->
@endsection
