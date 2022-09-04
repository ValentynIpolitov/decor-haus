<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Contact;
use Redirect;

class ContactPageController extends Controller
{
    public function index()
    {
        return Inertia::render('Contact');
    }
    
    public function store(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required|max:200'
         ]);
      
         //  Store data in database
        Contact::create($request->all());
        
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
        return Redirect::route('contact');
    }
}