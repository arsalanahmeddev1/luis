@extends('layouts.app')
@section('content')
    {{-- {{dd($categories)}} --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="card-title">Books</h3>
                                </div>
                                <div class="col-sm-2">
                                    <a href="{{ route('book.create') }}">
                                        <button class="btn btn-primary"> + Add</button>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr>

                                        <th>Book Name</th>

                                        <th>Slug</th>
                                        <th>Category</th>
                                        <th>Shelf</th>
                                        <th>Image</th>
                                        <th>Pages</th>
                                        <th>Chapters</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr>
                                            <td>{{ $book->name }}</td>
                                            <td>{{ $book->slug }}</td>
                                            <td> {{ $book->category->name }}</td>
                                            <td>{{ $book->shelf }}</td>
                                            <td>
                                                <img src="{{ $book->getFirstMediaUrl('bookShelfImages') }} " height="100"
                                                width="75" alt="">
                                        </td>
                                        <td><a href="{{ route('page.index', $book->slug) }}">
                                             Pages
                                        </a></td>
                                        <td><a href="{{ route('chapter.index', $book->slug) }}">
                                            Chapters {{$book->chapters->count()}}
                                       </a></td>
                                            <td><a href="{{ route('book.edit', $book->slug) }}">
                                                    <button class="btn btn-primary"> Edit</button>
                                                </a></td>
                                            <td><a href="{{ route('book.delete', $book->slug) }}">
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
    </section>
@endsection
