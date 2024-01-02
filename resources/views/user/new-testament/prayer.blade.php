@extends('layouts.app')
@section('content')
    <div class="artboard-banner-pray">
        <div class="container-fluid">
            <div id="canvas">
                <div id="book-zoom" style="visibility: hidden;height: 600px;transform: scale(0.2);">
                    <div class="sj-book"></div>
                    <button class="cross-button">Return Book</button>
                </div>
            </div>
            <div class="row align-items-center text-center">
                <div class="col-md-3 d-lg-flex d-none ">
                    <div class="row aside-sec">
                        <div class="col-6 pe-0">
                            <img src="{{asset('assets/images/screen1.png')}}" class="side-frame" alt="">
                        </div>
                        <div class="col-6 ps-0">
                            <img src="{{asset('assets/images/screen2.png')}}" class="side-frame" alt="">
                        </div>
                        <div class="col-12 pt-2">
                            <img src="{{asset('assets/images/Window.png')}}" class="side-frame" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-lg-flex d-none  justify-content-center text-center">
                    <!-- <a href="#"> <img src="assets/images/full-size-image1.png" class="center-image1" alt=""></a> -->
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="artboard-book-area position-relative">
                        <a href="#"> <img src="{{asset('assets/images/Group 3.png')}}" class="pray-top-book" alt=""> </a>
                        <div class="new-text">
                        <!-- <h1>New <br> Testament</h1> -->
                      </div>
                        <div class="artboard-book-stand mb-4">
                            <div class="artboard-books">
                                <div class="artboard-book">
                                    <a href="#"><img id="book-1" src="{{asset('assets/images/New-testament-images/New-testament-images/prayer.png')}}" data-id="{{asset('assets/images/New-testament-images/New-testament-images/prayer-cover.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-2" src="{{asset('assets/images/New-testament-images/New-testament-images/quote.png')}}" data-id="{{asset('assets/images/New-testament-images/New-testament-images/Quote-cover.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-3" src="{{asset('assets/images/New-testament-images/New-testament-images/Daily-saint.png')}}" data-id="{{asset('assets/images/New-testament-images/New-testament-images/Daily-saint-cover.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                            </div>
                            <img src="{{asset('assets/images/artboard-shelf-1.png')}}" alt="" class="artboard-stand">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

