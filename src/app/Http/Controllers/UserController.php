<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\Contact;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ContactsExport;

class UserController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(UserRequest $request)
    {
        $hashedPassword = Hash::make($request->input('password'));
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $hashedPassword;
        $user->save();
        return view('auth.login');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function admin()
    {
        $contacts = Contact::paginate(7);
        $categories = Category::all();
        return view('admin', compact('contacts', 'categories'));
    }

    public function search(Request $request)
    {
        $contacts = Contact::with('category')->KeywordSearch($request->keyword)->GenderSearch($request->gender)->CategorySearch($request->category_id)->DateSearch($request->updated_at)->paginate(7);
        $categories = Category::all();

        //if($request->has('export'))
        //{
            //return $this->export($request, $contacts);
        //}

        return view('admin', compact('contacts', 'categories'));
    }

    //public function export(Request $request, $contacts)
    //{
        //return Excel::download(new ContactsExport($contacts), 'contacts.xlsx');
    //}

    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('admin');
    }

    public function export()
    {
        return Excel::download(new ContactsExport, 'contacts.xlsx');
    }
}
