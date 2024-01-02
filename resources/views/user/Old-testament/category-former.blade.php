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
                        <a href="#"> <img src="{{ asset('assets/images/Group 3.png') }}" class="former-top-book"
                                alt=""> </a>
                        <div class="old-text">
                            <h1>Old Testament</h1>
                            <h2>Former Prophets</h2>
                        </div>
                        <div class="artboard-book-stand mb-4">
                            <div class="artboard-books">
                                <div class="artboard-book">
                                    <a href="{{ route('user.former', '15') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category-2/Ezekiel-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html59.css , css/steve-jobs-19.css"
                                            data-script="js/steve-jobs-19.js" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <!-- <div class="artboard-book">
                                        <a href="{{ route('user.former', '16') }}"><img
                                                src="../First shelf/category-2/Former-Prophets-removebg-preview.png"
                                                data-styles="css/steve-jobs-html60.css , css/steve-jobs-20.css"
                                                data-script="js/steve-jobs-20.js" class="img-fluid sm-book" alt=""></a>
                                    </div> -->
                                <div class="artboard-book">
                                    <a href="{{ route('user.former', '17') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category-2/Isaiah-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html61.css , css/steve-jobs-21.css"
                                            data-script="js/steve-jobs-21.js" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.former', '18') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category-2/Jeremiah-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html62.css , css/steve-jobs-22.css"
                                            data-script="js/steve-jobs-22.js" class="img-fluid sm-book" alt=""></a>
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
                                    <a href="{{ route('user.former', '22') }}"><img
                                            src="{{ asset('assets/images/About_the_Bible.png') }}"
                                            data-styles="css/steve-jobs-html86.css , css/steve-jobs-46.css"
                                            data-script="js/steve-jobs-47.js" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.former', '23') }}"><img
                                            src="{{ asset('assets/images/Heros_of_the_Old_Testament-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html87.css , css/steve-jobs-47.css"
                                            data-script="js/steve-jobs-48.js" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.former', '25') }}"><img
                                            src="{{ asset('assets/images/s2-02-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html89.css , css/steve-jobs-49.css"
                                            data-script="js/steve-jobs-50.js" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.former', '28') }}"><img
                                            src="{{ asset('assets/images/s2-05-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html92.css , css/steve-jobs-52.css"
                                            data-script="js/steve-jobs-53.js" class="img-fluid sm-book" alt=""></a>
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
