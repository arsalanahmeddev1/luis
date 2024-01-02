@extends('layouts.app')
@section('content')
    <div class="artboard-1-banner">
        <div class="container-fluid">
            <div id="canvas">
                <div id="book-zoom" style="visibility: hidden;height: 600px;transform: scale(0.2);">
                    <div class="sj-book"></div>
                    <button class="cross-button">Return Book</button>
                </div>
                <!-- <div id="slider-bar" class="turnjs-slider">
					<div id="slider"></div>
				</div> -->
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
                        <a href="#"> <img src="{{asset('assets/images/Group 3.png')}}" class="ani-former-top-book" alt=""> </a>
                        <div class="old-text">
                            <h2>Former Prophets</h2>
                        </div>
                        <div class="artboard-book-stand mb-4">
                            <div class="artboard-books">
                                <div class="artboard-book">
                                    <a href="#"><img id="book-15"
                                            src="{{asset('assets/Old-testament/First-shelf/category-2/Ezekiel-removebg-preview.png')}}"
                                            data-id='{{asset('assets/images/old-testament-images/old-testament-book-covers/former/Ezekiel.png')}}' class="img-fluid sm-book" alt=""></a>
                                </div>
                                <!-- <div class="artboard-book">
                                    <a href="#"><img id="book-16"
                                            src="assets/Old-testament/First-shelf/category-2/Former-Prophets-removebg-preview.png"
                                            data-styles="css/steve-jobs-html60.css , css/steve-jobs-20.css"
                                            data-script="js/steve-jobs-20.js" class="img-fluid sm-book" alt=""></a>
                                </div> -->
                                <div class="artboard-book">
                                    <a href="#"><img id="book-17"
                                            src="{{asset('assets/Old-testament/First-shelf/category-2/Isaiah-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/former/Isaiah.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-18"
                                            src="{{asset('assets/Old-testament/First-shelf/category-2/Jeremiah-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/former/Jeremiah.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                            </div>
                            <img src="{{asset('assets/images/artboard-shelf-1.png')}}" alt="" class="artboard-stand">
                            <div class="lights d-flex justify-content-between">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                            </div>
                            <div class="artboard-books">

                            <div class="artboard-book">
                                    <a href="#"><img id="book-22"
                                            src="{{asset('assets/images/About_the_Bible.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/About-the-Bible.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-23"
                                            src="{{asset('assets/images/Heros_of_the_Old_Testament-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/Heroes-of-the-Old-Testament.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-25"
                                            src="{{asset('assets/images/s2-02-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/About-the-Apostles.jpg')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-28"
                                            src="{{asset('assets/images/s2-05-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/Heresay-of-the-Church.jpg')}}" class="img-fluid sm-book" alt=""></a>
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

