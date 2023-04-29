<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactsController extends Controller
{
    public function create()
    {
        return view('contact-us');
    }

    public function store(Request $request)
    {
        

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect()->route('contacts.create')->with('success', 'Your message has been sent successfully!');
    }
}

?>
