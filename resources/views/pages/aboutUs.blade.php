@extends('layouts.app')

@section('title', 'About Us - Hotel Miranda')

@section('content')
    <section class="ultimate">
        <div>
            <p class="ultimate__title">THE ULTIMATE LUXURY</p>
            <h2 class="ultimate__description">About Us</h2>
        </div>
        <div class="ultimate__nav">
            <span class="ultimate__nav__links">
                <a href="{{ route('home') }}">Home</a> |
                <a>About</a>
            </span>
        </div>
    </section>

    <section class="aboutUs">
        <div class="aboutUs__video">
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

        <p class="aboutUs__title">Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</p>

        <div class="aboutUs__iconos">
            <div class="aboutUs__iconos__background">
                <img class="aboutUs__iconos__background__icon" src="{{ asset('images/breakfastabout.png') }}" alt="Breakfast Icon" />
                <p class="aboutUs__iconos__background__text">BREAKFAST</p>
            </div>

            <div class="aboutUs__iconos__background">
                <img class="aboutUs__iconos__background__icon" src="{{ asset('images/airport.png') }}" alt="Airport Pickup Icon" />
                <p class="aboutUs__iconos__background__text">AIRPORT PICKUP</p>
            </div>

            <div class="aboutUs__iconos__background">
                <img class="aboutUs__iconos__background__icon" src="{{ asset('images/city.png') }}" alt="City Guide Icon" />
                <p class="aboutUs__iconos__background__text">CITY GUIDE</p>
            </div>

            <div class="aboutUs__iconos__background">
                <img class="aboutUs__iconos__background__icon" src="{{ asset('images/luxuryroomabout.png') }}" alt="Luxury Room Icon" />
                <p class="aboutUs__iconos__background__text">LUXURY ROOM</p>
            </div>
        </div>
    </section>

    <section class="aboutUsRestaurant">
        <img class="aboutUsRestaurant__img" src="{{ asset('images/luxuryroom.jpg') }}" alt="Luxury Room Image" />
        <p class="aboutUsRestaurant__subtitle">RESTAURANT</p>
        <p class="aboutUsRestaurant__title">Get Restaurant Facilities & Many Other More</p>
        <p class="aboutUsRestaurant__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        <button class="aboutUsRestaurant__button">TAKE A TOUR</button>
    </section>

    <section class="aboutUsFacilities">
        <p class="aboutUsFacilities__title">FACILITIES</p>
        <p class="aboutUsFacilities__subtitle">Core Features</p>

        <div class="swiper aboutUsFacilities__swiper">
            <div class="swiper-wrapper">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="swiper-slide aboutUsFacilities__swiper__slide">
                        <p class="aboutUsFacilities__swiper__slide__background">{{ sprintf('%02d', $i) }}</p>
                        <img class="aboutUsFacilities__swiper__slide__icon" src="{{ asset('images/rating.png') }}" alt="Rating Icon" />
                        <p class="aboutUsFacilities__swiper__slide__title">Have High Rating</p>
                        <p class="aboutUsFacilities__swiper__slide__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                @endfor
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="aboutUsCounter">
        <p class="aboutUsCounter__title">COUNTER</p>
        <p class="aboutUsCounter__subtitle">Some Fun Facts</p>

        <div class="aboutUsCounter__funFacts">
            <div class="aboutUsCounter__funFacts__item">
                <img class="aboutUsCounter__funFacts__item__icon" src="{{ asset('images/happy.png') }}" alt="Happy Users Icon" />
                <p class="aboutUsCounter__funFacts__item__text">8000 <span>Happy Users</span></p>
                <img class="aboutUsCounter__funFacts__item__flecha" src="{{ asset('images/flechaderecha.png') }}" alt="Right Arrow" />
            </div>

            <div class="aboutUsCounter__funFacts__item">
                <img class="aboutUsCounter__funFacts__item__icon" src="{{ asset('images/review.png') }}" alt="Reviews Icon" />
                <p class="aboutUsCounter__funFacts__item__text">10M <span>Reviews & Appreciate</span></p>
                <img class="aboutUsCounter__funFacts__item__flecha" src="{{ asset('images/flechaderecha.png') }}" alt="Right Arrow" />
            </div>

            <div class="aboutUsCounter__funFacts__item">
                <img class="aboutUsCounter__funFacts__item__icon" src="{{ asset('images/country.png') }}" alt="Country Coverage Icon" />
                <p class="aboutUsCounter__funFacts__item__text">100 <span>Country Coverage</span></p>
                <img class="aboutUsCounter__funFacts__item__flecha" src="{{ asset('images/flechaderecha.png') }}" alt="Right Arrow" />
            </div>
        </div>

        <div class="swiper aboutUsCounter__swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide aboutUsCounter__swiper__slide">
                    <img class="aboutUsCounter__swiper__slide__img" src="{{ asset('images/luxuryroom.jpg') }}" alt="Luxury Room Image" />
                </div>
                <div class="swiper-slide aboutUsCounter__swiper__slide">
                    <img class="aboutUsCounter__swiper__slide__img" src="{{ asset('images/habitacion1.jpg') }}" alt="Room Image" />
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
@endsection