@extends('layouts.app')
@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="card-title">{{$book->name}}</h3>
                                </div>
                                <div class="col-sm-2">
                                    <ul class="list-group list-group-horizontal">
                                        <li class="list-group-item"> <a href="{{ route('chapter.create',$book->slug) }}">
                                            <button class="btn btn-primary"> + Add</button>
                                        </a></li>
                                        <li class="list-group-item"><a href="{{ route('book.index') }}">
                                            <button class="btn btn-primary"> Back</button>
                                        </a></li>

                                      </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>Chapter Name</th>
                                        <th>Verses</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($book->chapters as $chapter)
                                        <tr>
                                            <td>{{ $chapter->name }}</td>
                                            <td><a href="{{ route('verse.index', $chapter->id) }}">
                                                Verses {{$chapter->verses->count()}}
                                           </a></td>
                                            <td><a href="{{ route('chapter.edit', $chapter->id) }}">
                                                    <button class="btn btn-primary"> Edit</button>
                                                </a></td>
                                            <td><a href="{{ route('chapter.delete', $chapter->id) }}">
                                                    <button class="btn btn-danger"> Delete</button>
                                                </a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
        <!-- HTML: Container for dynamic buttons -->
{{-- <div id="button-container">
    <button class="dynamic-button book1">Book 1</button>
    <button class="dynamic-button book2">Book 2</button>
    <!-- Add more dynamic buttons as needed -->
</div>

    </section>
    <script>
        $(document).ready(function() {
    // Define a variable to store the class name
    let selectedClassName = '';

    // Attach a click event to the parent container and use event delegation
    $('#button-container').on('click', '.dynamic-button', function() {
        // Get the class name of the clicked button
        selectedClassName = $(this).attr('class');

        // Display the selected class name (you can remove this line in your actual code)
        console.log('Selected Class Name:', selectedClassName);
    });
});

    </script> --}}
@endsection
