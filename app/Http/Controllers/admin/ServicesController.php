<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use Validator;

/**
 * Description of CategoriesController
 *
 * @author mhmudhsham
 */
class ServicesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $services = Service::orderBy('id', 'desc')->get();
        return view('admin.services.index', compact("services"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.services.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $rules['image'] = 'image|mimes:jpeg,jpg,bmp,png|max:10000';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $service = new Service;

        $service->title_ar = $request->title_ar;
        $service->title_en = $request->title_en;
        $service->title_ur = $request->title_ur;
        $service->content_ar = $request->content_ar;
        $service->content_en = $request->content_en;
        $service->content_ur = $request->content_ur;

        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/services';
            $file->move($path, $filename);
            $service->image = $path . '/' . $filename;
        }
        $service->save();
        return redirect()->route('admin_services');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $edit = Service::find($id);
        return view('admin.services.edit', compact("id", 'edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $rules['image'] = 'image|mimes:jpeg,jpg,bmp,png|max:10000';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $service = Service::find((int) $id);

        $service->title_ar = $request->title_ar;
        $service->title_en = $request->title_en;
        $service->title_ur = $request->title_ur;
        $service->content_ar = $request->content_ar;
        $service->content_en = $request->content_en;
        $service->content_ur = $request->content_ur;

        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/services';
            $file->move($path, $filename);
            $service->image = $path . '/' . $filename;
        }
        $service->save();
        return redirect()->route('admin_services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $service = Service::destroy((int) $id);
        $data = null;
        if ($service) {
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
