<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="PIXINVENT">

    <title>Ahime | {{ isset($title) ? $title :' ' }} Shop</title>

    <link rel="apple-touch-icon" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/css/extensions/nouislider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/css/ui/prism.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/css/forms/select/select2.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/core/menu/menu-types/horizontal-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/plugins/extensions/noui-slider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/pages/app-ecommerce-shop.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu content-detached-left-sidebar ecommerce-application navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="content-detached-left-sidebar">

    <!-- BEGIN: Header-->
    @include('layouts/partials.header')
    <!-- END: Header-->
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    @include('layouts/partials.menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">

            @include('layouts/partials/shared/content-header')

            <div class="content-detached content-right">
                <div class="content-body">
                    <!-- Ecommerce Content Section Starts -->
                    <section id="ecommerce-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ecommerce-header-items">
                                    <div class="result-toggler">
                                        <button class="navbar-toggler shop-sidebar-toggler" type="button" data-toggle="collapse">
                                            <span class="navbar-toggler-icon d-block d-lg-none"><i class="feather icon-menu"></i></span>
                                        </button>
                                        <div class="search-results">
                                            {{ count($shop->products) }} Résultats disponibles
                                        </div>
                                    </div>
                                    <div class="view-options">
                                        <div class="view-btn-option">
                                            <button class="btn btn-white view-btn grid-view-btn active">
                                                <i class="feather icon-grid"></i>
                                            </button>
                                            <button class="btn btn-white list-view-btn view-btn">
                                                <i class="feather icon-list"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Content Section Starts -->
                    <!-- background Overlay when sidebar is shown  starts-->
                    <div class="shop-content-overlay"></div>
                    <!-- background Overlay when sidebar is shown  ends-->

                    <!-- Ecommerce Search Bar Starts -->
                    <section id="ecommerce-searchbar">
                        <div class="row mt-1">
                            <div class="col-sm-12">
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control search-product" id="iconLeft5" placeholder="Search here">
                                    <div class="form-control-position">
                                        <i class="feather icon-search"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Search Bar Ends -->

                    <!-- Ecommerce Products Starts -->
                    <section id="ecommerce-products" class="grid-view">
                        @foreach ($shop->products as $product)
                        <div class="card ecommerce-card" style="max-height: 370px">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="{{ route('details', $product) }}">
                                        <img src="{{ asset($product->mainImage) }}" class="img-fluid" alt="produit image">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            @if($product->price >= 10000000)
                                                <div class="badge badge-warning badge-md">
                                                    5 <i class="feather icon-star ml-25"></i>
                                                </div>
                                            @elseif($product->price >= 5000000)
                                                <div class="badge badge-warning badge-md">
                                                    4 <i class="feather icon-star ml-25"></i>
                                                </div>
                                            @elseif($product->price <= 1000000 || $product->price >= 100000 )
                                                <div class="badge badge-primary badge-md">
                                                    3 <i class="feather icon-star ml-25"></i>
                                                </div>
                                            @elseif($product->price < 100000 || $product->price >= 10000 )
                                                <div class="badge badge-info badge-md">
                                                    2 <i class="feather icon-star ml-25"></i>
                                                </div>
                                            @else
                                                <div class="badge badge-info badge-md">
                                                    <i class="feather icon-star ml-25"></i>
                                                </div>
                                            @endif
                                        </div>
                                        <div>
                                            <h6 class="item-price">
                                                {{ $product->price }} fcfa
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="{{ route('details', $product) }}">
                                            {{ $product->name }}
                                        </a>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            {{ $product->description }}
                                        </p>
                                    </div>
                                </div>
                                <a href="{{ route('details', $product) }}">
                                    <div class="item-options text-center">
                                        <div class="cart move-cart">
                                            <i class="feather icon-shopping-cart"></i>
                                            <span class="">Acheter</span>
                                        </div>
                                    </div>
                                 </a>
                            </div>
                        </div>
                        @endforeach
                    </section>
                    <!-- Ecommerce Products Ends -->

                    <!-- Ecommerce Pagination Starts -->
                    <section id="ecommerce-pagination">
                        <div class="row">
                            <div class="col-sm-12">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center mt-2">
                                        <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item" aria-current="page"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                        <li class="page-item next-item"><a class="page-link" href="#"></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Pagination Ends -->

                </div>
            </div>
            <div class="sidebar-detached sidebar-left">
                <div class="sidebar">
                    <!-- Ecommerce Sidebar Starts -->
                    <div class="sidebar-shop" id="ecommerce-sidebar-toggler">

                        <div class="row">
                            <div class="col-sm-12">
                                <h6 class="filter-heading d-none d-lg-block">Filters</h6>
                            </div>
                        </div>
                        <span class="sidebar-close-icon d-block d-md-none">
                            <i class="feather icon-x"></i>
                        </span>
                        <div class="card">
                            <div class="card-body">
                                <div class="multi-range-price">
                                    <div class="multi-range-title pb-75">
                                        <h6 class="filter-title mb-0">Multi Range</h6>
                                    </div>
                                    <ul class="list-unstyled price-range" id="price-range">
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="price-range" checked value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">All</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="price-range" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50"> &lt;=$10</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="price-range" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">$10 - $100</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="price-range" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">$100 - $500</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="price-range" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">&gt;= $500</span>
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                                <!-- /Price Filter -->
                                <hr>
                                <!-- /Price Slider -->
                                <div class="price-slider">
                                    <div class="price-slider-title mt-1">
                                        <h6 class="filter-title mb-0">Slider</h6>
                                    </div>
                                    <div class="price-slider">
                                        <div class="price_slider_amount mb-2">
                                        </div>
                                        <div class="form-group">
                                            <div class="slider-sm my-1 range-slider" id="price-slider"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Price Range -->
                                <hr>
                                <!-- Categories Starts -->
                                <div id="product-categories">
                                    <div class="product-category-title">
                                        <h6 class="filter-title mb-1">Categories</h6>
                                    </div>
                                    <ul class="list-unstyled categories-list">
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false" checked>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Appliances</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50"> Audio</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Cameras & Camcorders</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Car Electronics & GPS</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Cell Phones</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Computers & Tablets</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50"> Health, Fitness & Beauty</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Office & School Supplies</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">TV & Home Theater</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Video Games
                                                </span>
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                                <!-- Categories Ends -->
                                <hr>
                                <!-- Brands -->
                                <div class="brands">
                                    <div class="brand-title mt-1 pb-1">
                                        <h6 class="filter-title mb-0">Brands</h6>
                                    </div>
                                    <div class="brand-list" id="brands">
                                        <ul class="list-unstyled">
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Insignia™</span>
                                                </span>
                                                <span>746</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">
                                                        Samsung
                                                    </span>
                                                </span>
                                                <span>633</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">
                                                        Metra
                                                    </span>
                                                </span>
                                                <span>591</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">HP</span>
                                                </span>
                                                <span>530</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Apple</span>
                                                </span>
                                                <span>442</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">GE</span>
                                                </span>
                                                <span>394</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Sony</span>
                                                </span>
                                                <span>350</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Incipio</span>
                                                </span>
                                                <span>320</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">KitchenAid</span>
                                                </span>
                                                <span>318</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Whirlpool</span>
                                                </span>
                                                <span>298</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Brand -->
                                <hr>
                                <!-- Rating section starts -->
                                <div id="ratings">
                                    <div class="ratings-title mt-1 pb-75">
                                        <h6 class="filter-title mb-0">Ratings</h6>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <ul class="unstyled-list list-inline ratings-list mb-0">
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                            <li>& up</li>
                                        </ul>
                                        <div class="stars-received">(160)</div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <ul class="unstyled-list list-inline ratings-list mb-0">
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                            <li>& up</li>
                                        </ul>
                                        <div class="stars-received">(176)</div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <ul class="unstyled-list list-inline ratings-list mb-0">
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                            <li>& up</li>
                                        </ul>
                                        <div class="stars-received">(291)</div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <ul class="unstyled-list list-inline ratings-list mb-0 ">
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                            <li>& up</li>
                                        </ul>
                                        <div class="stars-received">(190)</div>
                                    </div>
                                </div>
                                <!-- Rating section Ends -->
                                <hr>
                                <!-- Clear Filters Starts -->
                                <div id="clear-filters">
                                    <button class="btn btn-block btn-primary">CLEAR ALL FILTERS</button>
                                </div>
                                <!-- Clear Filters Ends -->

                            </div>
                        </div>
                    </div>
                    <!-- Ecommerce Sidebar Ends -->

                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('layouts/partials.footer')
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/js/ui/prism.min.js') }}"></script>
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/js/extensions/wNumb.js') }}"></script>
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/js/extensions/nouislider.min.js') }}"></script>
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/js/scripts/components.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/js/scripts/pages/app-ecommerce-shop.js') }}"></script>
    <!-- END: Page JS-->


    @include('flashy::message')

</body>
<!-- END: Body-->

</html>
