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
                                    <h3 class="card-title">Categories</h3>
                                </div>
                                <div class="col-sm-2">
                                    <a href="{{ route('category.create') }}">
                                        <button class="btn btn-primary"> + Add</button>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr>

                                        <th>Category Name</th>

                                        <th>Slug</th>
                                        <th>Parent Category</th>
                                        <th>Shelf</th>
                                        <th>Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->name }}</td>
                                            {{-- <td>{{ $category->code }}</td> --}}
                                            <td>{{ $category->slug }}</td>
                                            <td>
                                                @if ($category->parent)
                                                    {{ $category->parent->name }}
                                                @else
                                                    none
                                                @endif

                                            </td>
                                            <td>{{ $category->shelf }}</td>
                                            <td>
                                            <img src="{{ $category->getFirstMediaUrl('categoryShelfImages') }} " height="100"
                                                width="75" alt="">
                                        </td>

                                            <td><a href="{{ route('category.edit', $category->slug) }}">
                                                    <button class="btn btn-primary"> Edit</button>
                                                </a></td>
                                            <td><a href="{{ route('category.delete', $category->slug) }}">
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
