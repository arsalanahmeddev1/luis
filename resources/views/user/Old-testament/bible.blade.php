@extends('layouts.app')
@section('content')
{{-- {{dd($pages)}} --}}
    <div class="banner">
        <div class="container-fluid">
            @foreach ($pages as $key => $page)
            <div class="target{{$key+3}} d-none ">
                <h1 class="text-center">{{$page->title}}</h1>
                <h6 class="text-center">{{$page->content}}</h6>
            </div>
            @endforeach


            <div id="canvas">
                <div id="book-zoom" style="visibility: hidden;height: 600px;transform: scale(0.2);">
                    <div class="sj-book">
                    </div>
                    <button class="cross-button">Return Book</button>
                </div>
            </div>
            <div class="row align-items-center text-center">
                <div class="col-lg-3 d-lg-block d-none">
                    <div class="row aside-sec">
                        <div class="col-6 pe-0">
                            <img src="{{ asset('assets/images/screen1.png') }}" class="side-frame" alt="">
                        </div>
                        <div class="col-6 ps-0">
                            <img src="{{ asset('assets/images/screen2.png') }}" class="side-frame" alt="">
                        </div>
                        <div class="col-12 pt-2">
                            <img src="{{ asset('assets/images/Window.png') }}" class="side-frame" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex d-none justify-content-center text-center">
                    <!-- <a href="#"> <img src="assets/images/full-size-image1.png" class="center-image1" alt=""></a> -->
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="bible-book-area position-relative">
                        <a href="#"> <img src="{{ asset('assets/images/Group 3.png') }}" class="bible-top-book"
                                alt=""> </a>
                        <div class="artboard-book-stand pt-5">
                            <div class="artboard-books">
                                <div class="artboard-book">
                                    <a href="#"><img id="book-22"
                                            src="{{ asset('assets/images/About_the_Bible.png') }}"
                                            data-id="{{ asset('assets/images/old-testament-images/old-testament-book-covers/About-the-Bible.png') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-23"
                                            src="{{ asset('assets/images/Heros_of_the_Old_Testament-removebg-preview.png') }}"
                                            data-id="{{ asset('assets/images/old-testament-images/old-testament-book-covers/Heroes-of-the-Old-Testament.png') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-24"
                                            src="{{ asset('assets/images/About_the_Prophets-removebg-preview.png') }}"
                                            data-id="{{ asset('assets/images/old-testament-images/old-testament-book-covers/About-the-Prophets.png') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-25"
                                            src="{{ asset('assets/images/s2-02-removebg-preview.png') }}"
                                            data-id="{{ asset('assets/images/old-testament-images/old-testament-book-covers/About-the-Apostles.jpg') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/artboard-shelf-1.png') }}" alt=""
                                class="artboard-stand">
                            <div class="lights d-flex justify-content-between">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                            </div>
                            <div class="artboard-books">

                                <div class="artboard-book">
                                    <a href="#"><img id="book-26"
                                            src="{{ asset('assets/images/s2-03-removebg-preview.png') }}"
                                            data-id="{{ asset('assets/images/old-testament-images/old-testament-book-covers/Fathers-of-the-Church.png') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-27"
                                            src="{{ asset('assets/images/s2-04-removebg-preview.png') }}"
                                            data-id="{{ asset('assets/images/old-testament-images/old-testament-book-covers/Heroes-of-the-New-Testament.png') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-28"
                                            src="{{ asset('assets/images/s2-05-removebg-preview.png') }}"
                                            data-id="{{ asset('assets/images/old-testament-images/old-testament-book-covers/Heresay-of-the-Church.jpg') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-29"
                                            src="{{ asset('assets/images/s2-06-removebg-preview.png') }}"
                                            data-id="{{ asset('assets/images/old-testament-images/old-testament-book-covers/The-Sacraments.png') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-30"
                                            src="{{ asset('assets/images/01-removebg-preview.png') }}"
                                            data-id="{{ asset('assets/images/old-testament-images/old-testament-book-covers/The-Liturgy-Explained.png') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/artboard-shelf-1.png') }}" alt=""
                                class="artboard-stand">
                            <div class="lights d-flex justify-content-between">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                            </div>
                            <div class="artboard-books">

                                <div class="artboard-book">
                                    <a href="#"><img id="book-31"
                                            src="{{ asset('assets/images/02-removebg-preview.png') }}"
                                            data-id="{{ asset('assets/images/old-testament-images/old-testament-book-covers/council.png') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-32"
                                            src="{{ asset('assets/images/03-removebg-preview.png') }}"
                                            data-id="{{ asset('assets/images/old-testament-images/old-testament-book-covers/virgin-marry.png') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-33"
                                            src="{{ asset('assets/images/04-removebg-preview.png') }}"
                                            data-id="{{ asset('assets/images/old-testament-images/old-testament-book-covers/the-creed.png') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-34"
                                            src="{{ asset('assets/images/05-removebg-preview.png') }}"
                                            data-id="{{ asset('assets/images/old-testament-images/old-testament-book-covers/etymology.png') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-35"
                                            src="{{ asset('assets/images/06-removebg-preview.png') }}"
                                            data-id="{{ asset('assets/images/old-testament-images/old-testament-book-covers/Christology.png') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/artboard-shelf-1.png') }}" alt=""
                                class="artboard-stand">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    
@endsection
