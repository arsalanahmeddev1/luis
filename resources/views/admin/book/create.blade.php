@extends('layouts.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Book</h3>
                        </div>
                        <form method="POST" action="{{ route('book.create') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    {{-- @if($errors->any())
                                    {{ implode('', $errors->all('<div>:message</div>')) }}
                                @endif --}}
                                    <div class="col-md-8">
                                        <input type="hidden" value="0" name="id">
                                        <div class="form-group">
                                            <label for="Book Name">Book Name</label>
                                            <input type="text" name="name" value="{{ old('name') }}"
                                                class="form-control variant mt-2" id="exampleInputEmail1"
                                                placeholder="Enter Book Name">
                                            <span class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>Shelf Number</label>
                                            <select class="form-control variant1"  name="shelf">
                                                <option value="1"> Shelf 1</option>
                                                <option value="2"> Shelf 2</option>
                                                <option value="3"> Shelf 3</option>3

                                            </select>
                                            <span class="text-danger">
                                                @error('shelf')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>featured Shelf</label>
                                            <select class="form-control variant1"  name="feature_shelf">
                                                <option value="1"> Shelf 1</option>
                                                <option value="2"> Shelf 2</option>
                                                <option value="3"> Shelf 3</option>
                                            </select>
                                            <span class="text-danger">
                                                @error('feature_shelf')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label for="Book Name">Feature Position</label>
                                            <input type="text" name="feature_position" value="{{ old('feature_position') }}"
                                                class="form-control variant mt-2" id="exampleInputEmail1"
                                                placeholder="Enter Book Name">
                                            <span class="text-danger">
                                                @error('feature_position')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>Select</label>
                                            <select class="form-control variant1" placeholder="Category"
                                                value="{{ old('category_id') }}" name="category_id">
                                                <option value="{{ null }}"> Select Category
                                                </option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            <span class="text-danger">
                                                @error('category_id')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="Book Name">Shelf Image</label>
                                            <input type="file" name="bookShelfImages"
                                                class="form-control variant mt-2" id=""
                                                placeholder="Select Image For the Shelf">
                                        </div>
                                        <div class="form-group">
                                            <label for="Book Name">Book Cover Image</label>
                                            <input type="file" name="bookCoverImages"
                                                class="form-control variant mt-2" id=""
                                                placeholder="Book Cover Image">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="Book Name">Number Of Pages</label>
                                                <input type="number" name="pages" value=""
                                                    class="form-control variant mt-2" id="exampleInputpage"
                                                    placeholder="Enter Number of Pages">
                                                <span class="text-danger">
                                                    {{-- @error('name')
                                                        {{ $message }}
                                                    @enderror --}}
                                                </span>
                                            </div>

                                            <div class="form-group col-sm-2">
                                                <button class="btn-success" id="page_numbers">
                                                    Add pages
                                                </button>
                                            </div>
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
                        '" name="pagenumber[]"><label for="Book Name">page title</label><input type="text" name="title[]" required  "class="form-control variant mt-2" id="exampleInputEmail1" placeholder="Enter Page Ttile"><span class="text-danger"></span><textarea name="page_content[]" required  placeholder="Enter Page content" id="" cols="128" rows="10"></textarea><span class="text-danger"></span></div>'
                        );
                }

            });

        });
    </script>
@endsection
