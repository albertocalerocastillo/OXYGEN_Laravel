@extends('layouts.app')

@section('title', 'Rooms Hotel Miranda')

@section('content')
    <section class="ultimate">
        <div>
            <p class="ultimate__title">THE ULTIMATE LUXURY</p>
            <h2 class="ultimate__description">Ultimate Room</h2>
        </div>
        <div class="ultimate__nav">
            <span class="ultimate__nav__links">
                <a href="{{ route('home') }}">Home |&nbsp;</a>
                <a>Room Details</a>
            </span>
        </div>
    </section>

    <section class="roomData">

        <p class="roomData__subtitle">DOUBLE BED</p>
        <p class="roomData__title">Luxury Double Bed</p>
        <p class="roomData__price">$345<span>/Night</span></p>
        <img class="roomData__img" src="{{ asset('images/roomdetails.jpg') }}" />

    </section>

    <section class="checkAvailability">

        <p class="checkAvailability__title">Check Availability</p>

        <form class="checkAvailability__form">

            <div class="checkAvailability__form__checkIn">
                <p class="checkAvailability__form__checkIn__title">Check In</p>
                <input class="checkAvailability__form__checkIn__input" type="date" pattern="\d{4}-\d{2}-\d{2}" />
            </div>

            <div class="checkAvailability__form__checkOut">
                <p class="checkAvailability__form__checkOut__title">Check Out</p>
                <input class="checkAvailability__form__checkOut__input" type="date" pattern="\d{4}-\d{2}-\d{2}" />
            </div>

            <button class="checkAvailability__form__button" type="submit">CHECK AVAILABILITY</button>
        </form>

        <p class="checkAvailability__info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
            iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
            illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
            ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam
            aliquam quaerat voluptatem.</p>

    </section>

    <section class="amenities">

        <p class="amenities__title">Amenities</p>
        <div class="amenities__separador"></div>

        <div class="amenities__list">
            <div class="amenities__list__item">
                <img src="{{ asset('images/airconditioner.png') }}" class="amenities__list__item__icon" />
                <p class="amenities__list__item__text">Air conditioner</p>
            </div>
            <div class="amenities__list__item">
                <img src="{{ asset('images/breakfast.png') }}" class="amenities__list__item__icon" />
                <p class="amenities__list__item__text">Breakfast</p>
            </div>
            <div class="amenities__list__item">
                <img src="{{ asset('images/cleaning.png') }}" class="amenities__list__item__icon" />
                <p class="amenities__list__item__text">Cleaning</p>
            </div>
            <div class="amenities__list__item">
                <img src="{{ asset('images/grocery.png') }}" class="amenities__list__item__icon" />
                <p class="amenities__list__item__text">Grocery</p>
            </div>
            <div class="amenities__list__item">
                <img src="{{ asset('images/shop.png') }}" class="amenities__list__item__icon" />
                <p class="amenities__list__item__text">Shop near</p>
            </div>
            <div class="amenities__list__item">
                <img src="{{ asset('images/support.png') }}" class="amenities__list__item__icon" />
                <p class="amenities__list__item__text">24/7 Online Support</p>
            </div>
            <div class="amenities__list__item">
                <img src="{{ asset('images/security.png') }}" class="amenities__list__item__icon" />
                <p class="amenities__list__item__text">Smart Security</p>
            </div>
            <div class="amenities__list__item">
                <img src="{{ asset('images/wifi.png') }}" class="amenities__list__item__icon" />
                <p class="amenities__list__item__text">High speed WiFi</p>
            </div>
            <div class="amenities__list__item">
                <img src="{{ asset('images/kitchen.png') }}" class="amenities__list__item__icon" />
                <p class="amenities__list__item__text">Kitchen</p>
            </div>
            <div class="amenities__list__item">
                <img src="{{ asset('images/shower.png') }}" class="amenities__list__item__icon" />
                <p class="amenities__list__item__text">Shower</p>
            </div>
            <div class="amenities__list__item">
                <img src="{{ asset('images/bed.png') }}" class="amenities__list__item__icon" />
                <p class="amenities__list__item__text">Single bed</p>
            </div>
            <div class="amenities__list__item">
                <img src="{{ asset('images/towels.png') }}" class="amenities__list__item__icon" />
                <p class="amenities__list__item__text">Towels</p>
            </div>
            <div class="amenities__list__item">
                <img src="{{ asset('images/locker.png') }}" class="amenities__list__item__icon" />
                <p class="amenities__list__item__text">Strong Locker</p>
            </div>
            <div class="amenities__list__item">
                <img src="{{ asset('images/team.png') }}" class="amenities__list__item__icon" />
                <p class="amenities__list__item__text">Expert Team</p>
            </div>
        </div>

        <div class="amenities__founder">

            <div class="amenities__founder__photo">
                <img src="{{ asset('images/founder.png') }}" alt="Founder Photo" class="amenities__founder__photo__image" />
            </div>

            <div class="amenities__founder__photo__tick">
                <img src="{{ asset('images/tick.png') }}" class="amenities__founder__photo__tick__icon" />
            </div>

            <p class="amenities__founder__name">Rosalina D. William</p>
            <p class="amenities__founder__status">FOUNDER, QUX CO.</p>
            <p class="amenities__founder__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
            </p>

        </div>

    </section>

    <section class="cancellation">

        <p class="cancellation__title">Cancellation</p>
        <div class="cancellation__separador"></div>
        <p class="cancellation__text">Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis.
            Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor.
            Cancel up to 14 days to get a full refund.</p>

    </section>

    <section class="relatedRooms">
        <p class="relatedRooms__title">Related Rooms</p>
        <div class="relatedRooms__separador"></div>

        <div class="swiper relatedRooms__swiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="{{ asset('images/relatedroom.jpg') }}" class="relatedRooms__swiper__img" />
                    <img src="{{ asset('images/icons_mobile.png') }}" class="relatedRooms__swiper__icons"/>
                    <div class="relatedRooms__swiper__info">
                        <p class="relatedRooms__swiper__info__title">Minimal Duplex Room</p>
                        <p class="relatedRooms__swiper__info__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="relatedRooms__swiper__info__price">
                            <p>$345/Night</p>
                            <p><a href="roomsDetails.html">Booking Now</a></p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('images/habitacion1.jpg') }}" class="relatedRooms__swiper__img" />
                    <img src="{{ asset('images/icons_mobile.png') }}" class="relatedRooms__swiper__icons"/>
                    <div class="relatedRooms__swiper__info">
                        <p class="relatedRooms__swiper__info__title">Minimal Duplex Room</p>
                        <p class="relatedRooms__swiper__info__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="relatedRooms__swiper__info__price">
                            <p>$345/Night</p>
                            <p><a href="roomsDetails.html">Booking Now</a></p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('images/habitacion2.png') }}" class="relatedRooms__swiper__img" />
                    <img src="{{ asset('images/icons_mobile.png') }}" class="relatedRooms__swiper__icons"/>
                    <div class="relatedRooms__swiper__info">
                        <p class="relatedRooms__swiper__info__title">Minimal Duplex Room</p>
                        <p class="relatedRooms__swiper__info__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="relatedRooms__swiper__info__price">
                            <p>$345/Night</p>
                            <p><a href="roomsDetails.html">Booking Now</a></p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

    </section>

@endsection