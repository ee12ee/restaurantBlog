<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('front.pages.contact');
    }

    public function contact(ContactRequest $request)
    {
        Contact::query()->create($request->all());
        return redirect()->route('home');
    }
}
