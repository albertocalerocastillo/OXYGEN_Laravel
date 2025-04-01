@extends('layouts.app')

@section('title', 'OXYGEN Hotel Miranda')

@section('content')
    <section class="ultimate">
        <div>
            <p class="ultimate__title--index">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h2 class="ultimate__description--index">The Perfect Base For You</h2>
        </div>
        <div class="ultimate__buttons">
            <a href="#intro" class="ultimate__button ultimate__button--primary">TAKE A TOUR</a>
            <a href="#about" class="ultimate__button ultimate__button--secondary">LEARN MORE</a>
        </div>
    </section>

    <section class="availability">
        <div class="availability__items">
            <label class="availability__label" for="arrival-date">Arrival Date</label>
            <input class="availability__input" type="date">
        </div>

        <div class="availability__items">
            <label class="availability__label" for="departure-date">LeDeparture Date</label>
            <input class="availability__input" type="date">
        </div>

        <button class="availability__button">CHECK AVAILABILITY</button>
    </section>

    <section class="about" id="about">
        <p class="about__text">ABOUT US</p>
        <h2 class="about__title">Discover Our Underground.</h2>
        <p class="about__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button class="about__button">BOOK NOW</button>
        <div class="about__image">
            <img class="about__image__team" src="{{ asset('images/strongteam.jpg') }}" alt="Strong Team">
        </div>
        <div class="about__section">
            <img class="about__section__vector" src="{{ asset('images/strongteammobile.png') }}" alt="Icono Strong Team">
            <h3 class="about__section__title">Strong Team</h3>
            <p class="about__section__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor.</p>
        </div>

        <div class="about__section2">
            <div class="about__image2">
                <img class="about__image__team" src="{{ asset('images/luxuryroom.jpg') }}" alt="Luxury Room">
            </div>
            <img class="about__section2__vector" src="{{ asset('images/luxuryroommobile.png') }}" alt="Icono Luxury Room">
            <h3 class="about__section2__title">Luxury Room</h3>
            <p class="about__section2__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor.</p>
        </div>
    </section>

    <section class="homeRooms">
        <p class="homeRooms__title">ROOMS</p>
        <p class="homeRooms__subtitle">Hand Picked Rooms</p>
        <div class="swiper homeRooms__swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('images/habitacion1.jpg') }}" class="homeRooms__swiper__img" />
                    <img src="{{ asset('images/icons_mobile.png') }}" class="homeRooms__swiper__icons"/>
                    <div class="homeRooms__swiper__info">
                        <p class="homeRooms__swiper__info__title">Minimal Duplex Room</p>
                        <p class="homeRooms__swiper__info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore.</p>
                        <p class="homeRooms__swiper__info__price">$345<span>/Night</span></p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/luxuryroom.jpg') }}" class="homeRooms__swiper__img" />
                    <img src="{{ asset('images/icons_mobile.png') }}" class="homeRooms__swiper__icons"/>
                    <div class="homeRooms__swiper__info">
                        <p class="homeRooms__swiper__info__title">Minimal Duplex Room</p>
                        <p class="homeRooms__swiper__info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore.</p>
                        <p class="homeRooms__swiper__info__price">$345<span>/Night</span></p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="intro" id="intro">
        <h4 class="intro__title">INTRO VIDEO</h4>
        <h2 class="intro__description">Meet With Our Luxury Place.</h2>
        <p class="intro__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
        <div class="intro__video">
            <iframe
                src="https://www.youtube.com/embed/Bu3Doe45lcU?si=ZWat4GEhwb4T_6Gt&start=25"
                title="YouTube video player"
                width="100%"
                height="100%"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
                referrerpolicy="strict-origin-when-cross-origin">
            </iframe>
        </div>
        <button class="intro__button">BOOK NOW</button>
    </section>

    <section class="facilitiesHome">
        <p class="facilitiesHome__title">FACILITIES</p>
        <p class="facilitiesHome__subtitle">Core Features</p>
        <div class="swiper facilitiesHome__swiper">
            <div class="swiper-wrapper">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="swiper-slide facilitiesHome__swiper__slide">
                        <p class="facilitiesHome__swiper__slide__background">{{ sprintf('%02d', $i) }}</p>
                        <img class="facilitiesHome__swiper__slide__icon" src="{{ asset('images/ratinghome.png') }}" />
                        <p class="facilitiesHome__swiper__slide__title">Have High Rating</p>
                        <p class="facilitiesHome__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                @endfor
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <div class="banner">
        <img class="banner__icon" src="{{ asset('images/donut.png') }}" />
    </div>

    <section class="menu">
        <p class="menu__title">MENU</p>
        <p class="menu__subtitle">Our Foods Menu</p>
        <div class="swiper menu__swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="menu__swiper__item">
                        <img class="menu__swiper__item__img" src="{{ asset('images/eggsbacon.jpg') }}" />
                        <div class="menu__swiper__item__info">
                            <p class="menu__swiper__item__info__title">Eggs & Bacon</p>
                            <p class="menu__swiper__item__info__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__swiper__item">
                        <img class="menu__swiper__item__img" src="{{ asset('images/teacoffee.jpg') }}" />
                        <div class="menu__swiper__item__info">
                            <p class="menu__swiper__item__info__title">Tea & Coffe</p>
                            <p class="menu__swiper__item__info__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__swiper__item" id="last">
                        <img class="menu__swiper__item__img" src="{{ asset('images/chia.jpg') }}" />
                        <div class="menu__swiper__item__info">
                            <p class="menu__swiper__item__info__title">Chia Oatmeal</p>
                            <p class="menu__swiper__item__info__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__swiper__item">
                        <img class="menu__swiper__item__img" src="{{ asset('images/fishchips.jpg') }}" />
                        <div class="menu__swiper__item__info">
                            <p class="menu__swiper__item__info__title">Fish & Chips</p>
                            <p class="menu__swiper__item__info__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__swiper__item">
                        <img class="menu__swiper__item__img" src="{{ asset('images/pulpo.jpg') }}" />
                        <div class="menu__swiper__item__info">
                            <p class="menu__swiper__item__info__title">Pulpo a la gallega</p>
                            <p class="menu__swiper__item__info__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu__swiper__item">
                        <img class="menu__swiper__item__img" src="{{ asset('images/tortilla.png') }}" />
                        <div class="menu__swiper__item__info">
                            <p class="menu__swiper__item__info__title">Tortilla de patatas</p>
                            <p class="menu__swiper__item__info__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <div class="swiper menu__swiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide menu__swiper2__slide">
                    <img class="menu__swiper2__slide__img" src="{{ asset('images/habitacion1.jpg') }}" />
                </div>
                <div class="swiper-slide menu__swiper2__slide">
                    <img class="menu__swiper2__slide__img" src="{{ asset('images/luxuryroom.jpg') }}" />
                </div>
                <div class="swiper-slide menu__swiper2__slide">
                    <img class="menu__swiper2__slide__img" src="{{ asset('images/habitacion2.png') }}" />
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="menu__logros">
        <div class="menu__logros__box">
            <img class="menu__logros__box--image" src="{{ asset('images/rocket.png') }}" alt="logros">
            <div class="menu__logros__box--text">
                <p>84k</p>
                <p>+</p>
                <p>Projects are Completed</p>
            </div>
        </div>

        <div class="menu__logros__box">
            <img class="menu__logros__box--image" src="{{ asset('images/group3.png') }}" alt="logros">
            <div class="menu__logros__box--text">
                <p>10M</p>
                <p>+</p>
                <p>Active Backers Around World</p>
            </div>
        </div>

        <div class="menu__logros__box">
            <img class="menu__logros__box--image" src="{{ asset('images/economy.png') }}" alt="logros">
            <div class="menu__logros__box--text">
                <p>02k</p>
                <p>+</p>
                <p>Categories Served</p>
            </div>
        </div>

        <div class="menu__logros__box">
            <img class="menu__logros__box--image" src="{{ asset('images/book.png') }}" alt="logros">
            <div class="menu__logros__box--text">
                <p>100M</p>
                <p>+</p>
                <p>Idea Raised Funds</p>
            </div>
        </div>
    </section>
@endsection