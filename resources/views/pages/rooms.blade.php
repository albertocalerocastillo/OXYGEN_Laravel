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
                <a>Rooms</a>
            </span>
        </div>
    </section>

    <section class="rooms">

        <div>
            <div class="rooms__image">
                <img src="{{ asset('images/habitacion1.jpg') }}" alt="Habitación">
            </div>

            <div class="rooms__iconos">
                <img class="rooms__iconos__image" src="{{ asset('images/icons_mobile.png') }}" alt="">
            </div>

            <h4 class="rooms__title">Minimal Duplex Room</h4>
            <p class="rooms__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do
                eiusmod
                tempor.</p>

            <div class="rooms__info">
                <p>$345/Night</p>
                <p><a href="{{ route('rooms.details', ['id' => 1]) }}">Booking Now</a></p>
            </div>

        </div>

        <div>

            <div class="rooms__image">
                <img src="{{ asset('images/habitacion1.jpg') }}" alt="Habitación">
            </div>

            <div class="rooms__iconos">
                <img class="rooms__iconos__image" src="{{ asset('images/icons_mobile.png') }}" alt="">
            </div>

            <h4 class="rooms__title">Minimal Duplex Room</h4>
            <p class="rooms__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do
                eiusmod
                tempor.</p>

            <div class="rooms__info">
                <p>$345/Night</p>
                <p><a href="{{ route('rooms.details', ['id' => 1]) }}">Booking Now</a></p>
            </div>

        </div>

        <div>

            <div class="rooms__image">
                <img src="{{ asset('images/habitacion1.jpg') }}" alt="Habitación">
            </div>

            <div class="rooms__iconos">
                <img class="rooms__iconos__image" src="{{ asset('images/icons_mobile.png') }}" alt="">
            </div>

            <h4 class="rooms__title">Minimal Duplex Room</h4>
            <p class="rooms__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do
                eiusmod
                tempor.</p>

            <div class="rooms__info">
                <p>$345/Night</p>
                <p><a href="{{ route('rooms.details', ['id' => 1]) }}">Booking Now</a></p>
            </div>

        </div>

        <div>

            <div class="rooms__image">
                <img src="{{ asset('images/habitacion1.jpg') }}" alt="Habitación">
            </div>

            <div class="rooms__iconos">
                <img class="rooms__iconos__image" src="{{ asset('images/icons_mobile.png') }}" alt="">
            </div>

            <h4 class="rooms__title">Minimal Duplex Room</h4>
            <p class="rooms__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do
                eiusmod
                tempor.</p>

            <div class="rooms__info">
                <p>$345/Night</p>
                <p><a href="{{ route('rooms.details', ['id' => 1]) }}">Booking Now</a></p>
            </div>

        </div>

        <div>

            <div class="rooms__image">
                <img src="{{ asset('images/habitacion1.jpg') }}" alt="Habitación">
            </div>

            <div class="rooms__iconos">
                <img class="rooms__iconos__image" src="{{ asset('images/icons_mobile.png') }}" alt="">
            </div>

            <h4 class="rooms__title">Minimal Duplex Room</h4>
            <p class="rooms__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do
                eiusmod
                tempor.</p>

            <div class="rooms__info">
                <p>$345/Night</p>
                <p><a href="{{ route('rooms.details', ['id' => 1]) }}">Booking Now</a></p>
            </div>

        </div>

        <div>

            <div class="rooms__image">
                <img src="{{ asset('images/habitacion1.jpg') }}" alt="Habitación">
            </div>

            <div class="rooms__iconos">
                <img class="rooms__iconos__image" src="{{ asset('images/icons_mobile.png') }}" alt="">
            </div>

            <h4 class="rooms__title">Minimal Duplex Room</h4>
            <p class="rooms__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do
                eiusmod
                tempor.</p>

            <div class="rooms__info">
                <p>$345/Night</p>
                <p><a href="{{ route('rooms.details', ['id' => 1]) }}">Booking Now</a></p>
            </div>

        </div>

        <div class="rooms__pagination">
            <img src="{{ asset('images/pagination.png') }}" alt="Pagination">
        </div>

    </section>

@endsection