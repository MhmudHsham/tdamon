<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view("front.contact.index");
    }

    public function send(Request $request) {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $add = $contact->save();
        if ($add) {
            $GLOBALS['email'] = "sigmacompany121@gmail.com";
            $name = $request->name;
            $email = $request->email;
            $subject = $request->subject;
            $content = $request->message;
            Mail::send('front.contacts.send', ['name' => $name, 'email' => $email, 'subject' => $subject, 'content' => $content], function ($message) {
                $message->from('sigmacompany121@gmail.com', 'Sigma');
                $message->subject("Tdamon Umrah | Contact us");
                $message->to($GLOBALS['email']);
            });
        }
    }

}
