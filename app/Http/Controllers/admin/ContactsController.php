<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Contact;

/**
 * Description of ContactsController
 *
 * @author mhmudhsham
 */
class ContactsController extends Controller {

    /**
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $messages = Contact::orderBy('id', 'desc')->get();
        return view('admin.messages.index', compact("messages"));
    }

}
