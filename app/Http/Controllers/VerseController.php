<?php

namespace App\Http\Controllers;

use App\Http\Requests\VerseStoreRequest;
use App\Models\Chapter;
use App\Models\Verse;
use Illuminate\Http\Request;

class VerseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Chapter $chapter)
    {
        $verses=$chapter->with('verses')->get();
        return view('admin.book.chapter.verse.index',compact('chapter','verses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Chapter $chapter)
    {

        return view('admin.book.chapter.verse.create',compact('chapter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Chapter $chapter,VerseStoreRequest $request)
    {
        // dd($request->sanitized());
        $chapter->verses()->create($request->sanitized());

        return redirect()->route('verse.index',$chapter->id);
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
    public function edit(Verse $verse)
    {
        return view('admin.book.chapter.verse.edit',compact('verse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VerseStoreRequest $request, Verse $verse)
    {

        $verse->update($request->sanitized());

        return redirect()->route('verse.index',$verse->chapter->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Verse $verse)
    {
        $verse->delete();
        return redirect()->back();
    }
}
