@extends('layouts.app')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Catgeory</h3>
                    </div>
                    <form method="POST" action="{{ route('category.edit',$category->slug) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" value="{{$category->id}}" name="id">
                                        <label>Select Parent Category</label>
                                        <select class="form-control variant1" placeholder="Parent Category"  name="parent_id">
                                            <option value="{{ null }}"> Select Parent Catgeory
                                            </option>
                                            @foreach ($categories as $parent_select)
                                                <option value="{{ $parent_select->id }}" {{$parent_select->id == $category->parent_id? "selected":"" }}>{{ $parent_select->name }}
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
                                            <option value="1" {{$category->shelf == 1? "selected":""}}> Shelf 1</option>
                                            <option value="2" {{$category->shelf == 2? "selected":""}}> Shelf 2</option>
                                            <option value="3" {{$category->shelf == 3? "selected":""}}> Shelf 3</option>

                                        </select>
                                        <span class="text-danger">
                                            @error('shelf')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="Category Name">Name</label>
                                        <input type="text" name="name" required value="{{$category->name}}"
                                            class="form-control variant mt-2" id="exampleInputEmail1"
                                            placeholder="Category Name">
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="Category Name">Add/Update Shelf Image</label>
                                        <input type="file" name="categoryShelfImages"
                                            class="form-control variant mt-2" id="exampleInputEmail1"
                                            placeholder="Category Name">
                                        <span class="text-danger">
                                            @error('categoryShelfImages')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="Category Name">Add/Update Background Image</label>
                                        <input type="file" name="categoryBgImages"
                                            class="form-control variant mt-2" id="exampleInputEmail1"
                                            placeholder="Category Name">
                                        <span class="text-danger">
                                            @error('categoryShelfImages')
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
        </div>
    </div>
</section>
@endsection
