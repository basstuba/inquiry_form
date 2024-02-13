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
        $contact = $request->only('last_name', 'first_name', 'gender', 'email', 'tell_1', 'tell_2', 'tell_3', 'address', 'building', 'category_id', 'datail');
        $tellCombined = $contact['tell_1'] . $contact['tell_2'] . $contact['tell_3'];
        $contact['tell'] = $tellCombined;
        unset($contact['tell_1']);
        unset($contact['tell_2']);
        unset($contact['tell_3']);
        $category = Category::find($contact['category_id']);
        return view('confirm', compact('contact', 'category'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tell', 'address', 'building', 'category_id', 'datail']);
        Contact::create($contact);
        return view('thanks');
    }
}