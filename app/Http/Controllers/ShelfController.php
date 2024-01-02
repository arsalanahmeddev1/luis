<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Chapter;
use Illuminate\Http\Request;

class ShelfController extends Controller
{
    public function showCategories()
    {
        $shelf1 = Book::where('feature_shelf', 1)
        ->orderBy('updated_at', 'asc')
            ->get();

        $shelf2 = Book::where('feature_shelf', 2)
        ->orderBy('feature_position', 'asc')
            ->get();

        $shelf3 = Book::where('feature_shelf', 3)
        ->orderBy('feature_position', 'asc')
            ->get();
        $categories = Category::whereIn('id', [3, 4])
            ->get();

        $prayer = Category::where('id', '27')->get()->first();
        $featuredBooks = Book::where('featured', 1)->orderBy('updated_at', 'asc')
            ->latest()
            ->get();
        // dd($latestFeaturedBooks);

        return view('user.category', compact('categories',  'prayer','shelf1','shelf2','shelf3'));
    }

    public function toggle(Category $category, Book $book)
    {
        if ($category->subcategory->count() > 0) {

            $shelf1 = $category->subcategory->where('shelf', '1');

            $shelf2 = $category->subcategory->where('shelf', '2');

            $shelf3 = $category->subcategory->where('shelf', '3');

            $featured = Book::whereIn('id', [9, 10, 11])->get();

            return view('user.subcat', compact('category', 'shelf1', 'shelf2', 'shelf3', 'featured'));
        } else {
            $shelf1 = $category->books->where('shelf', '1');
            $shelf2 = $category->books->where('shelf', '2');
            $shelf3 = $category->books->where('shelf', '3');

            $featured = Book::whereIn('id', [9, 10, 11, 15])->get();

            return view('user.book', compact('category', 'shelf1', 'shelf2', 'shelf3', 'featured'));
        }
    }

    public function getBook(Request $request){
        $extractedValue = $request->input('book');

        $book = Book::where('slug', $extractedValue)->with('chapters.verses')->first();
        // $chapters = Chapter::where('book_id',$book->id)->get();
        // dd($chapters);
        if ($book) {

            return response()->json(['book' => $book]);
        } else {
            return response()->json(['error' => 'Book not found']);
        }
    }
}
