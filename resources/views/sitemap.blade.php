@extends('layouts.app')
@section('pageTitle', 'Sitemap')
@section('content')

    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
        <div class="overlay-main site-bg-secondry opacity-05"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h1 class="site-text-primary text-whiteb text-white">Sitemap</h1>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->
                <div class="main-breadcrumbs">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="b-links">Sitemap</li>
                    </ul>
                </div>
                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>

    <section class="mt-3">







        @php

            $links = [
                [
                    'name' => 'Home',
                    'link' => '/',
                ],
                [
                    'name' => 'Company Profile',
                    'link' => '/company-profile',
                ],
                [
                    'name' => 'Latest Offers',
                    'link' => '/latest-offers',
                ],
                [
                    'name' => 'Products',
                    'link' => 'products',
                ],
                [
                    'name' => 'Business Process',
                    'link' => '/business-process',
                ],
                [
                    'name' => 'Exhibitions',
                    'link' => '/exhibitions',
                ],
                [
                    'name' => 'Contact Us',
                    'link' => '/contact',
                ],
            ];
        @endphp
        <div class="container ">

   <div class="section-head center wt-small-separator-outer text-center mb-0 pt-4">
                <div class="wt-small-separator site-text-primary">
                    <div class="sep-leaf-left"></div>
                    <h2 class="d-inline">Sitemap</h2>
                    <div class="sep-leaf-right"></div>
                </div>
            </div>
            <div class="row pb-5">
                @foreach ($links as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 text-center">
                        <a {{ $item['link'] === '#' ? '' : 'target="_blank"' }}
                            href="{{ $item['link'] === '#' ? 'javascript:;' : $item['link'] }}"
                            class="oem-btn-style btn btn-outline-primary  ">{{ $item['name'] }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <section>
        <div class="container ">
            <div class="section-head center wt-small-separator-outer text-center mb-0">
                <div class="wt-small-separator site-text-primary">
                    <div class="sep-leaf-left"></div>
                    <h2 class="d-inline">Latest Offers</h2>
                    <div class="sep-leaf-right"></div>
                </div>
            </div>
            <!-- TITLE END-->

            <div class="row pb-5">
                @foreach ($offers as $offer)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4">
                        <a {{ route('frontend.offer.show', ['category' => $offer->categories->slug, 'offer' => $offer->slug]) }}
                            href="{{ route('frontend.offer.show', ['category' => $offer->categories->slug, 'offer' => $offer->slug]) }}"
                            class="oem-btn-style btn btn-outline-primary b-radius-10 sitemap-offer">{{ $offer->title }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        $('.logo-slider').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.228/pdf.min.js"></script>


    <script>
        var _PDF_DOC,
            _CURRENT_PAGE,
            _TOTAL_PAGES,
            _PAGE_RENDERING_IN_PROGRESS = 0,
            _CANVAS = document.querySelector('#pdf-canvas');





        var _PDF_DOC,
            _CURRENT_PAGE,
            _TOTAL_PAGES,
            _PAGE_RENDERING_IN_PROGRESS = 0,
            _CANVAS = document.querySelector('#pdf-canvas');

        // initialize and load the PDF
        async function showPDF(pdf_url) {
            document.querySelector("#pdf-loader").style.display = 'block';

            // get handle of pdf document
            try {
                _PDF_DOC = await pdfjsLib.getDocument({
                    url: pdf_url
                });
            } catch (error) {
                alert(error.message);
            }

            // total pages in pdf
            _TOTAL_PAGES = _PDF_DOC.numPages;

            // Hide the pdf loader and show pdf container
            document.querySelector("#pdf-loader").style.display = 'none';
            document.querySelector("#pdf-contents").style.display = 'block';
            document.querySelector("#pdf-total-pages").innerHTML = _TOTAL_PAGES;

            // show the first page
            showPage(1);
        }

        // load and render specific page of the PDF
        async function showPage(page_no) {
            _PAGE_RENDERING_IN_PROGRESS = 1;
            _CURRENT_PAGE = page_no;

            // disable Previous & Next buttons while page is being loaded
            document.querySelector("#pdf-next").disabled = true;
            document.querySelector("#pdf-prev").disabled = true;

            // while page is being rendered hide the canvas and show a loading message
            document.querySelector("#pdf-canvas").style.display = 'none';
            document.querySelector("#page-loader").style.display = 'block';

            // update current page
            document.querySelector("#pdf-current-page").innerHTML = page_no;

            // get handle of page
            try {
                var page = await _PDF_DOC.getPage(page_no);
            } catch (error) {
                alert(error.message);
            }

            // original width of the pdf page at scale 1
            var pdf_original_width = page.getViewport(1).width;

            // as the canvas is of a fixed width we need to adjust the scale of the viewport where page is rendered
            var scale_required = _CANVAS.width / pdf_original_width;

            // get viewport to render the page at required scale
            var viewport = page.getViewport(scale_required);

            // set canvas height same as viewport height
            _CANVAS.height = viewport.height;

            // setting page loader height for smooth experience
            document.querySelector("#page-loader").style.height = _CANVAS.height + 'px';
            document.querySelector("#page-loader").style.lineHeight = _CANVAS.height + 'px';

            var render_context = {
                canvasContext: _CANVAS.getContext('2d'),
                viewport: viewport
            };

            // render the page contents in the canvas
            try {
                await page.render(render_context);
            } catch (error) {
                alert(error.message);
            }

            _PAGE_RENDERING_IN_PROGRESS = 0;

            // re-enable Previous & Next buttons
            document.querySelector("#pdf-next").disabled = false;
            document.querySelector("#pdf-prev").disabled = false;

            // show the canvas and hide the page loader
            document.querySelector("#pdf-canvas").style.display = 'block';
            document.querySelector("#page-loader").style.display = 'none';
        }

        // click on "Show PDF" buuton
        document.querySelector("#show-pdf-button").addEventListener('click', function() {
            this.style.display = 'block';
            showPDF('pdf/Saturn-Technical-Data.pdf');
        });

        // click on the "Previous" page button
        document.querySelector("#pdf-prev").addEventListener('click', function() {
            if (_CURRENT_PAGE != 1)
                showPage(--_CURRENT_PAGE);
        });

        // click on the "Next" page button
        document.querySelector("#pdf-next").addEventListener('click', function() {
            if (_CURRENT_PAGE != _TOTAL_PAGES)
                showPage(++_CURRENT_PAGE);
        });
    </script>

@endsection
