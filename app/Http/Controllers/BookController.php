<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Http\Requests\BookUpdateRequest;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny',Book::class);
        $books = Book::all();
        return view('admin.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Book::class);
        $categories = Category::all();
        return view('admin.book.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $this->authorize('create',Book::class);

        $book = Book::create($request->sanitizedBook());
        if ($request->bookShelfImages) {
        $book->addMedia($request->bookShelfImages)->toMediaCollection('bookShelfImages');
        }

        if ($request->bookCoverImages) {
        $book->addMedia($request->bookCoverImages)->toMediaCollection('bookCoverImages');
        }
        // foreach ($request->sanitizedPages() as $page) {
        //     $pages = $book->pages()->create($page);
        // }
        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $this->authorize('update',Book::class);
        $categories = Category::all();
        return view('admin.book.edit', compact('book', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookUpdateRequest $request, Book $book)
    {

        $this->authorize('update',Book::class);
        $book->update($request->sanitizedBook());

        if ($request->bookShelfImages) {
            $book->addMedia($request->bookShelfImages)->toMediaCollection('bookShelfImages');
        }
        if ($request->bookCoverImages) {
            $book->addMedia($request->bookCoverImages)->toMediaCollection('bookCoverImages');
        }
        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $this->authorize('delete',Book::class);
        $book->delete();
        return redirect()->back();
    }
}
