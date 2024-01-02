@extends('layouts.app')
@section('content')
    <div class="artboard-2-banner">
        <div class="container-fluid">
            <div class="row align-items-center text-center">
                <div class="col-md-3 d-lg-flex d-none">
                    <div class="row aside-sec">
                        <div class="col-6 pe-0 pt-4">
                            <img src="{{ asset('assets/images/screen1.png') }}" class="side-frame" alt="">
                        </div>
                        <div class="col-6 ps-0 pt-4">
                            <img src="{{ asset('assets/images/screen2.png') }}" class="side-frame" alt="">
                        </div>
                        <div class="col-12 pt-2">
                            <img src="{{ asset('assets/images/Window.png') }}" class="side-frame" alt="">
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 d-flex justify-content-center text-center">
                            <a href="#"> <img src="./assets/images/full-size-image1.png" class="center-image" alt=""></a>
                        </div> -->
                <div class="offset-lg-5 col-lg-4 col-md-12">
                    <div
                        class="book-area-neww position-relative d-flex justify-content-center align-items-center flex-column text-center">
                        <a href="#"> <img src="{{ asset('assets/images/Group 3.png') }}" class="top-book"
                                alt="" id="top-book-new"> </a>
                        <div class="new-text">
                            <h1>New Testament</h1>
                        </div>
                        <div class="book-stand-new mb-4">
                            <div class="books other-books">
                                <div class="book">
                                    <a href="{{ route('new-testament.index', '1') }}"><img
                                            src="{{ asset('assets/images/New-testament-images/First shelf/01-removebg-preview.png') }}"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <div class="book">
                                    <a href="{{ route('new-testament.index', '2') }}"><img
                                            src="{{ asset('assets/images/New-testament-images/First shelf/02-removebg-preview.png') }}"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <div class="book">
                                    <a href="{{ route('new-testament.index', '3') }}"><img
                                            src="{{ asset('assets/images/New-testament-images/First shelf/03-removebg-preview.png') }}"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <div class="book">
                                    <a href="{{ route('new-testament.index', '4') }}"><img
                                            src="{{ asset('assets/images/New-testament-images/First shelf/04-removebg-preview.png') }}"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <div class="book">
                                    <a href="{{ route('new-testament.index', '5') }}"><img
                                            src="{{ asset('assets/images/New-testament-images/First shelf/The-Acts-of-the-Apostles-_1_-removebg-preview-removebg-preview.png') }}"
                                            class="img-fluid" alt=""></a>
                                </div>


                            </div>
                            <img src="{{ asset('assets/images/Vector Smart Object copy 5-2.png') }}" alt=""
                                class="stand" id="stand">
                            <div class="lights-new d-flex justify-content-between" id="lightsNew">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                            </div>
                        </div>
                        <div class="book-stand-new pt-xl-4 mb-4">
                            <div class="books other-books">
                                <div class="book">
                                    <a href="{{ route('new-testament.index', '6') }}"><img
                                            src="{{ asset('assets/images/New-testament-images/Second shelf/07-removebg-preview.png') }}"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <div class="book">
                                    <a href="{{ route('new-testament.index', '7') }}"><img
                                            src="{{ asset('assets/images/New-testament-images/Second shelf/08-removebg-preview.png') }}"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <div class="book">
                                    <a href="{{ route('new-testament.index', '8') }}"><img
                                            src="{{ asset('assets/images/New-testament-images/Second shelf/09-removebg-preview.png') }}"
                                            class="img-fluid" alt=""></a>
                                </div>

                                <div class="book">
                                    <a href="{{ route('new-testament.index', '10') }}"><img
                                            src="{{ asset('assets/images/New-testament-images/Second shelf/11-removebg-preview.png') }}"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <div class="book">
                                    <a href="{{ route('new-testament.index', '9') }}"><img
                                            src="{{ asset('assets/images/New-testament-images/Second shelf/10-removebg-preview.png') }}"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <!-- <div class="book">
                                    <a href="{{ route('new-testament.index', '2') }}3"><img src="assets/images/New-testament-images/Second shelf/12-removebg-preview.png" class="img-fluid"
                                        alt=""></a>
                                  </div> -->

                            </div>
                            <img src="{{ asset('assets/images/Vector Smart Object copy 5-2.png') }}" alt=""
                                class="stand" id="stand">
                            <div class="lights-new d-flex justify-content-between" id="lightsNew">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                            </div>
                        </div>
                        <div class="book-stand-new pt-xl-4">
                            <div class="books other-books">
                                <div class="book">
                                    <a href="{{ route('new-testament.index', '11') }}"><img
                                            src="{{ asset('assets/images/New-testament-images/Thirs shelf/01-removebg-preview.png') }}"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <div class="book">
                                    <a href="{{ route('new-testament.index', '12') }}"><img
                                            src="{{ asset('assets/images/New-testament-images/Thirs shelf/02-removebg-preview.png') }}"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <div class="book">
                                    <a href="{{ route('new-testament.index', '13') }}"><img
                                            src="{{ asset('assets/images/New-testament-images/Thirs shelf/03-removebg-preview.png') }}"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <div class="book">
                                    <a href="{{ route('new-testament.index', '14') }}"><img
                                            src="{{ asset('assets/images/New-testament-images/Thirs shelf/04-removebg-preview.png') }}"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <div class="book">
                                    <a href="{{ route('new-testament.index', '15') }}"><img
                                            src="{{ asset('assets/images/New-testament-images/Thirs shelf/05-removebg-preview.png') }}"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <div class="book">
                                    <a href="{{ route('new-testament.index', '16') }}"><img
                                            src="{{ asset('assets/images/New-testament-images/Thirs shelf/06-removebg-preview.png') }}"
                                            class="img-fluid" alt=""></a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/Vector Smart Object copy 5-2.png') }}" alt=""
                                class="stand" id="stand">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
