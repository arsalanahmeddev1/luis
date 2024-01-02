@extends('layouts.app')
@section('content')
    <div class="artboard-1-banner">
        <div class="container-fluid">
            <div class="row align-items-center text-center">
                <div class="col-md-3 d-lg-flex d-none">
                <div class="row aside-sec ">
                        <div class="col-6 pe-0 pt-4">
                            <img src="{{asset('assets/images/screen1.png')}}" class="side-frame" alt="">
                        </div>
                        <div class="col-6 ps-0 pt-4">
                            <img src="{{asset('assets/images/screen2.png')}}" class="side-frame" alt="">
                        </div>
                        <div class="col-12 pt-2">
                            <img src="{{asset('assets/images/Window.png')}}" class="side-frame" alt="">
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 d-flex justify-content-center text-center">
                    <a href="#"> <img src="./assets/images/full-size-image1.png" class="center-image" alt=""></a>
                </div> -->
                <div class="offset-lg-5 col-lg-4 col-md-12 book-col-old">
                    <div class="book-area-old position-relative old-head">
                      <a href="#"> <img src="{{asset('assets/images/Group 3.png')}}" class="old-top-book" alt=""> </a>
                      <div class="old-text">
                        <h1>Old Testament</h1>
                      </div>
                      <div class="book-stand-old">
                        <div class="books other-books">
                          <div class="book">
                            <a href="{{route('category.penta')}}"><img src="{{asset('assets/images/01-old.png')}}" class="img-fluid"
                                alt=""></a>
                          </div>
                          <div class="book">
                            <a href="{{route('category.deutero')}}"><img src="{{asset('assets/images/02-old.png')}}" class="img-fluid"
                                alt=""></a>
                          </div>
                          <div class="book">
                            <a href="{{route('category.tora')}}"><img src="{{asset('assets/images/03-old.png')}}" class="img-fluid"
                                alt=""></a>
                          </div>
                          <div class="book">
                            <a href="{{route('category.former','15')}}"><img src="{{asset('assets/images/04-old.png')}}" class="img-fluid"
                                alt=""></a>
                          </div>
                           <div class="book">
                            <a href="{{route('category.minor','16')}}"><img src="{{asset('assets/images/05-old.png')}}" class="img-fluid"
                                alt=""></a>
                          </div>
                          <div class="book">
                            <a href="{{route('category.writing','17')}}"><img src="{{asset('assets/images/06-old.png')}}" class="img-fluid"
                                alt=""></a>
                          </div>

                        </div>
                        <img src="{{asset('assets/images/Vector Smart Object copy 5-2.png')}}" alt="" class="stand">
                        <div class="lights-old d-flex justify-content-between">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                            </div>
                      </div>
                      <div class="book-stand-old">
                        <div class="books">
                          <div class="book">
                            <a href="{{route('user.bible','22')}}"><img src="{{asset('assets/images/About_the_Bible.png')}}" class="img-fluid"
                                alt=""></a>
                          </div>
                          <div class="book">
                            <a href="{{route('user.bible','23')}}"><img src="{{asset('assets/images/Heros_of_the_Old_Testament-removebg-preview.png')}}" class="img-fluid"
                                alt=""></a>
                          </div>
                          <div class="book">
                            <a href="{{route('user.bible','24')}}"><img src="{{asset('assets/images/About_the_Prophets-removebg-preview.png')}}" class="img-fluid"
                                alt=""></a>
                          </div>
                        </div>
                        <img src="{{asset('assets/images/Vector Smart Object copy 5-1.png')}}" alt="" class="stand">

                      </div>
                    </div>

                  </div>
            </div>
        </div>
    </div>
    @endsection

