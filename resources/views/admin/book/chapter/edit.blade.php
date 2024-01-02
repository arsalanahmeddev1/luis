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
                        <h3 class="card-title">Edit Chapter {{$chapter->name}} of Book {{$chapter->book->name}}</h3>
                    </div>
                    <form method="POST" action="{{ route('chapter.edit',$chapter->id) }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">



                                    <div class="form-group">
                                        <label for="Book Name">Chapter Name</label>
                                        <input type="text" name="name" value="{{ $chapter->name }}"
                                            class="form-control variant mt-2" id="exampleInputEmail1"
                                            placeholder="Enter Chapter name">
                                        <span class="text-danger">
                                            @error('name')
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
