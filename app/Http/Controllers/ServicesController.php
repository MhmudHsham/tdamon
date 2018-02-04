<?php

namespace App\Http\Controllers;

use App\Service;

class ServicesController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $services = Service::all();
        return view("front.services.index", compact('services'));
    }

    public function details($id) {
        $details = Service::find($id);
        return view("front.services.details", compact('details'));
    }

}
