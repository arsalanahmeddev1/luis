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
                    <form method="POST" action="{{ route('verse.edit',$verse->id) }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">



                                    <div class="form-group">
                                        <label for="Verse">Enter Verse</label>
                                        <input type="text" name="verse" value="{{ $verse->verse }}"
                                            class="form-control variant mt-2" id="exampleInputEmail1"
                                            placeholder="Enter Verse for the chapter">
                                        <span class="text-danger">
                                            @error('verse')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="Verse">Enter Verse Page</label>
                                        <input type="number" name="page" value="{{ $verse->page }}"
                                            class="form-control variant mt-2" id="exampleInputEmail1"
                                            placeholder="Enter Verse for the chapter">
                                        <span class="text-danger">
                                            @error('page')
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
