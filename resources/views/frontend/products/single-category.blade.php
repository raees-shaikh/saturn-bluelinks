@extends('layouts.app')
@section('pageTitle', ucfirst($pCategory->title))
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
                                {{-- {{ $pCategory->title }} --}}
                            </h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div class="main-breadcrumbs">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="/">Home</a></li>
                            <li><a href="{{ route('frontend.product.index') }}">Products</a></li>
                            <li class="b-links">{{ $pCategory->title }}</li>
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

                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 m-b30">
                            <div class="row">
                                @forelse ($products as $product)
                                    <div class="col-md-6 col-12 my-3">
                                        {{-- @if ($product->image)
                                            <img class="d-block w-100"
                                                src="{{ asset('storage/images/product_categories' . $product->image) }}"
                                                alt="">
                                        @else
                                            <img class="d-block w-100" src="{{ url('images\product-img\benninger.jpg') }}"
                                                alt="">
                                        @endif --}}
                                        <div class="project-img-effect-1 h-100">
                                            <div class="wt-info mt-2 h-100">
                                                <h3 class="wt-tilte  m-b10 m-t0">{{ $product->title }}</h3>
                                                <a href="{{ route('frontend.product.show', ['category' => $pCategory->slug, 'product' => $product->slug]) }}"
                                                    class="site-button-link">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 m-b30">
                                        <p class="text-center">No Products Found</p>
                                    </div>
                                @endforelse
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                {{ $products->onEachSide(1)->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                        <!-- SIDE BAR START -->
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 rightSidebar  m-b30">
                            <aside class="side-bar">
                                <!-- CATEGORY -->
                                <div class="widget widget_services p-a20">
                                    <div class="text-left m-b20 ">
                                        <h3 class="widget-title">Other Categories</h3>
                                        <hr>

                                    </div>
                                    <ul>
                                        @forelse ($relatedPCategories as $rPCategory)
                                            <li><a
                                                    href="{{ route('frontend.product.category', $rPCategory->slug) }}">{{ $rPCategory->title }}</a>
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
            <!-- OUR BLOG END -->

        </div>
        <!-- CONTENT END -->
    @endsection
