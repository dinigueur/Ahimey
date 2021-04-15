@extends('layouts/default',['title' => 'Accueil'])

@section('pageCSS')

@stop
@section('content')
<!-- CrossFade Carousel Start -->
<section id="carousel-crossfade">
    <div class="row" style="max-height: 260px">
        <div class="col-md-9 col-sm-12 col-lg-9">
            <div class="card">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner" style="max-height: 257px">
                        @foreach($sliders as $slider)
                            <div class="carousel-item  {{ $loop->last ? 'active' : '' }} ">
                                <img src="{{ asset($slider->image) }}" class="img-fluid d-block h-100 w-100" alt="">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 d-none d-sm-block">
            <div>
                <h4 class="text-warning">Nos Partenaires Vendeurs</h4>
            </div>
            <div class="row">
                @foreach($shops as $shop)
                    @if(count($shop->products) >= 6)
                        <div class="col-lg-3 col-sm-6 col-lg-3 col-12 mt-1">
                            <a href="{{ route('shop.visit', $shop->id) }}">
                                <img src="{{ asset($shop->logo) }}" class="rounded-sm" alt="logo-{{ $shop->name }}" width="60" height="45">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- CrossFade Carousel End -->
<!-- CrossFade Carousel End -->
<h2 class="mt-1 text-primary">Nos Articles</h2>
<!-- Wishlist Starts -->
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
