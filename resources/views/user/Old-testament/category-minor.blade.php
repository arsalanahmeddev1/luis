@extends('layouts.app')
@section('content')
    <div class="artboard-1-banner">
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
                        <a href="#"> <img src="./assests/images/full-size-image1.png" class="center-image" alt=""></a>
                    </div> -->
                <div class="offset-lg-6 col-lg-3 col-md-12">
                    <div class="artboard-book-area position-relative">
                        <a href="#"> <img src="{{ asset('assets/images/Group 3.png') }}" class="minor-top-book"
                                alt=""> </a>
                        <div class="old-text">
                            <h1>Old Testament</h1>
                            <h2>Minor Prophets</h2>
                        </div>
                        <div class="artboard-book-stand mb-3">
                            <div class="artboard-books">
                                <div class="artboard-book">
                                    <a href="{{ route('user.minor-prophet', '16') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category-4/Habakkuk-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html63.css , css/steve-jobs-23.css"
                                            data-script="js/steve-jobs-23.js" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.minor-prophet', '17') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category-4/Haggai-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html64.css , css/steve-jobs-24.css"
                                            data-script="js/steve-jobs-24.js" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.minor-prophet', '18') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category-4/Hosea-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html65.css , css/steve-jobs-25.css"
                                            data-script="js/steve-jobs-25.js" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.minor-prophet', '19') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category-4/Joel-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html66.css , css/steve-jobs-26.css"
                                            data-script="js/steve-jobs-26.js" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.minor-prophet', '20') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category-4/Jonah-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html67.css , css/steve-jobs-27.css"
                                            data-script="js/steve-jobs-27.js" class="img-fluid sm-book" alt=""></a>
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

                        </div>
                        <div class="artboard-books">
                            <div class="artboard-book">
                                <a href="{{ route('user.minor-prophet', '21') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-4/malachi-removebg-preview.png') }}"
                                        data-styles="css/steve-jobs-html68.css , css/steve-jobs-28.css"
                                        data-script="js/steve-jobs-28.js" class="img-fluid sm-book" alt=""></a>
                            </div>
                            <div class="artboard-book">
                                <a href="{{ route('user.minor-prophet', '22') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-4/Micah-removebg-preview.png') }}"
                                        data-styles="css/steve-jobs-html69.css , css/steve-jobs-29.css"
                                        data-script="js/steve-jobs-29.js" class="img-fluid sm-book" alt=""></a>
                            </div>
                            <!-- <div class="artboard-book">
                                        <a href="{{ route('user.minor-prophet', '23') }}"><img
                                                src="First shelf/category-4/Minor-Prophets-removebg-preview.png')}}"
                                                data-styles="css/steve-jobs-html70.css , css/steve-jobs-30.css"
                                                data-script="js/steve-jobs-30.js" class="img-fluid sm-book" alt=""></a>
                                    </div> -->
                            <div class="artboard-book">
                                <a href="{{ route('user.minor-prophet', '24') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-4/Nahum-removebg-preview.png') }}"
                                        data-styles="css/steve-jobs-html71.css , css/steve-jobs-31.css"
                                        data-script="js/steve-jobs-31.js" class="img-fluid sm-book" alt=""></a>
                            </div>
                            <div class="artboard-book">
                                <a href="{{ route('user.minor-prophet', '25') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-4/Zephaniah-removebg-preview.png') }}"
                                        data-styles="css/steve-jobs-html72.css , css/steve-jobs-32.css"
                                        data-script="js/steve-jobs-32.js" class="img-fluid sm-book" alt=""></a>
                            </div>
                            <div class="artboard-book">
                                <a href="{{ route('user.minor-prophet', '26') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-4/Amos__1.png') }}"
                                        data-styles="css/steve-jobs-html72.css , css/steve-jobs-32.css"
                                        data-script="js/steve-jobs-32.js" class="img-fluid sm-book" alt=""></a>
                            </div>
                            <div class="artboard-book">
                                <a href="{{ route('user.minor-prophet', '27') }}"><img
                                        src="{{ asset('assets/Old-testament/First-shelf/category-4/Book-mockup.png') }}"
                                        data-styles="css/steve-jobs-html72.css , css/steve-jobs-32.css"
                                        data-script="js/steve-jobs-32.js" class="img-fluid sm-book" alt=""></a>
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
