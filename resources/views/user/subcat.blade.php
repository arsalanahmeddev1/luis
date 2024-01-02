@extends('layouts.app')
@section('content')
    {{-- {{dd($shelf1->count())}} --}}

    <div class="banner old-testament-banner position-relative">
        <div class="container-fluid">
            <div class="row align-items-center text-center justify-content-between">
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
                <!-- <div class="col-lg-6 d-lg-flex d-none justify-content-center text-center">
                    <a href="#"> <img src="assets/images/full-size-image1.png" class="center-image1" alt=""></a>
                </div> -->
                <div class="col-lg-5">
                    <div class="center-frame">
                        <div class="row px-3">
                            <div class="col-lg-6 col-md-6 ">
                                <div>
                                    <img src="{{ asset('assets/images/Rectangle 4 copy 2.png') }}" alt="" width="100%">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div>
                                    <img src="{{ asset('assets/images/Rectangle 4 copy 2.png') }}" alt="" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                        <div>
                            <img src="{{ asset('assets/images/Old-Testamentvd2.png') }}" alt="" width="100%" style="margin-top: 30px">
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="bible-book-area position-relative">
                    <div class="sm-image">
                        <a href="{{ route('index') }}"> <img src="{{ asset('assets/images/Group 3.png') }}" class="top-book" alt="">
                        </a>
                    </div>
                        {{-- <a href="#"> <img src="{{ asset('assets/images/Group 3.png') }}" class="bible-top-book"
                                alt=""> </a> --}}
                        <div class="old-text">
                            @if ($category->parent)
                                <h1>{{ $category->parent->name }}</h1>
                                <h2>{{ $category->name }}</h2>
                            @else
                                <h1>{{ $category->name }}</h1>
                            @endif
                        </div>
                        <div class="artboard-book-stand">
                            <div class="artboard-books">
                                @foreach ($shelf1 as $category)
                                <div class="book">
                                    <a href="{{ route('show', $category->slug) }}"><img
                                            src="{{ $category->getFirstMediaUrl('categoryShelfImages') }}"
                                            class="img-fluid shelve-books" alt=""></a>
                                </div>
                            @endforeach

                            </div>
                            <img src="{{ asset('assets/images/Vector Smart Object copy 5-1.png') }}" alt=""
                                class="artboard-stand">


                                <div class="lights d-flex justify-content-between">
                                    <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                        alt="">
                                    <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                        alt="">
                                    <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                        alt="">
                                </div>
                                <div class="artboard-books artboard-books2">

                                    @foreach ($featured as $book)
                                    <div class="book">
                                        <a href="{{ route('show', [$book->category->slug, $book->slug]) }}"><img
                                                src="{{ $book->getFirstMediaUrl('bookShelfImages') }}"
                                                class="img-fluid shelve-books" alt=""></a>
                                    </div>
                                @endforeach

                                </div>


                                <img src="{{ asset('assets/images/Vector Smart Object copy 5-2.png') }}" alt=""
                                    class="artboard-stand">


                            @if ($shelf3->count() > 0)
                                <div class="lights d-flex justify-content-between">
                                    <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                        alt="">
                                    <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                        alt="">
                                    <img src="{{ asset('assets/images/Light-shelf-of-books.png') }}" class="lights-1"
                                        alt="">
                                </div>
                                <div class="artboard-books artboard-books2">

                                    @foreach ($shelf3 as $category)
                                    <div class="book">
                                        <a href="{{ route('show', $category->slug) }}"><img
                                                src="{{ $category->getFirstMediaUrl('categoryShelfImages') }}"
                                                class="img-fluid shelve-books" alt=""></a>
                                    </div>
                                @endforeach
                                </div>

                                <img src="{{ asset('assets/images/Vector Smart Object copy 5.png') }}" alt=""
                                    class="artboard-stand">
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
