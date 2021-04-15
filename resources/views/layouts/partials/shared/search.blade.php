<li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
    <div class="search-input">
        <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
        <form action="{{ route('search') }}">
        	@csrf
            <input class="input" type="text" placeholder="Rechercher..." tabindex="-1" data-search="template-list" name="search">
            <input type="submit" hidden>
        </form>
        <div class="search-input-close">
            <i class="feather icon-x"></i>
        </div>
        <ul class="search-list search-list-main">
        </ul>
    </div>
</li>
