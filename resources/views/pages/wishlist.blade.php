@extends('layouts/default',['title' => 'Accueil'])

    @section('content-header')
        @include('layouts/partials/shared/content-header')
    @endsection
    @section('content')

        <h1 class="text-warning">Nos {{ $title }}</h1>
        <section id="wishlist" class="grid-view wishlist-items">
            @foreach($products as $product)
            <div class="card ecommerce-card" style="max-height: 370px">
                <div class="card-content">
                    <div class="item-img text-center">
                        <a href="{{ route('details', $product) }}">
                            <img src="{{ asset($product->mainImage) }}" class="img-fluid" alt="produit image">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="item-wrapper">
                            <div>
                                <span style="text-decoration: line-through">
                                    {{ $product->falsePrice }} fcfa
                                </span>
                            </div>
                            <div class="item-rating">

                                <div class="badge badge-primary badge-md">
                                    {{ $product->truePrice }} fcfa
                                </div>
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

        <!-- Ecommerce Pagination Starts -->
        <section id="ecommerce-pagination">
            <div class="row">
                <div class="col-sm-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-2">
                            {{ $products->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Ecommerce Pagination Ends -->

        <!-- Wishlist Ends -->
    @endsection
