<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;
use App\Country;
use App\Hotel;
use App\Hotel_Room;
use App\Feature;
use App\Hotelslider;
use App\Reservation;
use App\Room;
use App\Meal;
use Validator;

/**
 * Description of HotelsController
 *
 * @author mhmudhsham
 */
class HotelsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $hotels = Hotel::with("rooms")->orderBy('id', 'desc')->get();
        return view('admin.hotels.index', compact("hotels"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $countries = Country::all();
        $features = Feature::all();
        return view('admin.hotels.add', compact('countries', 'features'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
//        dd($request->all());
        $rules['image'] = 'image|mimes:jpeg,jpg,bmp,png|max:100000';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $hotels = new Hotel;
        $hotels->title_ar = $request->title_ar;
        $hotels->title_en = $request->title_en;
        $hotels->title_ur = $request->title_ur;
        $hotels->content_ar = $request->content_ar;
        $hotels->content_en = $request->content_en;
        $hotels->content_ur = $request->content_ur;
        $hotels->keywords_ar = $request->keywords_ar;
        $hotels->keywords_en = $request->keywords_en;
        $hotels->keywords_ur = $request->keywords_ur;
        $hotels->description_ar = $request->description_ar;
        $hotels->description_en = $request->description_en;
        $hotels->description_ur = $request->description_ur;
        $hotels->stars = $request->stars;
        $hotels->country_id = $request->country_id;
        $hotels->city_id = $request->city_id;
        $hotels->distance_from_the_haram = $request->distance_from_the_haram;
        $hotels->features = json_encode($request->features);

        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/hotels';
            $file->move($path, $filename);
            $hotels->image = $path . '/' . $filename;
        }
        $hotels->save();
        //return redirect()->route('sliders-web');
        return redirect()->route('admin_hotels');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $features = Feature::all();
        $edit = Hotel::find($id);
        $selected_features = $edit->features;
        $cities = City::where("country_id", $edit->country_id)->get();
        $countries = Country::all();
        return view('admin.hotels.edit', compact("id", 'edit', 'cities', 'countries', 'features', 'selected_features'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
//        dd($request->all());
        $rules['image'] = 'image|mimes:jpeg,jpg,bmp,png|max:100000';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $hotels = Hotel::find((int) $id);

        $hotels->title_ar = $request->title_ar;
        $hotels->title_en = $request->title_en;
        $hotels->title_ur = $request->title_ur;
        $hotels->content_ar = $request->content_ar;
        $hotels->content_en = $request->content_en;
        $hotels->content_ur = $request->content_ur;
        $hotels->keywords_ar = $request->keywords_ar;
        $hotels->keywords_en = $request->keywords_en;
        $hotels->keywords_ur = $request->keywords_ur;
        $hotels->description_ar = $request->description_ar;
        $hotels->description_en = $request->description_en;
        $hotels->description_ur = $request->description_ur;
        $hotels->country_id = $request->country_id;
        $hotels->stars = $request->stars;
        $hotels->city_id = $request->city_id;
        $hotels->distance_from_the_haram = $request->distance_from_the_haram;
        $hotels->features = json_encode($request->features);

        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/hotels';
            $file->move($path, $filename);
            $hotels->image = $path . '/' . $filename;
        }
        $hotels->save();
        return redirect()->route('admin_hotels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $hotels = Hotel::destroy((int) $id);
        $data = null;
        if ($hotels) {
            $data['type'] = "success";
            $data['message'] = "تم الحذف بنجاح";
        } else {
            $data['type'] = "error";
            $data['message'] = "لم يتم الحذف";
        }
        echo json_encode($data);
        die();
    }

    public function getCitiesByCountry($country_id) {
        $cities = City::where("country_id", $country_id)->get();
        echo json_encode($cities);
        die();
    }

    public function slider($id) {
        $slider = Hotelslider::where("hotel_id", $id)->get();
        return view('admin.hotels.slider', compact('slider', 'id'));
    }

    public function store_slider(Request $request) {
        $id = $request->hotel_id;
        $images = count($request->image);
        foreach (range(0, $images) as $index) {
            $rules['image.' . $index] = 'image|mimes:jpeg,jpg,bmp,png|max:2000';
        }
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        foreach ($request->image as $image) {
            $slider = new Hotelslider;
            $slider->hotel_id = $request->hotel_id;
            if (!empty($image)) {
                $file = $image;
                $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
                $path = 'images/hotels/images';
                $file->move($path, $filename);
                $slider->image = $path . '/' . $filename;
            }
            $slider->save();
        }
        return redirect(url('/admin/hotels/slider/' . $id));
    }

    public function deleteslider($id) {
        $slider = Hotelslider::destroy((int) $id);
        $data = null;
        if ($slider) {
            $data['type'] = "success";
            $data['message'] = "تم الحذف بنجاح";
        } else {
            $data['type'] = "error";
            $data['message'] = "لم يتم الحذف";
        }
        echo json_encode($data);
        die();
    }

    public function rooms($hotel_id) {
        $rooms_of_hotel = Hotel_Room::where("hotel_id", $hotel_id)->get();
        return view("admin.hotels.rooms", compact('rooms_of_hotel', 'hotel_id'));
    }

    public function add_room($hotel_id) {
        $rooms = Room::all();
        $meals = Meal::all();
        $currencies = \App\Currency::all();
        return view("admin.hotels.add_room", compact('hotel_id', 'rooms', 'meals', 'currencies'));
    }

    public function store_room(Request $request, $hotel_id) {
        $hotel_room = new Hotel_Room;
        $hotel_room->room_id = $request->room_id;
        $hotel_room->meal_id = $request->meal_id;
        $hotel_room->currency_id = $request->currency_id;
        $hotel_room->hotel_id = $hotel_id;
        $hotel_room->start_date = $request->start_date;
        $hotel_room->end_date = $request->end_date;
        $hotel_room->price = $request->price;
        $hotel_room->save();
        return redirect(url('/admin/hotels/rooms/' . $hotel_id));
    }

    public function edit_room_price($id) {
        $rooms = Room::all();
        $edit = Hotel_Room::find($id);
        $meals = Meal::all();
        $currencies = \App\Currency::all();
        $hotel_id = $edit->hotel_id;
        return view("admin.hotels.edit_room", compact('id', 'rooms', 'edit', 'hotel_id', 'meals', 'currencies'));
    }

    public function update_room(Request $request, $id) {
        $hotel_room = Hotel_Room::find((int) $id);
        $hotel_room->room_id = $request->room_id;
        $hotel_room->meal_id = $request->meal_id;
        $hotel_room->currency_id = $request->currency_id;
        $hotel_room->start_date = $request->start_date;
        $hotel_room->end_date = $request->end_date;
        $hotel_room->price = $request->price;
        $hotel_room->save();
        return redirect(url('/admin/hotels/rooms/' . $request->hotel_id));
    }

    public function reservations() {
        $reservations = \App\Hotelreservation::with("hotel")->get();
        return view("admin.hotels.reservations", compact('reservations'));
    }

    public function reserv_details($id) {
        $details = \App\Hotelreservation::with("hotel")->find($id);
        $rooms_encoded = json_decode($details->room_type);
        $rooms = Room::whereIn("id", $rooms_encoded)->pluck("title_ar");
        $number_of_rooms_decoded = json_decode($details->number_of_rooms);
        $number_of_adults_decoded = json_decode($details->adults);
        $number_of_children_decoded = json_decode($details->children);
        $number_of_infants_decoded = json_decode($details->infants);
        $rooms_data = null;
        foreach ($rooms as $key => $one) {
            $data = array(
                "room" => $rooms[$key],
                "number" => $number_of_rooms_decoded[$key],
                "adults" => $number_of_adults_decoded[$key],
                "children" => $number_of_children_decoded[$key],
                "infants" => $number_of_infants_decoded[$key]
            );
            $rooms_data[] = $data;
        }
        return view("admin.hotels.reserv_details", compact('details', 'rooms_data'));
    }

}
