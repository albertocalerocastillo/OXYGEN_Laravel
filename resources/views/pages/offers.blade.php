@extends('layouts.app')

@section('title', 'Offers Hotel Miranda')

@section('content')
    <section class="ultimate">
        <div>
            <p class="ultimate__title">THE ULTIMATE LUXURY</p>
            <h2 class="ultimate__description">Our Offers</h2>
        </div>
        <div class="ultimate__nav">
            <span class="ultimate__nav__links">
                <a href="{{ route('home') }}">Home |&nbsp;</a>
                <a>Offers</a>
            </span>
        </div>
    </section>

    <section class="offers">

        <div class="offers__article">

            <div class="offers__article__photo">
                <img src="{{ asset('images/offersroom1.jpg') }}" class="offers__article__photo__img" />
                <div class="offers__article__photo__prices">
                    <p class="offers__article__photo__prices__sinoferta">$500<span>/Night</span></p>
                    <p class="offers__article__photo__prices__conoferta">$345<span>/Night</span></p>
                </div>
            </div>
            <p class="offers__article__subtitle">DOUBLE BED</p>
            <p class="offers__article__title">Luxury Double Bed</p>
            <p class="offers__article__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <div class="offers__article__list">
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/airconditioner.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Air conditioner</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/breakfast.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Breakfast</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/cleaning.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Cleaning</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/grocery.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Grocery</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/shop.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Shop near</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/wifi.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">High speed WiFi</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/kitchen.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Kitchen</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/shower.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Shower</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/bed.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Single bed</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/towels.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Towels</p>
                </div>
            </div>
            <button type="submit" class="offers__article__button">BOOK NOW</button>
        </div>

        <div class="offers__article">
            <div class="offers__article__photo">
                <img src="{{ asset('images/offersroom2.jpg') }}" class="offers__article__photo__img" />
                <div class="offers__article__photo__prices">
                    <p class="offers__article__photo__prices__sinoferta">$500<span>/Night</span></p>
                    <p class="offers__article__photo__prices__conoferta">$345<span>/Night</span></p>
                </div>
            </div>
            <p class="offers__article__subtitle">DOUBLE BED</p>
            <p class="offers__article__title">Luxury Double Bed</p>
            <p class="offers__article__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <div class="offers__article__list">
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/airconditioner.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Air conditioner</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/breakfast.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Breakfast</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/cleaning.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Cleaning</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/grocery.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Grocery</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/shop.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Shop near</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/wifi.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">High speed WiFi</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/kitchen.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Kitchen</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/shower.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Shower</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/bed.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Single bed</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/towels.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Towels</p>
                </div>
            </div>
            <button type="submit" class="offers__article__button">BOOK NOW</button>
        </div>

        <div class="offers__article">
            <div class="offers__article__photo">
                <img src="{{ asset('images/offersroom3.jpg') }}" class="offers__article__photo__img" />
                <div class="offers__article__photo__prices">
                    <p class="offers__article__photo__prices__sinoferta">$500<span>/Night</span></p>
                    <p class="offers__article__photo__prices__conoferta">$345<span>/Night</span></p>
                </div>
            </div>
            <p class="offers__article__subtitle">DOUBLE BED</p>
            <p class="offers__article__title">Luxury Double Bed</p>
            <p class="offers__article__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <div class="offers__article__list">
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/airconditioner.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Air conditioner</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/breakfast.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Breakfast</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/cleaning.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Cleaning</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/grocery.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Grocery</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/shop.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Shop near</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/wifi.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">High speed WiFi</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/kitchen.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Kitchen</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/shower.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Shower</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/bed.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Single bed</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/towels.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Towels</p>
                </div>
            </div>
            <button type="submit" class="offers__article__button">BOOK NOW</button>
        </div>

        <div class="offers__article">
            <div class="offers__article__photo">
                <img src="{{ asset('images/offersroom4.png') }}" class="offers__article__photo__img" />
                <div class="offers__article__photo__prices">
                    <p class="offers__article__photo__prices__sinoferta">$500<span>/Night</span></p>
                    <p class="offers__article__photo__prices__conoferta">$345<span>/Night</span></p>
                </div>
            </div>
            <p class="offers__article__subtitle">DOUBLE BED</p>
            <p class="offers__article__title">Luxury Double Bed</p>
            <p class="offers__article__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <div class="offers__article__list">
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/airconditioner.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Air conditioner</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/breakfast.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Breakfast</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/cleaning.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Cleaning</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/grocery.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Grocery</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/shop.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Shop near</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/wifi.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">High speed WiFi</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/kitchen.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Kitchen</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/shower.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Shower</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/bed.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Single bed</p>
                </div>
                <div class="offers__article__list__item">
                    <img src="{{ asset('images/towels.png') }}" class="offers__article__list__item__icon" />
                    <p class="offers__article__list__item__text">Towels</p>
                </div>
            </div>
            <button type="submit" class="offers__article__button">BOOK NOW</button>
        </div>

    </section>

    <section class="popularList">

        <p class="popularList__title">POPULAR LIST</p>
        <p class="popularList__subtitle">Popular Rooms</p>

        <div class="swiper popularList__swiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="{{ asset('images/relatedroom.jpg') }}" class="popularList__swiper__img" />
                    <img src="{{ asset('images/icons_mobile.png') }}" class="popularList__swiper__icons" />
                    <div class="popularList__swiper__info">
                        <p class="popularList__swiper__info__title">Minimal Duplex Room</p>
                        <p class="popularList__swiper__info__description">Lorem ipsum dolor sit amet, consectetur
                            adipi sicing elit, sed do eiusmod tempor.</p>
                        <p class="popularList__swiper__info__price">$345/Night <a
                                href="roomsDetails.html">Booking Now</a></p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('images/habitacion1.jpg') }}" class="popularList__swiper__img" />
                    <img src="{{ asset('images/icons_mobile.png') }}" class="popularList__swiper__icons" />
                    <div class="popularList__swiper__info">
                        <p class="popularList__swiper__info__title">Minimal Duplex Room</p>
                        <p class="popularList__swiper__info__description">Lorem ipsum dolor sit amet, consectetur
                            adipi sicing elit, sed do eiusmod tempor.</p>
                        <p class="popularList__swiper__info__price">$345/Night <a
                                href="roomsDetails.html">Booking Now</a></p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('images/habitacion2.png') }}" class="popularList__swiper__img" />
                    <img src="{{ asset('images/icons_mobile.png') }}" class="popularList__swiper__icons" />
                    <div class="popularList__swiper__info">
                        <p class="popularList__swiper__info__title">Minimal Duplex Room</p>
                        <p class="popularList__swiper__info__description">Lorem ipsum dolor sit amet, consectetur
                            adipi sicing elit, sed do eiusmod tempor.</p>
                        <p class="popularList__swiper__info__price">$345/Night <a
                                href="roomsDetails.html">Booking Now</a></p>
                    </div>
                </div>

            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

    </section>

@endsection