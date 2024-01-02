<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny',Category::class);
        $categories = Category::with('subcategory')->get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Category::class);
        $categories = Category::all();
        return view('admin.category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {

        $this->authorize('create',Category::class);
        $category = Category::create($request->sanitized());
        if($request->categoryShelfImages){
        $category->addMedia($request->categoryShelfImages)->toMediaCollection('categoryShelfImages');
        }
        if ($request->categoryBgImages) {
            $category->clearMediaCollection('categoryBgImages');
            $category->addMedia($request->categoryBgImages)->toMediaCollection('categoryBgImages');
        }
        
            return redirect()->route('category.index');

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
    public function edit(Category $category)
    {
        $this->authorize('update',Category::class);
        $categories = Category::all();
        return view('admin.category.edit',compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $this->authorize('update',Category::class);
        $category->update($request->sanitized());
        if($request->categoryShelfImages){
        $category->clearMediaCollection('categoryShelfImages');
        $category->addMedia($request->categoryShelfImages)->toMediaCollection('categoryShelfImages');
        }
        if ($request->categoryBgImages) {
            $category->clearMediaCollection('categoryBgImages');
            $category->addMedia($request->categoryBgImages)->toMediaCollection('categoryBgImages');
        }
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $this->authorize('delete',Category::class);
        $category->clearMediaCollection('categoryShelfImages');
        $category->clearMediaCollection('categoryBgImages');
        $category->delete();
        return redirect()->back();
    }
}
