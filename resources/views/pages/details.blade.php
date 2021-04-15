@extends('layouts/default')

@section('pageCSS')
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/css/extensions/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/pages/app-ecommerce-details.css') }}">
    <!-- END: Page CSS-->
@stop
@section('content-header')
    @include('layouts/partials/shared/content-header')
@endsection
@section('content')
    <!-- app ecommerce details start -->
    <section class="app-ecommerce-details">
        <div class="card">
            <div class="card-body">
                <div class="row mb-5 mt-2">
                    <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset($product->mainImage) }}" class="img-fluid" alt="product image">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h5>
                            <span class="text-warning">{{ $product->name }}</span> - {{ $product->feature }}
                        </h5>

                        <p>
                            <span class="text-muted">Description</span><br>
                            {{ $product->description }}
                        </p>

                        <div class="ecommerce-details-price d-flex flex-wrap">

                            <p class="font-medium-3 mr-1 mb-0">
                                <span style="text-decoration: line-through">
                                    {{ $product->falsePrice }} fcfa
                                </span> -
                                <span class="text-primary">{{ $product->truePrice }} fcfa</span>
                            </p>
                            <span class="pl-1 font-medium-3 border-left">
                                <i class="feather icon-star text-warning"></i>
                                <i class="feather icon-star text-secondary"></i>
                            </span>
                            <span class="ml-50 text-dark font-medium-1">424 j'aimes</span>
                        </div>
                        <hr>
                        <p> <span class="text-muted">Publier par la boutique : </span>
                            <span class="text-info">{{ $product->shop->name }}</span>
                        </p>
                        <p>Disponible - <span class="text-success">En stock</span></p>
                        <p class="font-weight-bold mb-25"> <i class="feather icon-truck mr-50 font-medium-2"></i>Livraison gratuite
                        </p>

                        <hr>
                        <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-facebook"></i></button>
                        <button type="button" class="btn btn-icon rounded-circle btn-outline-info mr-1 mb-1"><i class="feather icon-twitter"></i></button>
                        <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-instagram"></i></button>
                        <div class="d-flex flex-column flex-sm-row">
                            <button class="btn btn-outline-info mr-0 mr-sm-1 mb-1 mb-sm-0"><i class="feather icon-heart mr-25"></i>J'aime</button>
                            <button class="btn bg-gradient-primary"><i class="feather icon-shopping-cart mr-25"></i>Ajouter au panier</button>
                        </div>
                    </div>
                </div>

                @if(count($other_products) >= 4)
                <div class="card-body">
                    <div class="mt-1 mb-2 text-center">
                        <h5>AUTRES PRODUCTS RELATIFS</h5>
                        <p>Vous pouvez également voir d'autres products de cette catégorie ici</p>
                    </div>
                    <div class="swiper-responsive-breakpoints swiper-container col-12">
                        <div class="swiper-wrapper">
                            @foreach($other_products as $productByBrand)
                                <div class="swiper-slide rounded swiper-shadow">
                                    <div class="item-heading">
                                        <p class="text-truncate mb-0">
                                            <a href="{{ route('details',$productByBrand->id) }}" class="text-primary">
                                                {{ $productByBrand->name}}
                                            </a>
                                        </p>
                                        <p>
                                            <small>Publier par</small>
                                            <small>{{ $productByBrand->shop->name }}</small>
                                        </p>
                                    </div>
                                    <div class="img-container w-50 mx-auto my-2 py-75">
                                        <a href="{{ route('details',$productByBrand->id) }}">
                                            <img src="{{ asset($productByBrand->mainImage) }}" class="img-fluid" alt="image" width="100" height="100">
                                        </a>
                                    </div>
                                    <div class="item-meta">
                                        <div class="product-rating">
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-secondary"></i>
                                        </div>
                                        <p class="text-primary mb-0">
                                            {{ $productByBrand->truePrice }} fcfa
                                        </p>
                                        <div class="">
                                            <form action="#">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $productByBrand->id }}">
                                                <button type="submit" class="btn btn-sm bg-gradient-info float-right"><i class="feather icon-shopping-cart mr-25"></i> Ajouter au panier</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- app ecommerce details end -->
@endsection

@section('pageJS')

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/js/extensions/swiper.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/js/scripts/pages/app-ecommerce-details.js') }}"></script>
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/js/scripts/forms/number-input.js') }}"></script>
    <!-- END: Page JS-->
@stop
