@extends('layouts.app')

@section('content')
    <div class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row banner-wrapper">
                        <div class="col-lg-3 col-md-12">
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
                        </div>
                        <div class="offset-lg-5 col-lg-4 col-md-12">
                            <div class="book-area position-relative main-shelf">
                                <a href="{{ route('index') }}"> <img src="{{ asset('assets/images/Group 3.png') }}"
                                        class="top-book" alt=""> </a>
                                <div class="book-stand">
                                    <div class="books">
                                        <div class="book">
                                            <a href="{{ route('user.bible', '22') }}"><img
                                                    src="{{ asset('assets/images/About_the_Bible.png') }}" class="img-fluid"
                                                    alt=""></a>
                                        </div>
                                        <div class="book">
                                            <a href="{{ route('user.bible', '23') }}"><img
                                                    src="{{ asset('assets/images/Heros_of_the_Old_Testament-removebg-preview.png') }}"
                                                    class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="book">
                                            <a href="{{ route('old-testament') }}"><img
                                                    src="{{ asset('assets/images/The_Old_Testament-removebg-preview.png') }}"
                                                    class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="book">
                                            <a href="{{ route('user.bible', '24') }}"><img
                                                    src="{{ asset('assets/images/About_the_Prophets-removebg-preview.png') }}"
                                                    class="img-fluid" alt=""></a>
                                        </div>
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
                                <div class="book-stand">
                                    <div class="books other-books">
                                        <div class="book">
                                            <a href="{{ route('new-testament') }}"><img
                                                    src="{{ asset('assets/images/s-2-01-removebg-preview.png') }}"
                                                    class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="book">
                                            <a href="{{ route('user.bible', '30') }}"><img
                                                    src="{{ asset('assets/images/01-removebg-preview.png') }}"
                                                    class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="book">
                                            <a href="{{ route('user.bible', '29') }}"><img
                                                    src="{{ asset('assets/images/s2-06-removebg-preview.png') }}"
                                                    class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="book">
                                            <a href="{{ route('user.bible', '33') }}"><img
                                                    src="{{ asset('assets/images/04-removebg-preview.png') }}"
                                                    class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="book">
                                            <a href="{{ route('user.bible', '35') }}"><img
                                                    src="{{ asset('assets/images/06-removebg-preview.png') }}"
                                                    class="img-fluid" alt=""></a>
                                        </div>



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
                                <div class="book-stand">
                                    <div class="books other-books">
                                        <div class="book">
                                            <a href="{{ route('user.bible', '25') }}"><img
                                                    src="{{ asset('assets/images/s2-02-removebg-preview.png') }}"
                                                    class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="book">
                                            <a href="{{ route('user.bible', '26') }}"><img
                                                    src="{{ asset('assets/images/s2-03-removebg-preview.png') }}"
                                                    class="img-fluid" alt=""></a>
                                        </div>

                                        <div class="book">
                                            <a href="{{ route('user.bible', '28') }}"><img
                                                    src="{{ asset('assets/images/s2-05-removebg-preview.png') }}"
                                                    class="img-fluid" alt=""></a>
                                        </div>

                                        <div class="book">
                                            <a href="{{ route('user.bible', '31') }}"><img
                                                    src="{{ asset('assets/images/02-removebg-preview.png') }}"
                                                    class="img-fluid" alt=""></a>
                                        </div>

                                        <div class="book">
                                            <a href="{{ route('user.bible', '32') }}"><img
                                                    src="{{ asset('assets/images/03-removebg-preview.png') }}"
                                                    class="img-fluid" alt=""></a>
                                        </div>


                                        <div class="book">
                                            <a href="{{ route('user.bible', '27') }}"><img
                                                    src="{{ asset('assets/images/s2-04-removebg-preview.png') }}"
                                                    class="img-fluid" alt=""></a>
                                        </div>


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
    </div>
@endsection
