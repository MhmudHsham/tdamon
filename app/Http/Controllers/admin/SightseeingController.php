<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sightseeing;
use Validator;

/**
 * Description of CitiesController
 *
 * @author mhmudhsham
 */
class SightseeingController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id) {
        $sightseeing = Sightseeing::where("city_id", $id)->orderBy('id', 'desc')->get();
        return view('admin.sightseeing.index', compact("sightseeing", 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id) {
        return view('admin.sightseeing.add', compact('id'));
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
        $sightseeing = new Sightseeing;
        $sightseeing->title_ar = $request->title_ar;
        $sightseeing->title_en = $request->title_en;
        $sightseeing->title_ur = $request->title_ur;
        $sightseeing->content_ar = $request->content_ar;
        $sightseeing->content_en = $request->content_en;
        $sightseeing->content_ur = $request->content_ur;
        $sightseeing->city_id = $request->city_id;

        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/sightseeing';
            $file->move($path, $filename);
            $sightseeing->image = $path . '/' . $filename;
        }

        $sightseeing->save();
        return redirect(url('/admin/sightseeing/' . $id));
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
        $edit = Sightseeing::find($id);
        return view('admin.sightseeing.edit', compact("id", 'edit'));
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

        $sightseeing = Sightseeing::find((int) $id);

        $sightseeing->title_ar = $request->title_ar;
        $sightseeing->title_en = $request->title_en;
        $sightseeing->title_ur = $request->title_ur;
        $sightseeing->content_ar = $request->content_ar;
        $sightseeing->content_en = $request->content_en;
        $sightseeing->content_ur = $request->content_ur;
        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/sightseeing';
            $file->move($path, $filename);
            $sightseeing->image = $path . '/' . $filename;
        }
        $sightseeing->save();
        return redirect(url('/admin/sightseeing/' . $sightseeing->city_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $sightseeing = Sightseeing::destroy((int) $id);
        $data = null;
        if ($sightseeing) {
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
