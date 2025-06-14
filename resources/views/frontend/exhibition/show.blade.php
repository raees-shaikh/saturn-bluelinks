@extends('layouts.app')
@section('pageTitle', $exhibition->title . ' - Exhibition')
@section('cdn')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.3/photoswipe.min.css">
@endsection
@section('content')

    <div class="page-content bg-gray-light">

        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
            <div class="overlay-main site-bg-secondry opacity-05"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h1 class="site-text-primary text-white">Gallery</h1>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div class="main-breadcrumbs">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class=""><a href="{{ route('frontend.exhibition.index') }}">Exhibitions</a></li>
                            <li class="b-links">{{ $exhibition->title }}</li>
                        </ul>
                    </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>

        </div>
        <!-- INNER PAGE BANNER END -->

        <div class="business-process bg-gray-light pt-3">
            <div class="row">
            </div>
        </div>

        <section class="container  bg-gray-light  py-md-5 py-3">
            <div class="row">

                <div class="col-12">
                    <h1 class="wt-tilte  m-b10 m-t0 h2">{{ $exhibition->title }}</h1>
                    <div>
                        <p class="text-left">
                            <i class="fa fa-calendar mx-1"></i>
                             {{ dd_format($exhibition->start_date, 'd-m-Y') . ' to ' . dd_format($exhibition->end_date, 'd-m-Y') }}
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img class="d-block cust-img-width"
                                src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}" alt="">
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                            @if ($exhibition->descriptions)
                                <h3>Description</h3>
                                <div>
                                    {!! $exhibition->descriptions !!}
                                </div>
                            @endif
                        </div>
                    </div>
                    {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/4o7YKgrF20Y"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe> --}}
                    <p class="text-right">
                    </p>
                    @if ($exhibition->yt_url)
                        <iframe width="560" height="315" src="{{ getYoutubeEmbedUrl($offer->yt_url) }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    @endif
                </div>
                @if (count($medias))
                    <div class="col-12">
                        <div class="section-head center wt-small-separator-outer text-center mb-0 mt-3">
                            <div class="wt-small-separator site-text-primary">
                                <div class="sep-leaf-left"></div>
                                <h2 class="d-inline">Gallery</h2>
                                <div class="sep-leaf-right"></div>
                            </div>
                        </div>
                        <div class="section-full ">
                            <div class="container">
                                <div
                                    class="masonry-wrap mfp-gallery gallery-js  row clearfix d-flex justify-content-center flex-wrap">
                                    @forelse($medias as $media)
                                        <div class="masonry-item  col-lg-4 col-md-6 col-sm-6 m-b30">
                                            <a data-pswp-width="{{ getimagesize(asset('storage/images/exhibition/' . $media->filename))[0] }}"
                                                data-pswp-height="{{ getimagesize(asset('storage/images/exhibition/' . $media->filename))[1] }}"
                                                data-cropped="true" target="_blank"
                                                href="{{ asset('storage/images/exhibition/' . $media->filename) }}"
                                                class="d-block mfp-link project-img-effect-1">
                                                <img src="{{ asset('storage/images/exhibition/' . $media->filename) }}"
                                                    alt="" />
                                            </a>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    </div>

@endsection
@section('js')
    <script type="module">
        import PhotoSwipeLightbox from 'https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.3/photoswipe-lightbox.esm.min.js';

        const options = {
            //Any element with this class will become an individual gallery
            gallery: '.gallery-js',

            // Your slides will be every <a> tag that is children from .gallery-js
            children: 'a',
            // This module will only load when you click to show the images, making your data bundle lighter
            pswpModule: () => import('https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.3/photoswipe.esm.min.js')
        };

        const lightbox = new PhotoSwipeLightbox(options);

        lightbox.init();
    </script>
@endsection
