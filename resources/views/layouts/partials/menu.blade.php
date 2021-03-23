<!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto">
                        <a class="navbar-brand" href="{{ route('index') }}">
                            <img class="round ahime-logo" src="{{ asset(!\App::environment('local') ? 'public' : ''.'storage/app-assets/images/logo/ahime.png') }}" alt="" height="60" width="60">
                            <h2 class="mb-0 ahime-text text-primary">
                                <b>Ahimê</b>
                            </h2>
                        </a>
                    </li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-layers"></i><span data-i18n="UI Elements">Catégories</span></a>
                        <ul class="dropdown-menu">
                            @foreach(getCategories() as $category)
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Data List"><i class="feather icon-list"></i>
                                        {{ $category->name }}
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item" href="data-list-view.html" data-toggle="dropdown" data-i18n="List View"><i class="feather icon-circle"></i>List View</a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="data-thumb-view.html" data-toggle="dropdown" data-i18n="Thumb View"><i class="feather icon-circle"></i>Thumb View</a>
                                        </li>
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('index') }}"><i class="feather icon-home"></i><span data-i18n="Dashboard">Accueil</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            A Propos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Nos Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Nous-Contacter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('shop.create') }}" class="btn bg-gradient-info mr-1 mb-1 waves-effect waves-light nav-link">
                            Devenir Vendeur
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!-- END: Main Menu-->
