<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function confirm(ContactRequest $request)
    {
        $data = $request->all();
        return view('contact.confirm', compact('data'));
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->all());
        return redirect('/thanks');
    }

    public function admin()
    {
        $contacts = Contact::paginate(7);
        return view('admin.index', compact('contacts'));
    }
}
