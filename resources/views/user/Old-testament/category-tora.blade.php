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
                        <a href="#"> <img src="./assets/images/full-size-image1.png" class="center-image" alt=""></a>
                    </div> -->
                <div class="offset-lg-6 col-lg-3 col-md-12">
                    <div class="artboard-book-area position-relative">
                        <a href="#"> <img src="{{ asset('assets/images/Group 3.png') }}" class="penta-top-book"
                                alt=""> </a>
                        <div class="old-text">
                            <h1>Old Testament</h1>
                            <h2>Deuteronomistic History</h2>
                        </div>
                        <div class="artboard-book-stand mb-4">
                            <div class="artboard-books">
                                <!-- <div class="artboard-book">
                                        <a href="{{ route('user.torah', '08') }}"><img
                                                src="assets/Old-testament/First-shelf/category/Deuteronomistic-History-_1_-removebg-preview.png"
                                                data-styles="css/steve-jobs-html54.css , css/steve-jobs-14.css"
                                                data-script="js/steve-jobs-14.js" class="img-fluid sm-book" alt=""></a>
                                    </div> -->
                                <div class="artboard-book">
                                    <a href="{{ route('user.torah', '09') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category/joshua-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html55.css , css/steve-jobs-15.css"
                                            data-script="js/steve-jobs-15.js" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.torah', '10') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category/Judges-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html56.css , css/steve-jobs-16.css"
                                            data-script="js/steve-jobs-16.js" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.torah', '11') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category/King-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html57.css , css/steve-jobs-17.css"
                                            data-script="js/steve-jobs-17.js" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.torah', '12') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category/Samue-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html58.css , css/steve-jobs-18.css"
                                            data-script="js/steve-jobs-18.js" class="img-fluid sm-book" alt=""></a>
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
                            <div class="artboard-books pt-4">

                                <div class="artboard-book">
                                    <a href="{{ route('user.torah', '22') }}"><img
                                            src="{{ asset('assets/images/About_the_Bible.png') }}"
                                            data-styles="css/steve-jobs-html86.css , css/steve-jobs-46.css"
                                            data-script="js/steve-jobs-47.js" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.torah', '23') }}"><img
                                            src="{{ asset('assets/images/Heros_of_the_Old_Testament-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html87.css , css/steve-jobs-47.css"
                                            data-script="js/steve-jobs-48.js" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.torah', '25') }}"><img
                                            src="{{ asset('assets/images/s2-02-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html89.css , css/steve-jobs-49.css"
                                            data-script="js/steve-jobs-50.js" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.torah', '28') }}"><img
                                            src="{{ asset('assets/images/s2-05-removebg-preview.png') }}"
                                            data-styles="css/steve-jobs-html92.css , css/steve-jobs-52.css"
                                            data-script="js/steve-jobs-53.js" class="img-fluid sm-book"
                                            alt=""></a>
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
