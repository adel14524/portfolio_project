<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function saveContact(Request $request){
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:255'],
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        $contacts = [
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'user_message' => $request['message']
        ];

        Mail::send('email.contact-email', $contacts, function($message) use ($contacts){
            $message->from($contacts['email']);
            $message->subject($contacts['subject']);
            $message->to('nuradilah778@gmail.com');
        });

        return redirect()->to(app('url')->previous()."#contact")->with('success', 'Thank you for contacting me !');
    }
}
