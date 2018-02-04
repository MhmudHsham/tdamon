<?php

namespace App\Http\Controllers\admin;

use App\Http\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;
use App\Country;
use App\City;
use App\Room;
use App\Hotel;
use App\Category;
use App\Programservice;
use Validator;
use App\Programslider;

/**
 * Description of ProgramsController
 *
 * @author mhmudhsham
 */
class ProgramsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $programs = Program::with("category")->with("dates")->orderBy('id', 'desc')->get();
        return view('admin.programs.index', compact("programs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $countries = Country::all();
        $services = Programservice::all();
        $hotels = \App\Hotel::all();
        $categories = Category::all();
        return view('admin.programs.add', compact('countries', 'services', 'hotels', 'categories'));
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
        $programs = new Program;
        $programs->title_ar = $request->title_ar;
        $programs->title_en = $request->title_en;
        $programs->title_ur = $request->title_ur;
        $programs->content_ar = $request->content_ar;
        $programs->content_en = $request->content_en;
        $programs->content_ur = $request->content_ur;
        $programs->keywords_ar = $request->keywords_ar;
        $programs->keywords_en = $request->keywords_en;
        $programs->keywords_ur = $request->keywords_ur;
        $programs->description_ar = $request->description_ar;
        $programs->description_en = $request->description_en;
        $programs->description_ur = $request->description_ur;
        $programs->country_id = $request->country_id;
        $programs->stars = $request->stars;
        $programs->category_id = $request->category_id;
        $programs->nights = json_encode($request->nights);
        $programs->city_id = json_encode($request->city_id);
        $programs->hotel_id = json_encode($request->hotel_id);
        $programs->services = json_encode($request->features);


        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/programs';
            $file->move($path, $filename);
            $programs->image = $path . '/' . $filename;
        }
        $programs->save();
        //return redirect()->route('sliders-web');
        return redirect()->route('admin_programs');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $services = Programservice::all();
        $edit = Program::find($id);
        $categories = Category::all();
        $selected_services = $edit->services;
        $cities = City::where("country_id", $edit->country_id)->get();
        $countries = Country::all();
        $city = $edit->city_id;
        $city_id = json_decode($city);
        $nights = json_decode($edit->nights);
        $first_hotel = Hotel::where("city_id", $city_id[0])->get();
        $second_hotel = "";
        if (count($city_id) > 1) {
            $second_hotel = Hotel::where("city_id", $city_id[1])->get();
        }
        return view('admin.programs.edit', compact("nights", "categories", "id", 'edit', 'cities', 'countries', 'services', 'selected_services', 'first_hotel', 'second_hotel'));
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
        $programs = Program::find((int) $id);
        $programs->title_ar = $request->title_ar;
        $programs->title_en = $request->title_en;
        $programs->title_ur = $request->title_ur;
        $programs->content_ar = $request->content_ar;
        $programs->content_en = $request->content_en;
        $programs->content_ur = $request->content_ur;
        $programs->keywords_ar = $request->keywords_ar;
        $programs->keywords_en = $request->keywords_en;
        $programs->keywords_ur = $request->keywords_ur;
        $programs->description_ar = $request->description_ar;
        $programs->description_en = $request->description_en;
        $programs->description_ur = $request->description_ur;
        $programs->country_id = $request->country_id;
        $programs->stars = $request->stars;
        $programs->nights = json_encode($request->nights);
        $programs->category_id = $request->category_id;
        $programs->city_id = json_encode($request->city_id);
        $programs->hotel_id = json_encode($request->hotel_id);
        $programs->services = json_encode($request->features);

        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/programs';
            $file->move($path, $filename);
            $programs->image = $path . '/' . $filename;
        }
        $programs->save();
        return redirect()->route('admin_programs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $programs = Program::destroy((int) $id);
        $data = null;
        if ($programs) {
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

    public function getHotelsByCity($city_id) {
        $hotels = Hotel::where("city_id", $city_id)->get();
        echo json_encode($hotels);
        die();
    }

    public function slider($id) {
        $slider = Programslider::where("program_id", $id)->get();
        return view('admin.programs.slider', compact('slider', 'id'));
    }

    public function store_slider(Request $request) {
        $id = $request->program_id;
        $images = count($request->image);
        foreach (range(0, $images) as $index) {
            $rules['image.' . $index] = 'image|mimes:jpeg,jpg,bmp,png|max:2000';
        }
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        foreach ($request->image as $image) {
            $slider = new Programslider;
            $slider->program_id = $request->program_id;
            if (!empty($image)) {
                $file = $image;
                $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
                $path = 'images/programs/images';
                $file->move($path, $filename);
                $slider->image = $path . '/' . $filename;
            }
            $slider->save();
        }
        return redirect(url('/admin/programs/slider/' . $id));
    }

    public function deleteslider($id) {
        $slider = Programslider::destroy((int) $id);
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

    public function make_your_umrah() {
        $requests = \App\MakeUmrah::orderBy("id", "desc")->get();
        return view("admin.programs.make_your_umrah", compact('requests'));
    }

    public function view_make($id) {
        $details = \App\MakeUmrah::find($id);
        $details->type = ($details->type == 0) ? "حجز فردى" : "حجز مجموعات";
        $services_encoded = json_decode($details->services);
        $services = false;
        if ($services_encoded != null) {
            $services = Programservice::whereIn("id", $services_encoded)->pluck("image", "title_ar");
        }
        $rooms_encoded = json_decode($details->rooms);
        $rooms = Room::whereIn("id", $rooms_encoded)->pluck("title_ar");
        $number_of_rooms_decoded = json_decode($details->number_of_rooms);
        $number_of_adults_decoded = json_decode($details->number_of_adults);
        $number_of_children_decoded = json_decode($details->number_of_children);
        $number_of_infants_decoded = json_decode($details->number_of_infants);
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
        return view("admin.programs.view_make", compact('details', 'services', "rooms_data"));
    }

    public function reservations() {
        $reservations = \App\Programreservation::with("program", "nationality")->get();
        return view("admin.programs.reservations", compact('reservations'));
    }

    public function reserv_details($id) {
        $details = \App\Programreservation::with("nationality")->with("program")->find($id);
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
        return view("admin.programs.reserv_details", compact('details', 'rooms_data'));
    }

}
