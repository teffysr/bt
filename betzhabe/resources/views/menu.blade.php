<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
    <div class="logo menu_mm"><a href="#">Betzhabe Lencería</a></div>
    <div class="search">
    <!--<form action="#">
            <input type="search" class="search_input menu_mm" required="required">
            <button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="{{ asset('wish/images/magnifying-glass.svg') }}" alt=""></button>
        </form>-->
    </div>
    <nav class="menu_nav">
        <ul class="menu_mm">
            <!--<li class="menu_mm"><a href="#">home</a></li>-->
            <!--<li class="menu_mm"><a href="#">clothes</a></li>-->
            <li class="menu_mm"><a href="{{ route('categories') }}">Lencería</a></li>
            <li class="menu_mm"><a href="{{ route('categories') }}">Accesorios</a></li>
            <li class="menu_mm"><a href="{{ route('contact') }}">Contacto</a></li>
        </ul>
    </nav>
</div>