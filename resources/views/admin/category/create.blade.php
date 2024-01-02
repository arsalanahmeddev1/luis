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
                        <h3 class="card-title">Create Catgeory</h3>
                    </div>
                    <form method="POST" action="{{ route('category.create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" value="0" name="id">
                                    <div class="form-group">
                                        <label>Select Parent Catgeory</label>
                                        <select class="form-control variant1" placeholder="Parent Category"  name="parent_id">
                                            <option value="{{ null }}"> Select Parent Catgeory
                                            </option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}
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
                                        <label>Shelf Number</label>
                                        <select class="form-control variant1"   name="shelf">
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
                                        <label for="Category Name">Name</label>
                                        <input type="text" name="name" required value="{{old('name')}}"
                                            class="form-control variant mt-2" id="exampleInputEmail1"
                                            placeholder="Category Name">
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    {{-- <input type="file" name="categoryCoverImages"> --}}
                                    <br>
                                    <input type="file" name="categoryShelfImages" >

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
