@extends('layouts.app')
@section('content')
    <div class="artboard-1-banner">
        <div class="container-fluid">
            <div class="row align-items-center text-center">
                <div class="col-md-3 d-lg-flex d-none">
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
                <!-- <div class="col-md-6 d-flex justify-content-center text-center">
                            <a href="#"> <img src="./assets/images/full-size-image1.png" class="center-image" alt=""></a>
                        </div> -->
                <div class="offset-lg-6 col-lg-3 col-md-12">
                    <div class="artboard-book-area position-relative">
                        <a href="#"> <img src="{{ asset('assets/images/Group 3.png') }}" class="minor-top-book"
                                alt=""> </a>
                        <div class="old-text">
                            <h1>Old Testament</h1>
                            <h2>The Writings</h2>
                        </div>
                        <div class="artboard-books">
                            <!-- <div class="artboard-book">
                                            <a href="{{ route('user.writing', '17') }}"><img
                                                    src="assets/Old-testament/First-shelf/category-5/06-old.png"
                                                    data-styles="css/steve-jobs-html73.css , css/steve-jobs-33.css"
                                                    data-script="js/steve-jobs-33.js" class="img-fluid sm-book" alt=""></a>
                                        </div> -->
                            <div class="artboard-book">
                                <a href="{{ route('user.writing', '19') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-5/Daniel-removebg-preview.png') }}"
                                        data-styles="css/steve-jobs-html74.css , css/steve-jobs-34.css"
                                        data-script="js/steve-jobs-34.js" class="img-fluid sm-book" alt=""></a>
                            </div>
                            <div class="artboard-book">
                                <a href="{{ route('user.writing', '20') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-5/Esther-removebg-preview.png') }}"
                                        data-styles="css/steve-jobs-html75.css , css/steve-jobs-35.css"
                                        data-script="js/steve-jobs-35.js" class="img-fluid sm-book" alt=""></a>
                            </div>
                            <div class="artboard-book">
                                <a href="{{ route('user.writing', '21') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-5/Ezra-removebg-preview.png') }}"
                                        data-styles="css/steve-jobs-html76.css , css/steve-jobs-36.css"
                                        data-script="js/steve-jobs-36.js" class="img-fluid sm-book" alt=""></a>
                            </div>
                            <div class="artboard-book">
                                <a href="{{ route('user.writing', '22') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-5/Job-removebg-preview.png') }}"
                                        data-styles="css/steve-jobs-html77.css , css/steve-jobs-37.css"
                                        data-script="js/steve-jobs-37.js" class="img-fluid sm-book" alt=""></a>
                            </div>
                            <div class="artboard-book">
                                <a href="{{ route('user.writing', '23') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-5/Lamentation-removebg-preview.png') }}"
                                        data-styles="css/steve-jobs-html78.css , css/steve-jobs-38.css"
                                        data-script="js/steve-jobs-38.js" class="img-fluid sm-book" alt=""></a>
                            </div>
                        </div>
                        <img src="{{ asset('assets/images/artboard-shelf-1.png') }}" alt="" class="artboard-stand">
                        <div class="lights d-flex justify-content-between">
                            <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                alt="">
                            <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                alt="">
                            <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                alt="">
                        </div>
                        <div class="artboard-books pt-3">
                            <div class="artboard-book">
                                <a href="{{ route('user.writing', '24') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-5/Nehemiah-removebg-preview.png') }}"
                                        data-styles="css/steve-jobs-html79.css , css/steve-jobs-39.css"
                                        data-script="js/steve-jobs-39.js" class="img-fluid sm-book" alt=""></a>
                            </div>
                            <div class="artboard-book">
                                <a href="{{ route('user.writing', '25') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-5/Chronicles-removebg-preview.png') }}"
                                        data-styles="css/steve-jobs-html80.css , css/steve-jobs-40.css"
                                        data-script="js/steve-jobs-40.js" class="img-fluid sm-book" alt=""></a>
                            </div>
                            <div class="artboard-book">
                                <a href="{{ route('user.writing', '26') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-5/Proverb-removebg-preview.png') }}"
                                        data-styles="css/steve-jobs-html81.css , css/steve-jobs-41.css"
                                        data-script="js/steve-jobs-41.js" class="img-fluid sm-book" alt=""></a>
                            </div>
                            <div class="artboard-book">
                                <a href="{{ route('user.writing', '27') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-5/Psalm-removebg-preview.png') }}"
                                        data-styles="css/steve-jobs-html82.css , css/steve-jobs-42.css"
                                        data-script="js/steve-jobs-42.js" class="img-fluid sm-book" alt=""></a>
                            </div>
                            <div class="artboard-book">
                                <a href="{{ route('user.writing', '28') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-5/Qoheleth-_Ecclesiastes_-removebg-preview.png') }}"
                                        data-styles="css/steve-jobs-html83.css , css/steve-jobs-43.css"
                                        data-script="js/steve-jobs-43.js" class="img-fluid sm-book" alt=""></a>
                            </div>
                            <div class="artboard-book">
                                <a href="{{ route('user.writing', '29') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-5/Ruth-removebg-preview.png') }}"
                                        data-styles="css/steve-jobs-html84.css , css/steve-jobs-44.css"
                                        data-script="js/steve-jobs-44.js" class="img-fluid sm-book" alt=""></a>
                            </div>
                        </div>
                        <img src="{{ asset('assets/images/artboard-shelf-1.png') }}" alt=""
                            class="artboard-stand">

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
