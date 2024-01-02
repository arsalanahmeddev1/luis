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
                            <h3 class="card-title">Edit Book</h3>
                        </div>
                        <form method="POST" action="{{ route('book.edit', $book->slug) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- @if ($errors->any())
                                        {{ implode('', $errors->all('<div>:message</div>')) }}
                                       @endif --}}
                                        <div class="form-group">
                                            <input type="hidden" value="{{ $book->id }}" name="id">
                                            <label>Select</label>
                                            <select class="form-control variant1" placeholder="Category" name="category_id">
                                                <option value="{{ null }}"> Select Parent Catgeory
                                                </option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ $category->id == $book->category_id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            <span class="text-danger">
                                                @error('parent_id')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="Category Name">Name</label>
                                            <input type="text" name="name" required value="{{ $book->name }}"
                                                class="form-control variant mt-2" id="exampleInputEmail1"
                                                placeholder="Book Name">
                                            <span class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>Shelf Number</label>
                                            <select class="form-control variant1" name="shelf">
                                                <option value="1" {{ $book->shelf == 1 ? 'selected' : '' }}> Shelf 1
                                                </option>
                                                <option value="2" {{ $book->shelf == 2 ? 'selected' : '' }}> Shelf 2
                                                </option>
                                                <option value="3" {{ $book->shelf == 3 ? 'selected' : '' }}> Shelf 3
                                                </option>

                                            </select>
                                            <span class="text-danger">
                                                @error('shelf')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label>Shelf Number</label>
                                            <select class="form-control variant1" name="feature_shelf">
                                                <option value="1" {{ $book->feature_shelf == 1 ? 'selected' : '' }}> Shelf 1
                                                </option>
                                                <option value="2" {{ $book->feature_shelf == 2 ? 'selected' : '' }}> Shelf 2
                                                </option>
                                                <option value="3" {{ $book->feature_shelf == 3 ? 'selected' : '' }}> Shelf 3
                                                </option>

                                            </select>
                                            <span class="text-danger">
                                                @error('feature_shelf')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label for="Position">feature Position</label>
                                            <input type="text" name="feature_position" required value="{{ $book->feature_position }}"
                                                class="form-control variant mt-2" id="exampleInputEmail1"
                                                placeholder="Feature Position">
                                            <span class="text-danger">
                                                @error('feature_position')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label for="Book Name">Shelf Image</label>
                                            <input type="file" name="bookShelfImages" class="form-control variant mt-2"
                                                id="" placeholder="Select Image For the Shelf">

                                        </div>
                                        <div class="form-group">
                                            <label for="Book Name">Book Cover Image</label>
                                            <input type="file" name="bookCoverImages" class="form-control variant mt-2"
                                                id="" placeholder="Book Cover Image">
                                        </div>
                                        @error('bookCoverImages')
                                            {{ $message }}
                                        @enderror
                                        <div class="form-group">
                                            <label for="Featured">Featured</label>
                                            <input type="checkbox" name="featured" value="1">
                                            <span class="text-danger">
                                                @error('featured')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="Summary">Summary</label>
                                            {{-- <input type="text" name="summary" required value="{{ $book->summary }}"
                                                class="form-control variant mt-2" id="exampleInputEmail1"
                                                placeholder="Book Name"> --}}
                                                <textarea name="summary" id="exampleInputEmail1" class="form-control variant mt-2" cols="30" rows="10"></textarea>
                                            <span class="text-danger">
                                                @error('summary')
                                                    {{ $message }}
                                                @enderror
                                            </span>
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
@endsection
