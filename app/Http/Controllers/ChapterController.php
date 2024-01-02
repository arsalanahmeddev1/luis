<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChapterStoreRequest;

use App\Models\Book;
use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Book $book)
    {
        $chapters=$book->with('chapters')->get();
        return view('admin.book.chapter.index',compact('book','chapters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Book $book)
    {

        return view('admin.book.chapter.create',compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Book $book,ChapterStoreRequest $request)
    {
        // dd($request->sanitized());
        $book->chapters()->create($request->sanitized());

        return redirect()->route('chapter.index',$book->slug);
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
    public function edit(Chapter $chapter)
    {
        return view('admin.book.chapter.edit',compact('chapter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChapterStoreRequest $request, Chapter $chapter)
    {

        $chapter->update($request->sanitized());

        return redirect()->route('chapter.index',$chapter->book->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chapter $chapter)
    {
        $chapter->delete();
        return redirect()->back();
    }
}
