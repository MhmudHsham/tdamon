<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;
use Validator;

/**
 * Description of CitiesController
 *
 * @author mhmudhsham
 */
class CitiesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id) {
        $cities = City::where("country_id", $id)->orderBy('id', 'desc')->get();
        return view('admin.cities.index', compact("cities", 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id) {
        return view('admin.cities.add', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id) {
        $rules['image'] = 'image|mimes:jpeg,jpg,bmp,png|max:100000';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $cities = new City;
        $cities->title_ar = $request->title_ar;
        $cities->title_en = $request->title_en;
        $cities->title_ur = $request->title_ur;
        $cities->content_ar = $request->content_ar;
        $cities->content_en = $request->content_en;
        $cities->content_ur = $request->content_ur;
        $cities->keywords_ar = $request->keywords_ar;
        $cities->keywords_en = $request->keywords_en;
        $cities->keywords_ur = $request->keywords_ur;
        $cities->description_ar = $request->description_ar;
        $cities->description_en = $request->description_en;
        $cities->description_ur = $request->description_ur;
        $cities->country_id = $request->country_id;

        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/cities';
            $file->move($path, $filename);
            $cities->image = $path . '/' . $filename;
        }

        $cities->save();
        return redirect(url('/admin/cities/' . $id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $edit = City::find($id);
        return view('admin.cities.edit', compact("id", 'edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $rules['image'] = 'image|mimes:jpeg,jpg,bmp,png|max:100000';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $cities = City::find((int) $id);

        $cities->title_ar = $request->title_ar;
        $cities->title_en = $request->title_en;
        $cities->title_ur = $request->title_ur;
        $cities->content_ar = $request->content_ar;
        $cities->content_en = $request->content_en;
        $cities->content_ur = $request->content_ur;
        $cities->keywords_ar = $request->keywords_ar;
        $cities->keywords_en = $request->keywords_en;
        $cities->keywords_ur = $request->keywords_ur;
        $cities->description_ar = $request->description_ar;
        $cities->description_en = $request->description_en;
        $cities->description_ur = $request->description_ur;
        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/cities';
            $file->move($path, $filename);
            $cities->image = $path . '/' . $filename;
        }
        $cities->save();
        return redirect(url('/admin/cities/' . $cities->country_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $cities = City::destroy((int) $id);
        $data = null;
        if ($cities) {
            $data['type'] = "success";
            $data['message'] = "تم الحذف بنجاح";
        } else {
            $data['type'] = "error";
            $data['message'] = "لم يتم الحذف";
        }
        echo json_encode($data);
        die();
    }

}
