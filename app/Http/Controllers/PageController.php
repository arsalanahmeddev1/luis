<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageStoreRequest;
use App\Models\Book;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Book $book)
    {
        $pages=$book->with('pages')->get();
        return view('admin.book.page.index',compact('book','pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Book $book)
    {

        return view('admin.book.page.create',compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Book $book,PageStoreRequest $request)
    {
        // dd($request->sanitized());
        $book->pages()->create($request->sanitized());

        return redirect()->route('page.index',$book->slug);
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
    public function edit(Page $page)
    {
        return view('admin.book.page.edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageStoreRequest $request, Page $page)
    {

        $page->update($request->sanitized());

        return redirect()->route('page.index',$page->book->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->back();
    }
}
