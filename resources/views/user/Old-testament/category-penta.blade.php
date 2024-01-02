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
                        <a href="#"> <img src="{{ asset('assets/images/Group 3.png') }}" class="penta-top-book"
                                alt=""> </a>
                        <div class="old-text">
                            <h1>Old Testament</h1>
                            <h2>Pentateuch/Torah</h2>
                        </div>
                        <div class="artboard-book-stand mb-4">
                            <div class="artboard-books ">
                                <!-- <div class="artboard-book">
                                        <a href="{{ route('user.penta', '') }}12"><img
                                                src="assets/Old-testament/First-shelf/01-old.png"
                                                data-styles="{{ asset('assets/css/steve-jobs-html4.css ') }},{{ asset('assets/css/steve-jobs-1.css') }}"
                                                data-script="js/steve-jobs.js" class="img-fluid sm-book" alt=""></a>
                                    </div> -->
                                <div class="artboard-book">
                                    <a href="{{ route('user.penta', '13') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category-first/image_2023_09_11T22_57_35_659Z-removebg-preview.png') }}"
                                            data-styles="{{ asset('assets/css/steve-jobs-html42.css') }} ,{{ asset('assets/css/steve-jobs-2.css') }}"
                                            data-script="{{ asset('assets/js/steve-jobs2.js') }}" class="img-fluid sm-book"
                                            alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.penta', '14') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category-first/image_2023_09_11T22_57_35_664Z-removebg-preview.png') }}"
                                            data-styles="{{ asset('assets/css/steve-jobs-html43.css') }} ,{{ asset('assets/css/steve-jobs-3.css') }}"
                                            data-script="{{ asset('assets/js/steve-jobs-3.js') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.penta', '15') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category-first/image_2023_09_11T22_57_35_667Z-removebg-preview.png') }}"
                                            data-styles="{{ asset('assets/css/steve-jobs-html44.css') }} ,{{ asset('assets/css/steve-jobs-4.css') }}"
                                            data-script="{{ asset('assets/js/steve-jobs-4.js') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.penta', '16') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category-first/image_2023_09_11T22_57_35_670Z-removebg-preview.png') }}"
                                            data-styles="{{ asset('assets/css/steve-jobs-html45.css') }} ,{{ asset('assets/css/steve-jobs-5.css') }}"
                                            data-script="{{ asset('assets/js/steve-jobs-5.js') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.penta', '17') }}"><img
                                            src="{{ asset('assets/Old-testament/First-shelf/category-first/image_2023_09_11T22_57_35_670Z__2_-removebg-preview.png') }}"
                                            data-styles="{{ asset('assets/css/steve-jobs-html46.css') }} ,{{ asset('assets/css/steve-jobs-6.css') }}"
                                            data-script="{{ asset('assets/js/steve-jobs-6.js') }}"
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
                            <div class="artboard-books pt-4">

                                <div class="artboard-book">
                                    <a href="{{ route('user.penta', '90') }}"><img
                                            src="{{ asset('assets/images/About_the_Bible.png') }}"
                                            data-styles="{{ asset('assets/css/steve-jobs-html86.css') }} ,{{ asset('assets/css/steve-jobs-46.cs') }}s"
                                            data-script="{{ asset('assets/js/steve-jobs-47.js') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.penta', '91') }}"><img
                                            src="{{ asset('assets/images/Heros_of_the_Old_Testament-removebg-preview.png') }}"
                                            data-styles="{{ asset('assets/css/steve-jobs-html87.css') }} ,{{ asset('assets/css/steve-jobs-47.cs') }}s"
                                            data-script="{{ asset('assets/js/steve-jobs-48.js') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.penta', '92') }}"><img
                                            src="{{ asset('assets/images/s2-02-removebg-preview.png') }}"
                                            data-styles="{{ asset('assets/css/steve-jobs-html89.css') }} ,{{ asset('assets/css/steve-jobs-49.cs') }}s"
                                            data-script="{{ asset('assets/js/steve-jobs-50.js') }}"
                                            class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="{{ route('user.penta', '93') }}"><img
                                            src="{{ asset('assets/images/s2-05-removebg-preview.png') }}"
                                            data-styles="{{ asset('assets/css/steve-jobs-html92.css') }} ,{{ asset('assets/css/steve-jobs-52.cs') }}s"
                                            data-script="{{ asset('assets/js/steve-jobs-53.js') }}"
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
