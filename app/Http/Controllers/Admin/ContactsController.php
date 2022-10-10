<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Redirect;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('id', 'desc')->get();
        // return dd($contacts);
        return Inertia::render('Admin/Contacts', [
            'contacts' => $contacts,
        ]);
    }
}