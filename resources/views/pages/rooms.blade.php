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

    <section class="rooms__search">
        <form action="{{ route('rooms') }}" method="GET">
            <div class="rooms__search__input-group">
                <label for="search">Buscar habitaciones:</label>
                <input type="text" id="search" name="search" placeholder="Ingrese su búsqueda">
            </div>
            <div class="rooms__search__input-group">
                <label for="check_in">Check In:</label>
                <input type="date" id="check_in" name="check_in">
            </div>
            <div class="rooms__search__input-group">
                <label for="check_out">Check Out:</label>
                <input type="date" id="check_out" name="check_out">
            </div>
            <button type="submit">Buscar Disponibilidad</button>
        </form>
    </section>

    <section class="rooms">

        @foreach ($rooms as $room)
            <div>
                <div class="rooms__image">
                    <img src="{{ asset('images/habitacion1.jpg') }}" alt="Habitación">
                    {{-- TODO: Reemplazar con la imagen real de la habitación --}}
                </div>

                <div class="rooms__iconos">
                    <img class="rooms__iconos__image" src="{{ asset('images/icons_mobile.png') }}" alt="">
                    {{-- TODO: Reemplazar con los iconos reales de las comodidades --}}
                </div>

                <h4 class="rooms__title">{{ $room->name ?? 'Minimal Duplex Room' }}</h4>
                <p class="rooms__description">{{ $room->description ?? 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.' }}</p>
                {{-- TODO: Reemplazar con la descripción real de la habitación --}}

                <div class="rooms__info">
                    <p>${{ $room->price ?? '345' }}/Night</p>
                    <p><a href="{{ route('rooms.details', ['id' => $room->id ?? 1]) }}">Booking Now</a></p>
                </div>

            </div>
        @endforeach

        <div class="rooms__pagination">
            <img src="{{ asset('images/pagination.png') }}" alt="Pagination">
            {{-- TODO: Implementar la paginación real si es necesario --}}
        </div>

    </section>

@endsection