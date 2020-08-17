<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        $images = Image::all();

        return view('contacts.index', ['contacts' => $contacts, 'images' => $images]);
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phonenumber' => 'required'
        ]);

        $cover = $request->file('contactImage');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename() . '.' . $extension,  File::get($cover));

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phonenumber = $request->phonenumber;
        $contact->save();

        $image = new Image();
        $image->image_id = $contact->contact_id;
        $image->contact_id = $contact->contact_id;
        $image->mime = $cover->getClientMimeType();
        $image->original_filename = $cover->getClientOriginalName();
        $image->filename = $cover->getFilename() . '.' . $extension;
        $image->save();

        return redirect()->route('Contact::index')->with('alert', ['type' => 'success', 'message' => '저장완료']);
    }
}
