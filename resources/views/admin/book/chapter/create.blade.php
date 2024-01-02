@extends('layouts.app')

@section('content')
{{-- {{dd($book)}} --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Chapter For Book {{$book->name}}</h3>
                        </div>
                        <form method="POST" action="{{ route('chapter.create', $book->slug) }}">
                            @csrf
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-8">


                                        <div class="form-group">
                                            <label for="Book Name">Chapter Name</label>
                                            <input type="text" name="name" value="{{ old('name') }}"
                                                class="form-control variant mt-2" id="exampleInputEmail1"
                                                placeholder="Enter Chapter Name">
                                            <span class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>





                                        <div class="pages_section row">
                                            {{-- <div style="margin-bottom:40px;"></div>
                                            <h4>Page#</h4>
                                            <div class="form-group">
                                                <label for="Book Name">page title</label>
                                                <input type="text" name="page_title[]" required
                                                    value="{{ old('page_title[]') }}" class="form-control variant mt-2"
                                                    id="exampleInputEmail1" placeholder="Enter Page Ttile">
                                                <span class="text-danger">
                                                    @error('page_title[]')
                                                        {{ $message }}
                                                    @enderror
                                                </span>


                                                <textarea name="page_content" value="{{ old('page_content[]') }} placeholder="Enter Page content" id=""
                                                    cols="128" rows="10"></textarea>
                                                <span class="text-danger">
                                                    @error('page_content[]')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div> --}}
                                        </div>
                                    </div>


                                </div>

                                <div class="card-footer">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
                <!-- /.card -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>

    <script>
        $(document).ready(function() {
            $(document).on('click', '#page_numbers', function(e) {
                e.preventDefault();
                let pages = $('#exampleInputpage').val();
                // let fields = '<div style="margin-bottom:40px;">'+
                // '</div><h4>Page#'+pages+
                // '</h4>'+'<div class="form-group"><label for="Book Name">page title</label><input type="text" name="page_title[]" required  }}"class="form-control variant mt-2" id="exampleInputEmail1" placeholder="Enter Page Ttile"><span class="text-danger"></span><textarea name="page_content"  placeholder="Enter Page content" id="" cols="128" rows="10"></textarea><span class="text-danger"></span></div>';


                for (i = 1; i <= pages; i++) {
                    $('.pages_section').append('<div style="margin-bottom:40px;">' +
                        '</div><h4>Page#' + i +
                        '</h4>' + '<div class="form-group"><input type="hidden" value="' + i +
                        '" name="pagenumber[]"><label for="Book Name">page title</label><input type="text" name="title[]" required  "class="form-control variant mt-2" id="exampleInputEmail1" placeholder="Enter Page Ttile"><span class="text-danger"></span><textarea name="content[]" required  placeholder="Enter Page content" id="" cols="128" rows="10"></textarea><span class="text-danger"></span></div>'
                        );
                }

            });

        });
    </script>
@endsection
