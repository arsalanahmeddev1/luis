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
                        <a href="#"> <img src="{{asset('assets/images/Group 3.png')}}" class="ani-minor-top-book" alt=""> </a>
                        <div class="old-text">
                            <h2>The Writings</h2>
                        </div>
                        <div class="artboard-book-stand mb-4">
                            <div class="artboard-books">
                                <!-- <div class="artboard-book">
                                    <a href="#"><img id="book-17"
                                            src="assets/Old-testament/First-shelf/category-5/06-old.png"
                                            data-styles="css/steve-jobs-html73.css , css/steve-jobs-33.css"
                                            data-script="js/steve-jobs-33.js" class="img-fluid sm-book" alt=""></a>
                                </div> -->
                                <div class="artboard-book">
                                    <a href="#"><img id="book-19"
                                            src="{{asset('assets/Old-testament/First-shelf/category-5/Daniel-removebg-preview.png')}}"
                                            data-id='{{asset('assets/images/old-testament-images/old-testament-book-covers/the-writing/Daniel.png')}}' class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-20"
                                            src="{{asset('assets/Old-testament/First-shelf/category-5/Esther-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/the-writing/Esther.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-21"
                                            src="{{asset('assets/Old-testament/First-shelf/category-5/Ezra-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/the-writing/Ezra.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-22"
                                            src="{{asset('assets/Old-testament/First-shelf/category-5/Job-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/the-writing/Jobs.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-23"
                                            src="{{asset('assets/Old-testament/First-shelf/category-5/Lamentation-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/the-writing/Lamentations.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                            </div>
                            <img src="{{asset('assets/images/artboard-shelf-1.png')}}" alt="" class="artboard-stand">
                            <div class="lights d-flex justify-content-between">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                            </div>
                        </div>
                        <div class="artboard-book-stand mb-4">
                            <div class="artboard-books">
                                <div class="artboard-book">
                                    <a href="#"><img id="book-24"
                                            src="{{asset('assets/Old-testament/First-shelf/category-5/Nehemiah-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/the-writing/Nehemiah.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-25"
                                            src="{{asset('assets/Old-testament/First-shelf/category-5/Chronicles-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/the-writing/Chronicles.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-26"
                                            src="{{asset('assets/Old-testament/First-shelf/category-5/Proverb-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/the-writing/Proverbs.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-27"
                                            src="{{asset('assets/Old-testament/First-shelf/category-5/Psalm-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/the-writing/Book\ of\ Psalm.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-28"
                                            src="{{asset('assets/Old-testament/First-shelf/category-5/Qoheleth-_Ecclesiastes_-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/the-writing/Qoheleth.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-29"
                                            src="{{asset('assets/Old-testament/First-shelf/category-5/Ruth-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/the-writing/Ruth.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <!-- <div class="artboard-book">
                                    <a href="#"><img
                                            src="assets/Old-testament/First-shelf/category-5/Song-of-Sons-removebg-preview.png"
                                            data-styles="css/steve-jobs-html85.css , css/steve-jobs-45.css"
                                            data-script="js/steve-jobs-45.js" class="img-fluid sm-book" alt=""></a>
                                </div> -->
                            </div>
                            <img src="{{asset('assets/images/artboard-shelf-1.png')}}" alt="" class="artboard-stand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
