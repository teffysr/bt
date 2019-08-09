<header class="header">
    <div class="header_inner d-flex flex-row align-items-center justify-content-start">
        <div class="logo"><a href="{{ route('home') }}">Betzhabe Lencería</a></div>
        <nav class="main_nav">
            <ul>
                <!--<li><a href="#">home</a></li>-->
                <li><a href="{{ route('categories') }}">Lencería</a></li>
                <!--<li><a href="categories.html">Ropa</a></li>-->
                <li><a href="{{ route('categories') }}">Accesorios</a></li>
                <li><a href="{{ route('contact') }}">Contacto</a></li>
            </ul>
        </nav>
        <div class="header_content ml-auto">
            <!--<div class="search header_search">
                <form action="#">
                    <input type="search" class="search_input" required="required">
                    <button type="submit" id="search_button" class="search_button"><img src="{{ asset('wish/images/magnifying-glass.svg') }}" alt=""></button>
                </form>
            </div>-->
            <!--<div class="shopping">
                    Cart 
                <a href="#">
                    <div class="cart">
                        <img src="{{ asset('wish/images/shopping-bag.svg') }}" alt="">
                        <div class="cart_num_container">
                            <div class="cart_num_inner">
                                <div class="cart_num">1</div>
                            </div>
                        </div>
                    </div>
                </a>-->
                <!-- Star
                <a href="#">
                    <div class="star">
                        <img src="{{ asset('wish/images/star.svgv') }}" alt="">
                        <div class="star_num_container">
                            <div class="star_num_inner">
                                <div class="star_num">0</div>
                            </div>
                        </div>
                    </div>
                </a> -->
                <!-- Avatar
                <a href="#">
                    <div class="avatar">
                        <img src="{{ asset('wish/images/avatar.svg') }}" alt="">
                    </div>
                </a>
            </div> -->
        </div>

        <div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
    </div>
</header>