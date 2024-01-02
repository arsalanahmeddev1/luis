@extends('layouts.app')
@push('styles')
    <script type="text/javascript" src="{{ asset('assets/book/extras/jquery-ui-1.8.20.custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/book/extras/jquery.mousewheel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/book/extras/modernizr.2.5.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/book/lib/hash.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/book/lib/turn.html4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/book/lib/turn.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/book/css/steve-jobs-1.css') }}" />
@endpush

@php
    $bg_book = $category->getFirstMediaUrl('categoryBgImages');
@endphp

@section('content')

    <style>
        .sj-book .even,
        .sj-book .even {
            background-image: url({{ $bg_book }});
            background-position: right top;
            background-repeat: repeat-y;
        }
        .sj-book .odd,
        .sj-book .odd {
            background-image: url({{ $bg_book }});
            background-position: left top;
            background-repeat: repeat-y;
        }
    </style>

    <div class="banner old-testament-banner position-relative">
        <div class="container-fluid">
            <div id="canvas">
                <div id="book-zoom" style="visibility: hidden;height: 600px;transform: scale(0.2);">
                    <div class="sj-book">
                    </div>
                    <button class="cross-button">Return Book</button>
                </div>
            </div>
            <div class="row align-items-center text-center">
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
                                @if ($category->id == 4)
                                    <img src="{{ asset('assets/images/New-Testament2.png') }}" alt=""
                                        width="100%" style="margin-top: 30px">
                                @elseif ($category->parent_id == 3)
                                    <img src="{{ asset('assets/images/Old-Testamentvd2.png') }}" alt=""
                                        width="100%" style="margin-top: 30px">
                                @else
                                    <img src="{{ asset('assets/images/inner-frame.png') }}" alt="" width="100%"
                                        style="margin-top: 30px">
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="bible-book-area new-bible-book-area position-relative">
                        <div class="sm-image">
                            <a href="{{ route('index') }}"> <img src="{{ asset('assets/images/Group 3.png') }}"
                                    class="top-book" alt="">
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
                                @foreach ($shelf1 as $book)
                                    <div class="artboard-book book">
                                        <a href="#"><img id="book-{{ $book->slug }}"
                                                src="{{ $book->getFirstMediaUrl('bookShelfImages') }}"
                                                data-id="{{ $book->getFirstMediaUrl('bookCoverImages') }}"
                                                class="img-fluid sm-book shelve-books" alt=""></a>
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
                                @if ($category->id == 5 || $category->id == 6 || $category->id == 8 || $category->id == 9)
                                    @foreach ($featured as $book)
                                        <div class="book">
                                            <a href="{{ route('show', [$book->category->slug, $book->slug]) }}"><img
                                                    src="{{ $book->getFirstMediaUrl('bookShelfImages') }}"
                                                    class="img-fluid shelve-books" alt=""></a>
                                        </div>
                                    @endforeach
                                @else
                                    @foreach ($shelf2 as $book)
                                        <div class="artboard-book book">
                                            <a href="#"><img id="book-{{ $book->slug }}"
                                                    src="{{ $book->getFirstMediaUrl('bookShelfImages') }}"
                                                    data-id="{{ $book->getFirstMediaUrl('bookCoverImages') }}"
                                                    class="img-fluid sm-book shelve-books" alt=""></a>
                                        </div>
                                    @endforeach
                                @endif

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

                                    @foreach ($shelf3 as $book)
                                        <div class="artboard-book book">
                                            <a href="#"><img id="book-{{ $book->slug }}"
                                                    src="{{ $book->getFirstMediaUrl('bookShelfImages') }}"
                                                    data-id="{{ $book->getFirstMediaUrl('bookCoverImages') }}"
                                                    class="img-fluid sm-book shelve-books" alt=""></a>
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





@push('script')
    <script type="text/javascript">
        $(document).ready(function() {

            $(document).on('click', '#book-button', function() {

                console.log('Clicked');
            });

        });
    </script>

    <script type="text/javascript">
        //custom code 1/11/23.
        // var bookBtn = document.getElementByID('#book-button')
        // console.lo
        var imgId = null;

        function setImgId(id) {
            imgId = id;
        }

        function getImgId() {
            return imgId;
        }
        book = null;
        //custom code ends
        $(document).ready(function() {
            $('.sm-book').on('click', function() {
                var imgId = $(this).attr('id');
                setImgId(imgId);

                var match = imgId.match(/book-(.+)/);

                if (match) {
                    var extractedValue = match[1];


                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getBook') }}",
                        data: {
                            book: extractedValue,
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(data) {

                            chapters = data.book.chapters;
                            slug = data.book.slug;
                            var page = 1;
                            var summarypage = `<div class="book-${slug}target${page+ 2} d-none box">
                                <h3>${data.book.name}</h3>
                                <p> ${data.book.summary}  </p>
                                </div>`;
                            $('.container-fluid').append(summarypage);
                            page += 1;
                            for (var key in chapters) {

                                if (chapters.hasOwnProperty(key)) {
                                    var verse = chapters[key].verses;
                                    var get = [];

                                    for (var i = 0; i < verse.length; i++) {

                                        if (verse.hasOwnProperty(i)) {
                                            if (i == 0 || i % 7 == 0) {
                                                page++;
                                                var first =
                                                    `<div class="book-${slug}target${page+ 1} d-none box">
                                                        <div class="target${page+ 1} book-inner-wrap"></div>
                                                        </div>`;
                                                $('.container-fluid').append(first);
                                            }
                                            if (i == 0) {
                                                var head = `<h3>${chapters[key].name}</h3>`;
                                                $(`.target${page+ 1}`)
                                                    .append(head);
                                            }
                                            var verseData =
                                                `<h6> ${i+1})  ${verse[i].verse}</h6>`;
                                            $(`.target${page+ 1}`)
                                                .append(verseData);

                                        }
                                    }
                                }
                            }

                        },
                        error: function(error) {
                            console.error(error);
                        }
                    });
                }

            });

            $('#book-button').on('click', function() {

                console.log('Clicked');
            });

        });

        // let pageButton = document.querySelectorAll('.page-button')
        // pageButton.forEach(btn => {
        //     btn.addEventListener('click', () => {
        //         btn.style.color = 'red'
        //         console.log(btn);
        //     })
        // })
        // console.log(pageButton);
        function loadApp(pagenumber = undefined) {
            var flipbook = $('.sj-book');

            // Check if the CSS was already loaded

            if (flipbook.width() == 0 || flipbook.height() == 0) {
                setTimeout(loadApp, 10);
                return;
            }
            // console.log(flipbook);
            // Hash.on('^page\/([0-9]*)$', {
            //     yep: function(path, parts) {

            //         var page = parts[1];
            //         // alert(page)
            //         if (page !== undefined) {
            //             if ($('.sj-book').turn('is')) {
            //                 setTimeout(function() {
            //                     $('.sj-book').turn('page', 2);
            //                 }, 500);
            //             }
            //         }
            //     },
            //     nop: function(path) {
            //         if ($('.sj-book').turn('is'))
            //             $('.sj-book').turn('page', pagenumber === undefined ? 1 : pagenumber);
            //     }
            // });

            // Arrows

            $(document).keydown(function(e) {

                var previous = 37,
                    next = 39;

                switch (e.keyCode) {
                    case previous:

                        $('.sj-book').turn('previous');

                        break;
                    case next:

                        $('.sj-book').turn('next');

                        break;
                }

            });



            // Flipbook

            flipbook.bind(($.isTouch) ? 'touchend' : 'click', zoomHandle);

            flipbook.turn({
                elevation: 50,
                acceleration: !isChrome(),

                autoCenter: true,
                gradients: true,
                duration: 1000,
                pages: 110,
                when: {
                    turning: function(e, page, view) {

                        var book = $(this),
                            currentPage = book.turn('page'),
                            pages = book.turn('pages');

                        if (currentPage > 3 && currentPage < pages - 3) {

                            if (page == 1) {
                                book.turn('page', 2).turn('stop').turn('page', page);
                                e.preventDefault();
                                return;
                            } else if (page == pages) {
                                book.turn('page', pages - 1).turn('stop').turn('page', page);
                                e.preventDefault();
                                return;
                            }
                        } else if (page > 3 && page < pages - 3) {
                            if (currentPage == 1) {
                                book.turn('page', 2).turn('stop').turn('page', page);
                                e.preventDefault();
                                return;
                            } else if (currentPage == pages) {
                                book.turn('page', pages - 1).turn('stop').turn('page', page);
                                e.preventDefault();
                                return;
                            }
                        }

                        updateDepth(book, page);

                        if (page >= 2)
                            $('.sj-book .p2').addClass('fixed');
                        else
                            $('.sj-book .p2').removeClass('fixed');

                        if (page < book.turn('pages'))
                            $('.sj-book .p111').addClass('fixed');
                        else
                            $('.sj-book .p111').removeClass('fixed');

                        // Hash.go('page/' + page).update();

                    },

                    // turned: function(e, page, view) {

                    //     var book = $(this);

                    //     if (page == 2 || page == 3) {
                    //         book.turn('peel', 'br');
                    //     }

                    //     updateDepth(book);

                    //     $('#slider').slider('value', getViewNumber(book, page));

                    //     book.turn('center');

                    // },

                    turned: function(e, page, view) {
                        // var imgId = null;
                        // // custome code
                        // $(document).ready(function() {
                        //     // Add a click event handler to all images with class 'sm-book'
                        //     $('.sm-book').on('click', function() {
                        //         // Get the id attribute of the clicked image
                        //         imgId = $(this).attr('id');

                        //         // Log or use the imgId as needed

                        //     });
                        // });



                        let [targetArea1, targetArea2] = view
                        let targetFirst = 3
                        targetArea1 += 2
                        targetArea2 += 2
                        let min = function minus(a, b) {
                            return a - b
                        }
                        // console.log(min(targetArea1, 1))
                        let preview1 = $(`.${getImgId()}target` + min(targetArea1, 1)).html();
                        let preview2 = $(`.${getImgId()}target` + min(targetArea2, 1)).html();
                        let preview3 = $(`.${getImgId()}target` + min(targetArea1, 2)).html();
                        let preview4 = $(`.${getImgId()}target` + min(targetArea2, 2)).html();
                        let preview5 = $(`.${getImgId()}target` + min(targetArea1, 3)).html();
                        let preview6 = $(`.${getImgId()}target` + min(targetArea2, 3)).html();
                        let preview7 = $(`.${getImgId()}target` + min(targetArea1, 4)).html();
                        let view1 = $(`.${getImgId()}target` + targetArea1).html();
                        let view2 = $(`.${getImgId()}target` + targetArea2).html();
                        let first = $(`.${getImgId()}target3`).html();
                        totalPg = $(".back-side").data("pages")
                        let last = $(`.${getImgId()}target` + totalPg).html();

                        function updatePg() {
                            let prevous1 = $('.sj-book .p' + min(targetArea1, 1))
                            let prevous2 = $('.sj-book .p' + min(targetArea2, 1))
                            let prevous3 = $('.sj-book .p' + min(targetArea1, 2))
                            let prevous4 = $('.sj-book .p' + min(targetArea2, 2))
                            let prevous5 = $('.sj-book .p' + min(targetArea1, 3))
                            let prevous6 = $('.sj-book .p' + min(targetArea2, 3))
                            let prevous7 = $('.sj-book .p' + min(targetArea1, 4))
                            let pg1 = $('.sj-book .p' + targetArea1)
                            let pg2 = $('.sj-book .p' + targetArea2)
                            if (!prevous1.hasClass('seconde') && !prevous1.hasClass('last')) {
                                prevous1.html(preview1);
                                // console.log(prevous1)
                            }
                            if (!prevous2.hasClass('seconde') && !prevous2.hasClass('last')) {
                                prevous2.html(preview2);
                                // console.log(prevous2)
                            }
                            if (!prevous3.hasClass('seconde') && !prevous3.hasClass('last')) {
                                prevous3.html(preview3);
                                // console.log(prevous3)
                            }
                            if (!prevous4.hasClass('seconde') && !prevous4.hasClass('last')) {
                                prevous4.html(preview4);
                                // console.log(prevous4)
                            }
                            if (!prevous5.hasClass('seconde') && !prevous5.hasClass('last')) {
                                prevous5.html(preview5);
                                // console.log(prevous5)
                            }
                            if (!prevous6.hasClass('seconde') && !prevous6.hasClass('last')) {
                                prevous6.html(preview6);
                                // console.log(prevous6)
                            }
                            if (!prevous7.hasClass('seconde') && !prevous7.hasClass('last')) {
                                prevous7.html(preview7);
                                // console.log(prevous6)
                            }
                            if (!pg1.hasClass('seconde') && !pg1.hasClass('last')) {
                                pg1.html(view1);
                            }
                            if (!pg2.hasClass('seconde') && !pg2.hasClass('last')) {
                                pg2.html(view2);
                            }
                        }
                        // console.log(view1)
                        // console.log(targetArea1)
                        // console.log(view2)
                        // console.log(targetArea2)
                        updatePg()


                        // console.log("turned")

                        // custome code end


                        var book = $(this);

                        if (page == 2 || page == 3) {
                            book.turn('peel', 'br');
                        }

                        updateDepth(book);

                        $('#slider').slider('value', getViewNumber(book, page));

                        book.turn('center');

                    },

                    start: function(e, pageObj) {

                        moveBar(true);

                    },

                    end: function(e, pageObj) {

                        var book = $(this);

                        updateDepth(book);

                        setTimeout(function() {

                            $('#slider').slider('value', getViewNumber(book));

                        }, 1);

                        moveBar(false);

                    },

                    missing: function(e, pages) {

                        for (var i = 0; i < 10; i++) {
                            addPage(pages[i], $(this));
                        }

                    }
                }
            });

            function updateFlipbookDimensions() {
                var flipbook = $('.sj-book');
                var windowWidth = $(window).width();

                if (windowWidth <= 991) {
                    // Set the width and height for smaller screens
                    flipbook.turn('size', 650, 500);
                }
                if (windowWidth <= 480) {
                    // Set the width and height for smaller screens
                    flipbook.turn('size', 350, 210);
                }
                // if (windowWidth <= 648) {
                //     flipbook.turn('size', 450, 300)
                // }
            }

            // Initial call to set dimensions based on window width
            updateFlipbookDimensions();

            // Listen for window resize events
            $(window).resize(function() {
                updateFlipbookDimensions();
            });

            $('#slider').slider('option', 'max', numberOfViews(flipbook));

            flipbook.addClass('animated');

            // Show canvas

            $('#canvas').css({
                visibility: ''
            });
        }

        // Hide canvas

        // $('#canvas').css({visibility: 'hidden'});

        // Load turn.js


        $(document).ready(function() {
            // yepnope({
            // 	test: Modernizr.csstransforms,
            // 	yep: ['../../assets/book/lib/turn.min.js'],
            // 	nope: ['../../assets/book/lib/turn.html4.min.js', 'css/jquery.ui.html4.css', 'css/steve-jobs-html4.css'],
            // 	both: ['js/steve-jobs.js', 'css/jquery.ui.css', 'css/steve-jobs.css'],
            // 	complete: loadApp
            // });

        });



        // $('#album').turn({ gradients: true, acceleration: true });
    </script>
    <script>
        (function($) {
            $.getStylesheet = function(href) {
                var $d = $.Deferred();
                var $link = $('<link/>', {
                    rel: 'stylesheet',
                    type: 'text/css',
                    href: href
                }).appendTo('head');
                $d.resolve($link);
                return $d.promise();
            };
        })(jQuery);

        var smBooks = document.querySelectorAll(".sm-book");

        var album = document.querySelector(".sj-book");
        var crossButton = document.querySelector(".cross-button");
        crossButton.style.visibility = "hidden";
        var btn = document.querySelector(".btn");
        let mainBody = document.querySelector('body');
        let mainOverlay = document.querySelector('.body-overlay')
        let overlay = document.createElement('div')

        album.style.visibility = "hidden";
        Modernizr.csstransforms;
        $(document).on("click", "[class*='sm-book']", function(e) {
            e.preventDefault();
            initBook(e.target)

        })

        function initBook(el) {
            thumbnail = $(el);
            console.log(el.id);
            const dataId = el.getAttribute('data-id');
            const hasExtension = dataId.includes('.');
            const imageUrl = hasExtension ? dataId : `${dataId}.jpg`;

            let bookElem = $(".sj-book").html(`<div depth="5" style="--bg-image: url(${imageUrl});" class="hard" data-id="${dataId}">
    <div class="side"></div>
</div>
<div depth="5" class="hard front-side">
    <div class="depth"></div>
</div>
<div class="own-size"></div>
<div class="own-size even"></div>
<div class="hard fixed back-side p111">
    <div class="depth"></div>
</div>
<div class="hard p112"></div>`);
            // console.log(bookElem[0]);
            // console.log(bookElem);
            let canvas = document.querySelectorAll('#canvas');
            canvas.forEach(btn => {
                btn.style.display = 'none'
            })
            let styleSheet = $(el).data('styles');
            if (styleSheet == undefined) {

                styleSheet = [
                    "{{ asset('assets/book/css/steve-jobs-1.css') }}"
                ]
            } else {
                styleSheet = styleSheet.split(',');
            }
            // console.log(styleSheet, 123);
            let styles = ""
            styleSheet.forEach((el, index) => {
                if (index > 0) {

                    styles += `, $.getStylesheet(styleSheet[${index}])`
                } else {
                    styles += `$.getStylesheet(styleSheet[${index}])`
                }
            })
            // console.log(styles)
            let bookScript = "{{ asset('assets/book/js/steve-jobs.js') }}"
            // console.log(styleSheet[1])
            // console.log(eval(styles))

            $.when(eval(styles), $.getScript(bookScript)).then(function() {
                // setTimeout(function() {
                // console.log(el.dataset.pagenumber)
                let pagenumber = el.dataset.pagenumber
                // console.log(pagenumber)
                loadApp(pagenumber);
                mainBody.classList.add('body-overlay-wrap')
                overlay.classList.add('body-overlay')
                mainBody.append(overlay)
                // console.log(overlay);
                let pageWrappers = document.querySelectorAll('#book-zoom');
                pageWrappers.forEach(pageWrapper => {
                    pageWrapper.style.transform = 'scale(0.5)';
                    // console.log(pageWrapper);
                })
                canvas.forEach(btn => {
                    btn.style.display = 'block'
                })
                // },1000)
            }).then(function() {
                scaleFrom = thumbnail.height() * 1.1 / $('#book-zoom').height(),
                    setTimeout(function() {
                        $('#book-zoom').transform('scale(0.9)');
                        console.log('scale(1)');
                        // if (window.innerWidth <= 767) {
                        //     $('#book-zoom').css('transform', 'scale(0.3)');
                        // } else {
                        //     $('#book-zoom').css('transform', 'scale(0.9)');
                        // }
                        $('.sj-book').turn('page', 2);
                    }, 500);
            });

            var newBook = $(el);
            if (album.style.visibility === "hidden") {
                album.style.visibility = "visible";
                newBook.css('visibility', 'hidden');
                $('#canvas').zIndex('11');
                crossButton.style.visibility = "visible";
            }
        }

        // Add a click event listener to the cross button
        crossButton.addEventListener("click", function(e) {
            e.preventDefault();
            $('.sj-book').turn('page', 1);
            $('#book-zoom').transform('scale(0.2)').css("visibility", "hidden");
            $('#canvas').zIndex('1');
            $(".box").remove();
            overlay.classList.remove('body-overlay')
            setTimeout(function() {
                $(".sj-book").css("visibility", "hidden");
            }, 500);
            let newBook = $("[class*='sm-book']");
            crossButton.style.visibility = "hidden";
            if (window.innerWidth <= 767) {
                setTimeout(function() {
                    if ($('.sj-book').turn('is')) {
                        $('.sj-book').turn('destroy');
                        $(window).unbind('keydown');
                    }
                    newBook.css('visibility', 'visible');
                });
            } else {
                setTimeout(function() {
                    if ($('.sj-book').turn('is')) {
                        $('.sj-book').turn('destroy');
                        $(window).unbind('keydown');
                    }
                    newBook.css('visibility', 'visible');
                }, 500);
            }
            //     // if (windowWidth <= 480) {
            //     // Set the width and height for smaller screens
            //     setTimeout(function() {
            //         if ($('.sj-book').turn('is')) {
            //             $('.sj-book').turn('destroy');
            //             $(window).unbind('keydown');
            //         }
            //         newBook.css('visibility', 'visible');
            //     }, 500);
            // }

            // visiblefunc('.login-btn')
            // visiblefunc('.register-btn')
            // btnVisiblefunc('.register-btn')
        });


        function visiblefunc(element) {
            let btn = document.querySelector(element)
            if (btn.style.visibility = 'hidden') {
                btn.style.visibility = 'visible'
            }
        }
        $(document).ready(function() {
            $(getBookID()).trigger('click')

            function getBookID() {
                let bookID = window.location.pathname.split('/')[3]
                // let bookID = window.location.search.split('/')[1]
                return `#book-${bookID}`

            }
        })
    </script>
@endpush
