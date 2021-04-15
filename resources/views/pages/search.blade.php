@extends('layouts/default')

@section('pageCSS')
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/pages/search.css') }}">
    <!-- END: Page CSS-->
@stop
@section('content-header')
    @include('layouts/partials/shared/content-header')
@endsection
@section('content')
    <!-- Search Bar -->
    <section id="search-bar">
        <div class="search-bar">
        <form action="{{ route('search') }}" method="POST">
            @csrf
                <fieldset class="form-group position-relative has-icon-left">
                    <input type="text" class="form-control round" id="searchbar" value="{{ $search ?? old() }}" name="search" placeholder="Rechercher..">
                    <div class="form-control-position">
                        <i class="feather icon-search px-1"></i>
                    </div>
                </fieldset>
                <input type="submit" hidden>
            </form>
        </div>
        <div class="row search-menu">
            <div class="col-md-8 float-left">
                <div class="search-filter d-inline-block round mr-1 mb-1">Tous</div>
                <div class="search-filter d-inline-block round mr-1 mb-1">Products</div>
                <div class="search-filter d-inline-block round mr-1 mb-1">Services</div>
                <div class="search-filter d-inline-block round mr-1 mb-1">Boutiques</div>
                <div class="search-filter d-inline-block round mr-1 mb-1">Nouveaux</div>
            </div>
        </div>
        <div class="row search-result-info mt-2 mb-1">
            <div class="col-sm-8 float-left">
                <p class="mt-1">
                    Plus de {{ count($resultTotal) +  count($resultTotal2) + count($resultTotal3) }}
                    <span class="text-primary">résultats disponible</span> pour
                    <span class="text-danger"><em>{{ $search }}</em></span> sur Ahimê | Approximation du temps d'éxucution ( {{ $time }} s)
                </p>
            </div>
        </div>
    </section>
    <!-- Search Bar end -->
    <!-- Search Form  -->
    <section id="search-website">
        <div class="row">
            <div class="col-md-8 col-12 order-2 order-md-1">
                @if(count($results) > 0 || count($shopSearch) > 0)
                <div class="card">
                    <div class="card-content">
                        <!--Search Result-->
                        <div id="search-results" class="card-body pb-0">
                            <ul class="media-list p-0">
                                @if(count($results) > 0)
                                    <h4>
                                        Resultats disponibles des produits vendus sur ahimê pour <span class="text-danger">{{ $search }}
                                        </span>
                                    </h4>
                                    @foreach($results as $result)
                                        <li class="media d-sm-flex d-block">
                                            <div class="media-left pr-sm-2 pr-0">
                                                <a href="{{ route('details', $result->id) }}">
                                                    <img class="media-object" src="{{ asset($result->mainImage) }}" alt="search">
                                                </a>
                                            </div>
                                            <div class="media-body pr-sm-50 pr-0">
                                                <h5 class="mb-0">
                                                    <a href="{{ route('details', $result->id) }}">
                                                        {{ $result->name }} - {{ $result->feature }}
                                                    </a>
                                                </h5>
                                                <p class="mb-0">
                                                    <a href="{{ route('details', $result->id) }}" class="success">
                                                        https://ahimey.com/products/detaails
                                                    </a>
                                                </p>
                                                <ul class="list-inline list-inline-pipe">
                                                    <li>
                                                        <i class="fa fa-star warning darken-2"></i>
                                                        <i class="fa fa-star warning darken-2"></i>
                                                        <i class="fa fa-star warning darken-2"></i>
                                                        <i class="fa fa-star-half light darken-2"></i>
                                                    </li>
                                                    <li>
                                                        <b>{{ $result->truePrice }} fcfa</b>
                                                    </li>
                                                    <li>
                                                        Disponible <span class="text-warning">En stock</span>
                                                    </li>
                                                </ul>
                                                <p>
                                                    {{ $result->description }}
                                                </p>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                                @if(count($results) > 0 && count($shopSearch) > 0)
                                    <hr>
                                @endif
                                @if(count($shopSearch) > 0)
                                    <h4>
                                        Resultats disponibles aux boutiques vendeuses sur ahimê pour <span class="text-danger">{{ $search }}</span>
                                    </h4>
                                    @foreach($shopSearch as $shop)
                                        @if(is_null($shop->confirmationToken))
                                            <li class="media d-sm-flex d-block">
                                                <div class="media-left pr-sm-2 pr-0">
                                                    <a href="{{ route('shop.visit', $shop->id) }}">
                                                        <img class="media-object" src="{{ asset($shop->logo) }}" alt="search">
                                                    </a>
                                                </div>
                                                <div class="media-body pl-sm-50 pl-0">
                                                    <p class="mb-0">
                                                        <a href="{{ route('shop.visit', $shop->id) }}" class="success">
                                                            https://ahimey.com/pages/shops/visit/{{ $shop->name }}
                                                        </a>
                                                    </p>
                                                    <h5 class="mb-0">
                                                        <a href="{{ route('shop.visit', $shop->id) }}">
                                                            {{ $shop->name }} - {{ $shop->domain }}
                                                        </a>
                                                    </h5>

                                                    <ul class="list-inline list-inline-pipe">
                                                        <li>1M Vues</li>
                                                        <li>{{ $shop->user->name }}</li>
                                                    </ul>
                                                    <p>
                                                        <span class="text-warning">
                                                            {{ $shop->name }}
                                                        </span>
                                                        est une boutique créée le {{ $shop->created_at->isoFormat('DD/MM/Y') }},
                                                        spécialisée dans la ventes de
                                                        <span class="text-primary">
                                                            {{ $shop->domain }}
                                                        </span>
                                                    </p>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                    <div class="row mt-2">
                                        <div class="col-sm-12">
                                            <nav aria-label="Page navigation example">
                                                <ul class="mt-1">
                                                    {{ $shopSearch->links() }}
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                @endif
                            </ul>
                        </div>

                    </div>
                </div>
                @else
                    <h2>
                        Aucun Résultat Pour
                        <span class="text-danger"><em>{{ $search }}</em>
                        </span>
                    </h2>
                @endif
                @if(count($resultTotal2) > 0)
                    <div>
                        <h5 class="text-primary">
                            Autres resultats liés à votre recherche
                        </h5>
                        <ul class="list-group">
                            @foreach($resultTotal2 as $brand)
                                @if(count($brand->products) > 0)
                                    <li class="list-group-item">
                                        <a href="{{ route('wishlist', $brand->id) }}">
                                            {{ $brand->name }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-md-4 col-12 order-1 order-md-2 d-none d-sm-block">
                <div class="card bg-transparent border-light shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            @foreach($sliders as $slider)
                                <img class="img-fluid rounded" src="{{ asset($slider->image) }}" alt="Ahimê">
                            @endforeach
                        </div>
                        <small>Ahimê, votre plate-form e-commerce africaine</small>
                        <h4 class="mt-1">
                            <i class="feather icon-external-link pr-1"></i>
                            <a href="{{ route('index') }}">
                                Voir dans Ahimê
                            </a>
                        </h4>
                        <p class="card-text">
                            Ahimê est une application Web, dévéloppée par deux étudiants Informaticien de HECM-Bénin DEGLA Fabrice & SODEGLA Karim en 2020 pour leur projet d'étude de fin de formation. Elle permet aux boutiquiers de se faire connaître en dehors de leurs lieux de vente locaux et aussi d'éffectuer des paiements par carte visa, MoMo MTN et Moov MoMo...
                        </p>
                        <div class="knowledge-panel-suggestion">
                            <div class="suggestion-1 d-inline-block text-center mr-2">

                                <img src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/images/logo/momo.png') }}" alt="Image description" height="25" width="40">
                                <span class="font-small-2 d-block">Mobile Money</span>
                            </div>
                            <div class="suggestion-1 d-inline-block text-center mr-2">
                                    <img src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/images/logo/flooz.png') }}" alt="Image description" height="25" width="40">
                                    <span class="font-small-2 d-block">Moov Money</span>
                            </div>
                            <div class="suggestion-1 d-inline-block text-center mr-2">
                                <img src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/images/logo/mastercard.png') }}" alt="Image description" height="25" width="40">
                                <span class="font-small-2 d-block">MasterCard</span>
                            </div>
                            <div class="suggestion-1 d-inline-block text-center">
                                <img src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/images/logo/visa.png') }}" alt="Image description" height="25" width="40">
                                <span class="font-small-2 d-block">Visa</span>
                            </div>
                        </div>
                        @if(count($shops) > 0)
                            <h5>Voir ici des boutiques pour
                                <span class="text-danger">{{ $search  }}</span>
                            </h5>
                            <div class="knowledge-panel-suggestion">
                                @foreach($shops as $shop)
                                    @if(is_null($shop->confirmationToken))
                                    <div class="suggestion-1 d-inline-block text-center mr-2">
                                        <a href="{{ route('shop.visit', $shop->id) }}">
                                            <img src="{{ asset($shop->logo) }}" alt="Image description" height="25" width="40">
                                            <span class="font-small-2 d-block">
                                                {{$shop->name}}
                                            </span>
                                        </a>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Search form -->
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
