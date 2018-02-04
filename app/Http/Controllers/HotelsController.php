<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Hotel;
use App\Feature;

/**
 * Description of HotelsController
 *
 * @author mhmudhsham
 */
class HotelsController extends Controller {

    public function index(Request $request) {
        $hotels_count = Hotel::get()->count();
        $hotels = Hotel::orderBy("id", "desc")->limit(1)->get();
        if ($request->ajax()) {
            $offset = $request->offset;
            $hotels = Hotel::orderBy("id", "desc")->limit(1)->offset($offset)->get();
            $view = view("front.hotels.render", compact('hotels'))->render();
            echo $view;
            die();
        }
        return view("front.hotels.index", compact('hotels', 'hotels_count'));
    }

    public function details($id, $title) {
        $details = Hotel::with("country")->with("city")->with("slider")->find($id);
        $features = json_decode($details->features);
        $features_array = Feature::whereIn("id", $features)->get();
        $similar_hotels = Hotel::orderBy("id", "desc")->where("id", "!=", $id)->limit(3)->get();
        return view("front.hotels.details", compact('details', 'features_array', 'similar_hotels'));
    }

}
