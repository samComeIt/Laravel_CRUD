<?php

namespace App\Http\Controllers;

use App\PhoneBook;
use App\Image;
use Illuminate\Http\Request;

class PhoneBookController extends Controller
{
    public function index(){
        $examples = PhoneBook::get();
        return view('phonebook.index', compact('examples'));
    }

    public function create(){
        return view('phonebook.create');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            ['name'=>'required',
            'address'=>'required',
            'birthday'=>'required|date',
            'phonenumber'=>'required',]
        );

        // $image_filename = NULL;
        // $image_mime = NULL;
        // $image_original_filename = NULL;

        // if($request->file('image') != NULL) {
        //     $image = $request->file('image');
        //     $extension = $image->getClientOriginalExtension();
        //     Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
        //     $image_filename = $image->getFilename().'.'.$extension;
        //     $image_mime = $image->getClientMimeType();
        //     $image_original_filename = $image->getClientOriginalName();
        // }
        // $image = $request->file('image');
        //     $extension = $image->getClientOriginalExtension();
        //     Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));

// \App\Image::create([
//             'filename' => $image_filename,
//             'mime' => $image_mime,
//             'original_filename' => $image_original_filename,
//         ]);

        $attributes = $request->except('_token');

        $example = new PhoneBook();
        $example->fill($attributes);
        $example->save();

        // $picture = new Image();
        // $picture->mime = $image->getClientMimeType();
        // $picture->original_filename = $image->getClientOriginalName();
        // $picture->filename = $image->getFilename().'.'.$extension;
        // $picture->save();
        $cover = $request->file('bookcover');
    $extension = $cover->getClientOriginalExtension();
    Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

    $book = new Image();
    $book->name = $request->name;
    $book->author = $request->author;
    $book->mime = $cover->getClientMimeType();
    $book->original_filename = $cover->getClientOriginalName();
    $book->filename = $cover->getFilename().'.'.$extension;
    $book->save();

        return redirect()->route('PhoneBook::index')->with('alert', ['type' => 'success', 'message' => '저장완료']);
    }

    public function select($id)
    {
        $example = PhoneBook::find($id);

        return view('phonebook.select', ['example' => $example]);
    }

    public function update(Request $request)
    {
        $example = PhoneBook::find($request->get('exampleId'));
        $example->name = $request->get('name');
        $example->address = $request->get('address');
        $example->birthday = $request->get('birthday');
        $example->phonenumber = $request->get('phonenumber');
        $example->save();

        return redirect()->route('PhoneBook::index')->with('alert', ['type' => 'success', 'message' => '수정완료']);
    }

    public function delete(Request $request)
    {
        $example = PhoneBook::find($request->get('exampleId'));
        $example->delete();

        return redirect()->route('PhoneBook::index')->with('alert', ['type' => 'success', 'message' => '삭제완료']);
    }

}