@extends('layouts.app')

@section('title', 'Contact Hotel Miranda')

@section('content')
    <section class="ultimate">
        <div>
            <p class="ultimate__title">THE ULTIMATE LUXURY</p>
            <h2 class="ultimate__description">New Details</h2>
        </div>
        <div class="ultimate__nav">
            <span class="ultimate__nav__links">
                <a href="{{ route('home') }}">Home |&nbsp;</a>
                <a>Blog</a>
            </span>
        </div>
    </section>

    <section class="contact-cards">
        <div class="contact-cards-container">
            <div class="contact-cards-container__items">
                <img src="{{ asset('images/01.png') }}" alt="01" class="contact-cards-container__items__img">
                <div>
                    <img src="{{ asset('images/emaildetails.png') }}" alt="email" class="contact-cards-container__items__icon">
                    <div class="contact-cards-container__items__text">
                        <h6 class="contact-cards-container__items__text__title">Hotel Address</h6>
                        <p class="contact-cards-container__items__text__info">19/A, Cirikon City hall Tower New York, NYC</p>
                    </div>
                </div>
            </div>

            <div class="contact-cards-container__items">
                <img src="{{ asset('images/02.png') }}" alt="02" class="contact-cards-container__items__img">
                <div>
                    <img src="{{ asset('images/phonedetails.png') }}" alt="phone" class="contact-cards-container__items__icon">
                    <div class="contact-cards-container__items__text">
                        <h6 class="contact-cards-container__items__text__title">Phone Number</h6>
                        <p class="contact-cards-container__items__text__info">+ 97656 8675 7864 7 <br>+ 876 766 8675
                            765 6</p>
                    </div>
                </div>
            </div>

            <div class="contact-cards-container__items">
                <img src="{{ asset('images/03.png') }}" alt="03" class="contact-cards-container__items__img">
                <div>
                    <img src="{{ asset('images/addressdetails.png') }}" alt="address" class="contact-cards-container__items__icon">
                    <div class="contact-cards-container__items__text">
                        <h6 class="contact-cards-container__items__text__title">Email</h6>
                        <p class="contact-cards-container__items__text__info">info@webmail.com jobs.webmail@mail.com
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="image">
        <div class="image__container">
            <img src="{{ asset('images/hotel.jpg') }}" alt="hotel">
        </div>
    </section>

    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <div class="form">
            <div class="form__group">
                <img class="form__icon" src="{{ asset('images/namecontact.png') }}" alt="Full Name Icon">
                <input class="form__input" type="text" placeholder="Your full name" name="name" required>
            </div>
            <div class="form__group">
                <img class="form__icon" src="{{ asset('images/phonecontact.png') }}" alt="Phone Icon">
                <input class="form__input" type="tel" placeholder="Add phone number" name="phone">
            </div>
            <div class="form__group">
                <img class="form__icon" src="{{ asset('images/emailcontact.png') }}" alt="Email Icon">
                <input class="form__input" type="email" placeholder="Enter email address" name="email" required>
            </div>
            <div class="form__group">
                <img class="form__icon" src="{{ asset('images/subjectcontact.png') }}" alt="Subject Icon">
                <input class="form__input" type="text" placeholder="Enter subject" name="subject">
            </div>
            <div class="form__group">
                <img class="form__icon form__icon--message" src="{{ asset('images/messagecontact.png') }}" alt="Message Icon">
                <input class="form__input" id="input__message" type="text" placeholder="Enter message" name="message" required>
            </div>
            <button class="form__button" type="submit">Send</button>
        </div>
    </form>
@endsection