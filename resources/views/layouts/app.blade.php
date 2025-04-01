<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'OXYGEN HOTEL MIRANDA')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @yield('styles')
</head>

<body>

    <header class="navbar">
        <div class="navbar__menu" id="menu">
            <img src="{{ asset('images/nav.png') }}" alt="Menú" id="menu-img">
        </div>

        <div class="navbar__logo">
            <p class="navbar__logo__icon">H</p>
            <div class="navbar__logo__text">
                <span class="navbar__logo__text__hotel">HOTEL</span>
                <span class="navbar__logo__text__miranda">MIRANDA</span>
            </div>
        </div>

        <div class="navbar__iconos">
            <img src="{{ asset('images/usuario.png') }}" alt="Usuario" class="navbar__icono">
            <img src="{{ asset('images/buscador.png') }}" alt="Buscador" class="navbar__icono">
        </div>

        <nav class="navbar__desplegable" id="desplegable">
            <ul>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('rooms') }}">Rooms</a></li>
                <li><a href="{{ route('offers') }}">Offers</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <img class="footer__background" src="{{ asset('images/footer_background.png') }}" alt="Footer Background" />
        <div class="footer__title">
            <div class="footer__title__logo">
                <p class="footer__title__logo__content">H</p>
            </div>
            <div class="footer__title__text">
                <p class="footer__title__text__hotel">HOTEL</p>
                <p class="footer__title__text__miranda">MIRANDA</p>
            </div>
        </div>
        <p class="footer__text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco
            laboris nisi.</p>
        <div class="footer__social">
            <div class="footer__social__item">
                <img class="footer__social__item__icon" src="{{ asset('images/facebook.png') }}" alt="Facebook" />
            </div>
            <div class="footer__social__item">
                <img class="footer__social__item__icon" src="{{ asset('images/twitter.png') }}" alt="Twitter" />
            </div>
            <div class="footer__social__item">
                <img class="footer__social__item__icon" src="{{ asset('images/behance.png') }}" alt="Behance" />
            </div>
            <div class="footer__social__item">
                <img class="footer__social__item__icon" src="{{ asset('images/linkedin.png') }}" alt="LinkedIn" />
            </div>
            <div class="footer__social__item">
                <img class="footer__social__item__icon" src="{{ asset('images/youtube.png') }}" alt="YouTube" />
            </div>
        </div>
        <div class="footer__services">
            <h3 class="footer__services__title">Services.</h3>
            <ul class="footer__services__lista">
                <li class="footer__services__lista__item">+ Restaurant & Bar</li>
                <li class="footer__services__lista__item">+ Swimming Pool</li>
                <li class="footer__services__lista__item">+ Wellness & Spa</li>
                <li class="footer__services__lista__item">+ Restaurant</li>
                <li class="footer__services__lista__item">+ Conference Room</li>
                <li class="footer__services__lista__item">+ Coctail Party House</li>
                <li class="footer__services__lista__item">+ Gaming Zone</li>
                <li class="footer__services__lista__item">+ Marrige Party</li>
                <li class="footer__services__lista__item">+ Party Planning</li>
                <li class="footer__services__lista__item">+ Tour Consultancy</li>
            </ul>
        </div>
        <div class="footer__contact-us">
            <h3 class="footer__contact-us__title">Contact Us.</h3>
            <div class="footer__contact-us__item">
                <img class="footer__contact-us__item__icon" src="{{ asset('images/phone.png') }}" alt="Phone" />
                <div class="footer__contact-us__item__info">
                    <p class="footer__contact-us__item__info__title">Phone Number</p>
                    <p class="footer__contact-us__item__info__text">+34 684 059 380</p>
                </div>
            </div>
            <div class="footer__contact-us__item">
                <img class="footer__contact-us__item__icon" src="{{ asset('images/email.png') }}" alt="Email" />
                <div class="footer__contact-us__item__info">
                    <p class="footer__contact-us__item__info__title">Email</p>
                    <p class="footer__contact-us__item__info__text">albertocctrabajo@gmail.com</p>
                </div>
            </div>
            <div class="footer__contact-us__item">
                <img class="footer__contact-us__item__icon" src="{{ asset('images/address.png') }}" alt="Address" />
                <div class="footer__contact-us__item__info">
                    <p class="footer__contact-us__item__info__title">Address</p>
                    <p class="footer__contact-us__item__info__text">La Rinconada (Sevilla)</p>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <p class="footer__copyright__info-name">Copyright By@AlbertoCaleroCastillo - 2025</p>
            <p class="footer__copyright__info">Terms of Use <span class="footer__copyright__info__separator">|</span> Privacy Environmental Policy</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    @yield('scripts')
</body>

</html>