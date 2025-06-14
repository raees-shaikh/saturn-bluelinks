@extends('layouts.app')
@section('pageTitle', ucfirst($product->title))
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
                                {{-- {{ $product->title }} --}}
                            </h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div class="main-breadcrumbs">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="/">Home</a></li>
                            <li><a href="{{ route('frontend.product.index') }}">Products</a></li>
                            <li class="">{{ $pCategory->title }}</li>
                            <li class="b-links">{{ $product->title }}</li>
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
                            <!-- BLOG START -->
                            <div class="">
                                <h1 class="wt-tilte  m-b10 m-t0 h2">{{ $product->title }}</h1>
                                @if ($product->image)
                                    <img class="d-block cust-img-width"
                                        src="{{ asset('storage/images/products/' . $product->image) }}" alt="">
                                @endif
                                {{-- <img class="d-block w-100" src="{{ url('images\product-img\benninger.jpg') }}"
                                alt=""> --}}
                                @if ($product->body)
                                    <div class="mt-4">
                                        <h4 class="wt-tilte  m-b10 m-t0">Description</h4>
                                        {!! $product->body !!}
                                    </div>
                                @endif
                                @if ($product->yt_url)
                                    <iframe width="560" height="315" src="{{ getYoutubeEmbedUrl($offer->yt_url) }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>
                                @endif
                            </div>
                        </div>
                        <!-- SIDE BAR START -->
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 rightSidebar  m-b30">
                            <aside class="side-bar">
                                <div class="widget widget_services p-a20">
                                    <div class="text-left m-b20">
                                        <h3 class="widget-title">Related Products</h3>
                                        <hr>
                                    </div>
                                    <ul>
                                        @forelse ($relatedProducts as $product)
                                            <li><a
                                                    href="{{ route('frontend.product.show', ['category' => $pCategory->slug, 'product' => $product->slug]) }}">{{ $product->title }}</a>
                                            </li>
                                        @empty
                                            <li><a href="javascript:void(0);">No Products Found</span></li>
                                        @endforelse
                                    </ul>
                                </div>
                            </aside>

                        </div>


                    </div>

                </div>

            </div>

        </div>
        <!-- OUR BLOG END -->

    </div>
    <!-- CONTENT END -->
@endsection
