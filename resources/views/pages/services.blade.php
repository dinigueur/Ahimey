@extends('layouts/default')

@section('pageCSS')

    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/pages/knowledge-base.css') }}">
    <!-- END: Page CSS-->
@stop
@section('content-header')
    @include('layouts/partials/shared/content-header')
@endsection
@section('content')

    <section class="knowledge-base-header">
        <h1 class="text-warning">Nos Services</h1>
        <p>Vous trouverez ici nos différents services disponibles sur Ahimey</p>
    </section>
    <!-- Knowledge base -->
    <section id="knowledge-base-content">
        <div class="row search-content-info">
            <div class="col-md-4 col-sm-6 col-12 search-content">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="page-kb-category.html">
                            <img src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/images/pages/graphic-1.png') }}" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                            <h4>SALES AUTOMATION</h4>
                            <small class="text-dark">Muffin lemon drops chocolate carrot cake chocolate bar sweet roll.</small>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 search-content">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="page-kb-category.html">
                            <img src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/images/pages/graphic-2.png') }}" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                            <h4>MARKETING AUTOMATION</h4>
                            <small class="text-dark">Gingerbread sesame snaps wafer soufflé. Macaroon brownie ice cream</small>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 search-content">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="page-kb-category.html">
                            <img src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/images/pages/graphic-3.png') }}" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                            <h4>MARKETING BI</h4>
                            <small class="text-dark">cotton candy caramels danish chocolate cake pie candy. Lemon drops tart.</small>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 search-content">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="page-kb-category.html">
                            <img src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/images/pages/graphic-4.png') }}" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                            <h4>PERSONALIZATION</h4>
                            <small class="text-dark">Pudding oat cake carrot cake lemon drops gummies marshmallow.</small>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 search-content">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="page-kb-category.html">
                            <img src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/images/pages/graphic-5.png') }}" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                            <h4>EMAIL MARKETING</h4>
                            <small class="text-dark">Gummi bears pudding icing sweet caramels chocolate.Muffin croissant</small>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 search-content">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="page-kb-category.html">
                            <img src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/images/pages/graphic-6.png') }}" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                            <h4>DEMAND GENERATION</h4>
                            <small class="text-dark">Dragée jelly beans candy canes pudding cake wafer. Muffin croissant.</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Knowledge base ends -->
@endsection

@section('pageJS')

    <!-- BEGIN: Page JS-->
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/js/scripts/pages/faq-kb.js') }}"></script>
    <!-- END: Page JS-->
@stop
