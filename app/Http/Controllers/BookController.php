<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index(){
        $books = Book::all();

        return view('books.index', ['books' => $books]);
    }

    public function create(){

        return view('books.create');
    }

    public function store(Request $request)
    {
    request()->validate([
        'name' => 'required',
        'author' => 'required',
    ]);
    $cover = $request->file('bookcover');
    $extension = $cover->getClientOriginalExtension();
    Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

    $book = new Book();
    $book->name = $request->name;
    $book->author = $request->author;
    $book->mime = $cover->getClientMimeType();
    $book->original_filename = $cover->getClientOriginalName();
    $book->filename = $cover->getFilename().'.'.$extension;
    $book->save();

    return redirect()->route('Book::index')->with('alert', ['type' => 'success', 'message' => '저장완료']);
    }

    public function select($id)
    {
        $bookId = Book::find($id);

        return view('books.select', ['bookId' => $bookId]);
    }

    public function update(Request $request)
    {
        $book = Book::find($request->get('bookId'));

        $cover = $request->file('bookcover');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        
        $book->name = $request->get('name');
        $book->author = $request->get('author');
        $book->mime = $cover->getClientMimeType();
        $book->original_filename = $cover->getClientOriginalName();
        $book->filename = $cover->getFilename().'.'.$extension;
        $book->save();

        return redirect()->route('Book::index')->with('alert', ['type' => 'success', 'message' => '수정완료']);
    }

    public function destroy(Request $request)
    {
        
        $bookId = Book::find($request->get('bookId'));
        $bookId->delete();

        return redirect()->route('Book::index')->with('alert', ['type' =>'success', 'message'=> '삭제완료']);

    }
}