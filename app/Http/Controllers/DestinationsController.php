<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Sightseeing;

/**
 * Description of DestinationsController
 *
 * @author mhmudhsham
 */
class DestinationsController extends Controller {

    public function index(Request $request) {
        $destinations_count = City::get()->count();
        $destinations = City::orderBy("id", "desc")->limit(1)->get();
        if ($request->ajax()) {
            $offset = $request->offset;
            $destinations = City::orderBy("id", "desc")->limit(1)->offset($offset)->get();
            $view = view("front.destinations.render", compact('destinations'))->render();
            echo $view;
            die();
        }
        return view("front.destinations.index", compact('destinations', 'destinations_count'));
    }

    public function details($id, $title) {
        $details = City::with("sighseeing")->find($id);
        return view("front.destinations.details", compact('details'));
    }

    public function sightseeing($id, $title) {
        $details = Sightseeing::with("city")->find($id);
        return view("front.destinations.sightseeing", compact('details'));
    }

}
