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
                    <form method="POST" action="{{ route('page.edit',$page->id) }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">


                                    <div class="form-group">
                                        <label for="Page Number">Page Number</label>
                                        <input type="number" name="pagenumber" value="{{ $page->pagenumber }}"
                                            class="form-control variant mt-2" id="exampleInputEmail1"
                                            placeholder="Enter Page Number">
                                        <span class="text-danger">
                                            @error('pagenumber')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="Book Name">Page Title</label>
                                        <input type="text" name="title" value="{{ $page->title }}"
                                            class="form-control variant mt-2" id="exampleInputEmail1"
                                            placeholder="Enter Page Title">
                                        <span class="text-danger">
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="Book Name">Page Content</label>
                                            <textarea name="page_content" value="{{ $page->content }}" placeholder="Enter Page content" id=""
                                                cols="128" rows="10">{{ $page->content }}</textarea>
                                            <span class="text-danger">
                                                @error('page_content')
                                                {{ $message }}
                                            @enderror
                                            </span>
                                        </div>


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
