@extends('layouts.app')
@section('pageTitle', 'Exhibitions')
@section('content')
<style>
    .date-font-style{
    font-family: 'Roboto', sans-serif !important;
    font-size: 14px !important;
}

</style>


    <div class="page-content bg-gray-light">

        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
            <div class="overlay-main site-bg-secondry opacity-05"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h1 class="site-text-primary text-white ">Exhibitions</h1>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div class="main-breadcrumbs">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="b-links">Exhibitions</li>
                        </ul>
                    </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>

        </div>
        <!-- INNER PAGE BANNER END -->

        <div class="section-full p-t30  bg-gray-light ">
            <div class="container">
                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer text-center mb-0">
                    <div class="wt-small-separator site-text-primary">
                        <div class="sep-leaf-left"></div>
                        <h2 class="d-inline">Exhibitions</h2>
                        <div class="sep-leaf-right"></div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        @forelse($exhibitions as $exhibition)
                            <div id="product" class=" col-lg-4 col-md-6 mb-2">
                                <div class="blog-post date-style-2 ">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="{{ route('frontend.exhibition.show', $exhibition->slug) }}"><img
                                                src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}"
                                                alt="" style="height: 350px;object-fit: cover;"></a>
                                    </div>
                                    <div class="wt-post-info bg-white p-t30 p-2">
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="{{ route('frontend.exhibition.show', $exhibition->slug) }}" class="site-text-secondry">
                                                    {{ preg_replace('/<(|\/)p>/', '', $exhibition->title) }}
                                                </a></h3>
                                        </div>
                                        <div class="wt-post-meta text-right">
                                            <ul>
                                                <li class="post-date date-font-style"><i class="fa fa-calendar"></i>
                                                    {{ dd_format($exhibition->start_date, 'd-m-Y') . ' to ' . dd_format($exhibition->end_date, 'd-m-Y') }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-readmore ">
                                            <a href="{{ route('frontend.exhibition.show', $exhibition->slug) }}"
                                                class="site-button-link black">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-b30">
                                <p class="text-center">No Exhibitions Found</p>
                            </div>
                        @endforelse
                    </div>
                    <div class="d-flex justify-content-center ">
                        {{ $exhibitions->onEachSide(1)->links('pagination::bootstrap-4') }}
                    </div>
                    </section>
                </div>
            </div>
        @endsection
