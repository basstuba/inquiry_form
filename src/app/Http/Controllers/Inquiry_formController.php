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
        return view('contact');
    }
}