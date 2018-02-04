<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Subscriber;

/**
 * Description of SubscribersController
 *
 * @author mhmudhsham
 */
class SubscribersController extends Controller {

    /**
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $subscribers = Subscriber::orderBy('id', 'desc')->get();
        return view('admin.subscribers.index', compact("subscribers"));
    }

}
