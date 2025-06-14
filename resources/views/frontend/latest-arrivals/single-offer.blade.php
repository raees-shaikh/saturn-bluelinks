@extends('layouts.app')
@section('pageTitle', ucfirst($offer->title . ' - ' . $category->title . ' - Latest Offers'))
@section('content')
    <div class="page-content">
        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
            <div class="overlay-main site-bg-secondry opacity-05"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h3 class="site-text-primary text-white">
                                {{-- {{ $offer->title }} --}}
                            </h3>
                        </div>
                    </div>
                    <div class="main-breadcrumbs">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="/">Home</a></li>
                            <li><a href="{{ route('frontend.offer.index') }}">Latest Offers</a></li>
                            <li><a href="{{ route('frontend.offer.category', $category->slug) }}">{{ $category->title }}</a>
                            </li>
                            <li class="b-links">{{ $offer->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-full  p-t80 p-b50 bg-white">
            <div class="container">
                <div class="section-content">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 m-b30">
                            <div class="">
                                <h3 class="wt-tilte  m-b10 m-t0">{{ $offer->title }} </h3>
                                @if ($offer->image)
                                    <img class="d-block cust-img-width"
                                        src="{{ asset('storage/images/offers/' . $offer->image) }}" alt="">
                                @endif
                                {{-- <img class="d-block w-100" src="{{ url('images\product-img\benninger.jpg') }}"
                                    alt=""> --}}
                                @if ($offer->body)
                                    <div class="mt-4">
                                        <h4 class="wt-tilte  m-b10 m-t0">Description</h4>
                                        {!! $offer->body !!}
                                    </div>
                                @endif
                                @if ($offer->yt_url)
                                    <iframe width="560" height="315" src="{{ getYoutubeEmbedUrl($offer->yt_url) }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>
                                @endif

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 rightSidebar  m-b30">
                            <aside class="side-bar">
                                <div class="widget widget_services p-a20">
                                    <div class="text-left m-b30">
                                        <h3 class="widget-title">Related Offers</h3>
                                    </div>
                                    <ul>
                                        @forelse ($relatedOffers as $offer)
                                            <li><a
                                                    href="{{ route('frontend.offer.show', ['category' => $category->slug, 'offer' => $offer->slug]) }}">{{ $offer->title }}</a>
                                            </li>
                                        @empty
                                            <li><a href="javascript:void(0);">No Offer Found</span></li>
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
@endsection
