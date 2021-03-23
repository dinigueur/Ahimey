@extends('layouts/default')

@section('pageCSS')
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/css/plugins/forms/validation/form-validation.css') }}">
    <!-- END: Page CSS-->
@stop
@section('content-header')
    @include('layouts/partials/shared/content-header')
@endsection
@section('content')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="offset-2 col-8 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Création de boutique</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group position-relative has-icon-left">
                                                <input type="text" id="name" class="form-control" name="name" placeholder="Nom boutique">
                                                <div class="form-control-position">
                                                    <i class="fa fa-archive"></i>
                                                </div>
                                                <label for="name">Nom de la boutique</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group position-relative has-icon-left">
                                                <input type="text" id="address" class="form-control" name="address" placeholder="Adresse boutique">
                                                <div class="form-control-position">
                                                    <i class="feather icon-globe"></i>
                                                </div>
                                                <label for="address">
                                                    Adress | Ex : BP 358, Cotonou, Bénin, Rue 300 Révérend Père Colineau, lot 5252
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group position-relative has-icon-left">
                                                <input type="text" id="numberIFU" class="form-control" name="numberIFU" placeholder="Nuuméro IFU">
                                                <div class="form-control-position">
                                                    <i class="fa fa-ticket"></i>
                                                </div>
                                                <label for="numberIFU">
                                                    Nuuméro IFU | Ex : 0258748230470
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group position-relative has-icon-left">
                                                <input type="text" id="numberRCCM" class="form-control" name="numberRCCM" placeholder="Nuuméro RCCM">
                                                <div class="form-control-position">
                                                    <i class="feather icon-bookmark"></i>
                                                </div>
                                                <label for="numberRCCM">
                                                    Nuuméro RCCM | Ex : 0258748230470
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <fieldset class="form-group">
                                                <select class="custom-select" id="customSelect">
                                                    <option value="" selected>Selectionnez une catégorie</option>
                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="form-group col-12">
                                            <fieldset class="checkbox">
                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">
                                                        J'ai lue et accepte les termes et conditions
                                                    </span>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-12">

                                            <button type="button" class="btn bg-gradient-danger mr-1 mb-1 waves-effect waves-light float-right">
                                                Annuler
                                            </button>

                                            <button type="button" class="btn bg-gradient-info mr-1 mb-1 waves-effect waves-light float-right">
                                                Créer Maintenant
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('pageJS')

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
   <!-- BEGIN: Page JS-->

    <script src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/js/scripts/forms/validation/form-validation.js') }}"></script>
    <!-- END: Page JS-->
@stop
