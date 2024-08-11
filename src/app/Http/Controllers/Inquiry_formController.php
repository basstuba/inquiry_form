<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;

class Inquiry_formController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('contact', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();

        $category = Category::find($contact['category_id']);

        return view('confirm', compact('contact', 'category'));
    }

    public function store(Request $request)
    {
        if($request->has('back')) {

            return redirect('/')->withInput();
        }else{
            $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'address', 'building', 'category_id', 'datail']);
            $contact['tell'] = $request->tell_1 . $request->tell_2 . $request->tell_3;

            Contact::create($contact);

            return view('thanks');
        }
    }
}