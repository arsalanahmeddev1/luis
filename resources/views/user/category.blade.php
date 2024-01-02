@extends('layouts.app')

@section('content')
    @php
        // dd($prayer);
        $i = 0;
        $prayerbook = $prayer->books->get(0);
        $qoutebook = $prayer->books->get(1);
        $saintbook = $prayer->books->get(2);
        // dd($prayer, $categories, $featuredBooks);
    @endphp
    <div class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row banner-wrapper">
                        <div class="col-lg-3 col-md-12">
                            <div class="text-wrapper">
                                <div class="text-area">
                                    <!-- <img src="/luice-olivare/assets/top-view-wooden-frame-with-copy-space copy 2.png" class="img-fluid" alt=""> -->
                                    <img src="{{ asset('assets/images/frame-Icon.png') }}" class="img-fluid pb-2 image"
                                        alt="">
                                    <h3>PRAYER OF THE DAY</h3>
                                    <p>We can't help everyone,
                                        but everyone can help
                                        someone</p>
                                    <h5>AESOP</h5>
                                    <a href="{{ route('show', [$prayer->slug, $prayerbook->slug]) }}" class="btn">Read
                                        More</a>
                                </div>
                                <div class="text-area">
                                    <!-- <img src="/luice-olivare/assets/top-view-wooden-frame-with-copy-space copy 2.png" class="img-fluid" alt=""> -->
                                    <h3>QUOTE OF THE DAY</h3>
                                    <a href="{{ route('show', [$prayer->slug, $qoutebook]) }}" class="btn mt-2 mb-3">Read
                                        More</a>
                                    <h3>SAINT OF THE DAY</h3>
                                    <a href="{{ route('show', [$prayer->slug, $saintbook]) }}" class="btn mt-2 mb-3">Read
                                        More</a>
                                    <img src="{{ asset('assets/images/Vector Smart Object copy.png') }}"
                                        class="frame-bottom" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="center-frame">
                                <div class="row px-3">
                                    <div class="col-lg-6 col-md-6 ">
                                        <div>
                                            <img src="{{ asset('assets/images/Rectangle 4 copy 2.png') }}" alt=""
                                                width="100%">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div>
                                            <img src="{{ asset('assets/images/Rectangle 4 copy 2.png') }}" alt=""
                                                width="100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <img src="{{ asset('assets/images/inner-frame.png') }}" alt=""
                                            width="100%" style="margin-top: 30px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="book-area position-relative main-shelf">
                                <a href="{{ route('index') }}"> <img src="{{ asset('assets/images/Group 3.png') }}"
                                        class="top-book" alt=""> </a>

                                <div class="books">
                                    @foreach ($shelf1 as $key => $book)
                                            <div class="book">
                                                <a href="{{ route('show', [$book->category->slug, $book->slug]) }}">
                                                    <img src="{{ $book->getFirstMediaUrl('bookShelfImages') }}"
                                                        class="img-fluid" alt="">
                                                </a>
                                            </div>
                                   @endforeach


                                   @foreach ($categories as $key => $category)
                                                <div class="book">
                                                    <a href="{{ route('show', $category->slug) }}">
                                                        <img src="{{ $category->getFirstMediaUrl('categoryShelfImages') }}"
                                                            class="img-fluid" alt="">
                                                    </a>
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


                                <div class="books other-books">



                                    @foreach ($shelf2 as $key => $book)
                                    <div class="book">
                                        <a href="{{ route('show', [$book->category->slug, $book->slug]) }}">
                                            <img src="{{ $book->getFirstMediaUrl('bookShelfImages') }}"
                                                class="img-fluid" alt="">
                                        </a>
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


                                <div class="books other-books">

                                    @foreach ($shelf3 as $key => $book)
                                    <div class="book">
                                        <a href="{{ route('show', [$book->category->slug, $book->slug]) }}">
                                            <img src="{{ $book->getFirstMediaUrl('bookShelfImages') }}"
                                                class="img-fluid" alt="">
                                        </a>
                                    </div>
                           @endforeach

                                </div>
                                <img src="{{ asset('assets/images/Vector Smart Object copy 5.png') }}" alt=""
                                    class="stand">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
