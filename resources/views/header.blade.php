<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
        <!-- Classy Menu -->
        <nav class="classy-navbar" id="essenceNav">
            <!-- Logo -->
            <a class="nav-brand" href="/"><img src="/home-template/img/core-img/logo.png" alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            @include('menu.mainmenu')
        </nav>

        <!-- Header Meta Data -->
        <div class="header-meta d-flex clearfix justify-content-end">
            <!-- Search Area -->
            <div class="search-area">
                <form action="#" method="post">
                    <input type="search" name="search" id="search" placeholder="Tìm kiếm..." style="width: 500px">
                    <button ><i class="fa fa-search" aria-hidden="true"></i></button>
                    
                    <div class="search-ajax-result" id="search-ajax-result"  style="width: 500px">
                                         
                    </div>
                </form>
            </div>
            <!-- Favourite Area -->
            
            <!-- User Login Info -->
            <div class="user-login-info">
                <a href="#"><img src="/home-template/img/core-img/user.svg" alt=""></a>
            </div>
            <!-- Cart Area -->
            <div class="cart-area">
                <a href="#" id="essenceCartBtn"><img src="/home-template/img/core-img/bag.svg" alt=""></a>
            </div>
        </div>

    </div>
</header>