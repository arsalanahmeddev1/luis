@extends('layouts.app')
@section('content')
    <div class="artboard-1-banner">
        <div class="container-fluid">
            <div id="canvas">
                <div id="book-zoom" style="visibility: hidden;height: 600px;transform: scale(0.2);">
                    <div class="sj-book"></div>
                    <button class="cross-button">Return Book</button>
                </div>
                <!-- <div id="slider-bar" class="turnjs-slider">
					<div id="slider"></div>
				</div> -->
            </div>
            <div class="row align-items-center text-center">
                <div class="col-md-3 d-lg-flex d-none ">
                    <div class="row aside-sec">
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
                <div class="col-md-6 d-lg-flex d-none  justify-content-center text-center">
                    <!-- <a href="#"> <img src="assets/images/full-size-image1.png" class="center-image1" alt=""></a> -->
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="artboard-book-area new-class position-relative">
                        <a href="#"> <img src="{{asset('assets/images/Group 3.png')}}" class="ani-minor-top-book" alt=""> </a>
                        <div class="old-text">
                            <h2>Minor Prophets</h2>
                        </div>
                        <div class="artboard-book-stand mb-3">
                            <div class="artboard-books">
                                <div class="artboard-book">
                                    <a href="#"><img id="book-16"
                                            src="{{asset('assets/Old-testament/First-shelf/category-4/Habakkuk-removebg-preview.png')}}"
                                            data-id='{{asset('assets/images/old-testament-images/old-testament-book-covers/minor/Habakkuk.png')}}' class="img-fluid sm-book" alt=""></a>
                            </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-17"
                                            src="{{asset('assets/Old-testament/First-shelf/category-4/Haggai-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/minor/Haggai.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-18"
                                            src="{{asset('assets/Old-testament/First-shelf/category-4/Hosea-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/minor/Hosea.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-20"
                                            src="{{asset('assets/Old-testament/First-shelf/category-4/Jonah-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/minor/Jonah\ 1.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-21"
                                            src="{{asset('assets/Old-testament/First-shelf/category-4/malachi-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/minor/Malachi.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                            </div>
                            <img src="{{asset('assets/images/artboard-shelf-1.png')}}" alt="" class="artboard-stand">
                            <div class="lights d-flex justify-content-between">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                            </div>

                        </div>
                        <div class="artboard-book-stand mb-3">
                            <div class="artboard-books">

                                <div class="artboard-book">
                                    <a href="#"><img id="book-22"
                                            src="{{asset('assets/Old-testament/First-shelf/category-4/Micah-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/minor/Micah.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-19"
                                            src="{{asset('assets/Old-testament/First-shelf/category-4/Joel-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/minor/Joel\ Updated\ Design.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-24"
                                            src="{{asset('assets/Old-testament/First-shelf/category-4/Nahum-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/minor/Nahum.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-25"
                                            src="{{asset('assets/Old-testament/First-shelf/category-4/Zephaniah-removebg-preview.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/minor/Zephaniah.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-26"
                                            src="{{asset('assets/Old-testament/First-shelf/category-4/Amos__1.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/amos-cover.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-27"
                                            src="{{asset('assets/Old-testament/First-shelf/category-4/Book-mockup.png')}}"
                                            data-id="{{asset('assets/images/old-testament-images/old-testament-book-covers/minor/Updated-Obadiah.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                            </div>
                            <img src="{{asset('assets/images/artboard-shelf-1.png')}}" alt="" class="artboard-stand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let buttons = document.querySelectorAll('.initBook')
        // console.log(buttons)
        buttons.forEach(el => {
          el.addEventListener('click', function(e) {
            let page = e.target.dataset.page
            changeMetaContent(page, 'filename')
            let pageNumber = e.target.dataset.pagenumber
            // console.log(pageNumber);
            changeMetaContent(pageNumber, 'pageNumber')
            // $('.sm-book').trigger('click')
            initBook(e.target)
          })
        })

        function changeMetaContent(value, metaTagName) {
          let tag = document.querySelector('meta[name="' + metaTagName + '"]')
          tag.content = value
        }
      </script>
@endsection
