<!-- HEADER END -->
<div id="search-toggle-block" style="display: none;">
    <div id="search">
        <form role="search" id="searchform" action="https://thewebmax.com/search" method="get" class="radius-xl">
            <div class="input-group">
                <input class="form-control text-white" style="background: linear-gradient(45deg, #2b3271, #0b89ca);"
                    value="" name="q" type="search" placeholder="Type To Search" />
                <span class="input-group-append">
                    <button type="button" class="search-btn btn">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>
<div class="page-wraper">
    <!-- HEADER START -->
    <header class="site-header header-style-1 mobile-sider-drawer-menu  d-none d-md-none d-lg-block  d-xl-block">
        <div class="container header-middle clearfix d-none d-md-block d-lg-block  d-xl-block ">
            <div class="logo-header">
                <div class="logo-header-inner logo-header-one">
                    <a href="{{ url('/') }}">
                        <img class="lazyload" data-src="./images/saturn-blue-links-logo.png" alt="" />
                    </a>
                </div>
            </div>
            <div class="header-info">
                <ul>
                    <li>
                        <div class="icon-md">
                            <span class="icon-cell"><i class="flaticon-trophy"></i></span>
                        </div>
                        <div class="icon-content">
                            <span>Leader In Imported </span>
                            <strong>Textile Machinery</strong>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sticky-header main-bar-wraper  navbar-expand-lg">
            <div class="main-bar">
                <div class="container clearfix">
                    <!-- NAV Toggle Button -->
                    <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                        class="navbar-toggler collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-first"></span>
                        <span class="icon-bar icon-bar-two"></span>
                        <span class="icon-bar icon-bar-three"></span>
                    </button>
                    <a class="d-block d-sm-none d-none d-sm-block d-md-none " href="{{ url('/') }}">
                        <img class="lazyload site-nav-logo" data-src="./images/saturn-blue-links-logo.png"
                            class="phone-nav-logo" alt="" />
                    </a>
                    <!-- MAIN Vav -->
                    <div class=" nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
                        <div style="background-image:url(./images/full-logo-vertical.jpg)"
                            class="nav-bg d-block d-sm-none d-none d-sm-block d-md-none"></div>
                        <ul class=" nav navbar-nav bg-transparent">
                            <li class="  {{ URL::current() == url('/') ? 'active' : '' }}">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="  {{ URL::current() == url('/company-profile') ? 'active' : '' }}">
                                <a href="{{ url('/company-profile') }}">Company profile </a>
                            </li>
                            <li class="  {{ URL::current() == url('/latest-offers') ? 'active' : '' }}">
                                <a href="{{ route('frontend.offer.index') }}">Latest Offers</a>
                            </li>
                            <li class="  {{ URL::current() == url('/products') ? 'active' : '' }}">
                                <a href="{{ route('frontend.product.index') }}">Products</a>
                            </li>
                            <li class="  {{ URL::current() == url('/business-process') ? 'active' : '' }}">
                                <a href="{{ url('/business-process') }}">Business Process</a>
                            </li>
                            <li class="  {{ URL::current() == url('/exhibitions') ? 'active' : '' }}">
                                <a href="{{ url('/exhibitions') }}" class="mr-2">Exhibitions</a>
                            </li>
                           {{-- <li class="ml-5 s-icon">
                                <a href="javascript:void(0);" class="header-search-icon pc ">
                                    <i class="fa fa-search h-s-i"></i>
                                </a>
                            </li>--}}
                        </ul>
                    </div>
                    <div class="header-nav-request ">
                        <a href="{{ url('/contact') }}">Contact Us
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->
    <!-- HEADER START -->

    <nav
        class="navbar phone-nav navbar-expand-lg navbar-light bg-light d-block d-sm-none d-none d-sm-block d-md-block d-lg-none">
        <a class="navbar-brand" href="#">
            <img class="lazyload phone-nav-logo" data-src="./images/saturn-blue-links-logo.png" alt="" />
        </a>
        {{--<a href="javascript:void(0);" class="header-search-icon phone nav-hide">
            <i class="fa fa-search"></i>
        </a>--}}
        <button class="navbar-toggler nav-toggle" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100">
                <li class=" nav-item {{ URL::current() == url('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item {{ URL::current() == url('/company-profile') ? 'active' : '' }}">
                    <a href="{{ url('/company-profile') }}">Company profile </a>
                </li>
                <li class="nav-item {{ URL::current() == url('/latest-offers') ? 'active' : '' }}">
                    <a href="{{ url('/latest-offers') }}">Latest Offers</a>
                </li>
                <li class="nav-item {{ URL::current() == url('/products') ? 'active' : '' }}">
                    <a href="{{ url('/products') }}">Products</a>
                </li>
                <li class="nav-item {{ URL::current() == url('/business-process') ? 'active' : '' }}">
                    <a href="{{ url('/business-process') }}">Business Process</a>
                </li>
                <li class="  {{ URL::current() == url('/exhibitions') ? 'active' : '' }}">
                    <a href="{{ url('/exhibitions') }}">Exhibitions</a>
                </li>
                <li class="nav-item {{ URL::current() == url('/contact') ? 'active' : '' }}">
                    <a href="{{ url('/contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
