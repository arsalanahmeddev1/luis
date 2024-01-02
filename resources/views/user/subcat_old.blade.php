@extends('layouts.app')
@php
    use App\Models\Category;
@endphp
@section('content')
    {{-- {{dd($shelvesArray)}} --}}
    <div class="banner position-relative">
        <div class="sm-image">
            <a href="{{ route('index') }}"> <img src="{{ asset('assets/images/Group 3.png') }}" class="top-book" alt="">
            </a>
        </div>
        <div class="container-fluid">
            {{-- <div class="row">
                <div class="col-12"> --}}
            <div class="row align-items-center text-center banner-wrapper">
                {{-- <div class="col-lg-3 col-md-12">
                            <div class="text-wrapper">
                                <div class="text-area">
                                    <!-- <img src="/luice-olivare/assets/top-view-wooden-frame-with-copy-space copy 2.png" class="img-fluid" alt=""> -->
                                    <img src="{{ asset('assets/images/frame-Icon.png') }}" class="img-fluid pb-2"
                                        alt="">
                                    <h3>PRAYER OF THE DAY</h3>
                                    <p>We can't help everyone,
                                        but everyone can help
                                        someone</p>
                                    <h5>AESOP</h5>
                                    <a href="{{ route('user.prayer', '1') }}" class="btn">Read More</a>
                                </div>
                                <div class="text-area">
                                    <!-- <img src="/luice-olivare/assets/top-view-wooden-frame-with-copy-space copy 2.png" class="img-fluid" alt=""> -->
                                    <h3>QUOTE OF THE DAY</h3>
                                    <a href="{{ route('user.prayer', '2') }}" class="btn mt-2 mb-3">Read More</a>
                                    <h3>SAINT OF THE DAY</h3>
                                    <a href="{{ route('user.prayer', '3') }}" class="btn mt-2 mb-3">Read More</a>
                                    <img src="{{ asset('assets/images/Vector Smart Object copy.png') }}"
                                        class="frame-bottom" alt="">
                                </div>
                            </div>
                        </div> --}}
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
                <div class="offset-lg-5 col-lg-4 col-md-12">
                    <div class="book-area position-relative main-shelf">

                        <div class="old-text">
                            <h1>{{ $category->name }}</h1>
                        </div>
                        <div class="book-stand-new mb-4">
                            <div class="books other-books">
                                @foreach ($shelf1 as $category)
                                    <div class="book">
                                        <a href="{{ route('show', $category->slug) }}"><img
                                                src="{{ $category->getFirstMediaUrl('categoryShelfImages') }}"
                                                class="img-fluid shelve-books" alt=""></a>
                                    </div>
                                @endforeach


                            </div>
                            <img src="{{ asset('assets/images/Vector Smart Object copy 5-1.png') }}" alt=""
                                class="stand">

                            <div class="lights-main d-flex justify-content-between">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                            </div>
                        </div>
                        <div class="book-stand-new mb-4">
                            <div class="books other-books">

                                @foreach ($shelf2 as $category)
                                    <div class="book ">
                                        <a href="{{ route('show', $category->slug) }}"><img
                                                src="{{ $category->getFirstMediaUrl('categoryShelfImages') }}"
                                                class="img-fluid shelve-books" alt=""></a>
                                    </div>
                                @endforeach


                            </div>
                            <img src="{{ asset('assets/images/Vector Smart Object copy 5-2.png') }}" alt=""
                                class="stand">
                            <div class="lights-main d-flex justify-content-between">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                                <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                    alt="">
                            </div>
                        </div>
                        <div class="book-stand-new mb-4">
                            <div class="books other-books">
                                @foreach ($shelf3 as $category)
                                    <div class="book">
                                        <a href="{{ route('show', $category->slug) }}"><img
                                                src="{{ $category->getFirstMediaUrl('categoryShelfImages') }}"
                                                class="img-fluid shelve-books" alt=""></a>
                                    </div>
                                @endforeach


                            </div>
                            <img src="{{ asset('assets/images/Vector Smart Object copy 5.png') }}" alt=""
                                class="stand">

                        </div>
                    </div>
                </div>
            </div>
            {{-- </div>
            </div> --}}
        </div>
    </div>
@endsection
