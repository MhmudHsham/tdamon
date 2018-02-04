<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Hotel;
use App\Feature;
use App\Room;
use App\Hotelreservation;

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
        $rooms = Room::all();
        $features_array = Feature::whereIn("id", $features)->get();
        $similar_hotels = Hotel::orderBy("id", "desc")->where("id", "!=", $id)->limit(3)->get();
        return view("front.hotels.details", compact('details', 'features_array', 'similar_hotels', 'rooms', 'id'));
    }

    public function book_now(Request $request) {
//        dd($request->all());
        $reservation = new Hotelreservation();
        $reservation->hotel_id = $request->hotel_id;
        $reservation->start_date = $request->start_date;
        $reservation->end_date = $request->end_date;
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->notes = $request->notes;
        $reservation->room_type = json_encode($request->room_type);
        $reservation->number_of_rooms = json_encode($request->number_of_rooms);
        $reservation->adults = json_encode($request->adults);
        $reservation->children = json_encode($request->children);
        $reservation->infants = json_encode($request->infants);
        $result = $reservation->save();
        if ($result) {
            echo 1;
            die();
        } else {
            echo 0;
            die();
        }
    }

}
