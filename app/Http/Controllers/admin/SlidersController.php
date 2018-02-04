<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use App\Sliderimage;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;

/**
 * Description of SlidersController
 *
 * @author mhmudhsham
 */
class SlidersController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('admin.sliders.index', compact("sliders"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.sliders.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
//        dd($request->all());
        $rules['image'] = 'image|mimes:jpeg,jpg,bmp,png|max:10000';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $slider = new Slider;

        $slider->title_ar = $request->title_ar;
        $slider->title_en = $request->title_en;
        $slider->title_ur = $request->title_ur;
        $slider->url = $request->url;

        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/sliders';
            $file->move($path, $filename);
            $slider->image = $path . '/' . $filename;
            $data = array(
                "l_" => array("width" => 1370, "height" => 646)
            );
            $this->resizing_image($path, $filename, $data);
        }
        $slider->save();
//return redirect()->route('sliders-web');
        return redirect()->route('admin_sliders');
    }

    public function resizing_image($path, $filename, $data) {
        $image = $path . '/' . $filename;
        foreach ($data as $key => $one) {
            $new_name = $path . '/thumb' . '/' . $key . $filename;
            Image::make($image)->resize($one['width'], $one['height'])->save($new_name);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $edit = Slider::find($id);
        return view('admin.sliders.edit', compact("id", 'edit'));
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
        $slider = Slider::find((int) $id);

        $slider->title_ar = $request->title_ar;
        $slider->title_en = $request->title_en;
        $slider->title_ur = $request->title_ur;
        $slider->url = $request->url;

        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/sliders';
            $file->move($path, $filename);
            $slider->image = $path . '/' . $filename;
            $data = array(
                "l_" => array("width" => 1370, "height" => 646)
            );
            $this->resizing_image($path, $filename, $data);
        }
        $slider->save();
        return redirect()->route('admin_sliders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $slider = Slider::destroy((int) $id);
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

    public function slider($id) {
        $slider = Sliderimage::where("slider_id", $id)->get();
        return view('admin.sliders.slider', compact('slider', 'id'));
    }

    public function store_slider(Request $request) {
        $id = $request->slider_id;
        $images = count($request->image);
        foreach (range(0, $images) as $index) {
            $rules['image.' . $index] = 'image|mimes:jpeg,jpg,bmp,png|max:2000';
        }
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        foreach ($request->image as $image) {
            $slider = new Sliderimage;
            $slider->slider_id = $request->slider_id;
            if (!empty($image)) {
                $file = $image;
                $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
                $path = 'images/sliders/images';
                $file->move($path, $filename);
                $slider->image = $path . '/' . $filename;
                $data = array(
                    "l_" => array("width" => 262, "height" => 259),
                    "m_" => array("width" => 166, "height" => 175),
                    "s_" => array("width" => 116, "height" => 115)
                );
                $this->resizing_image($path, $filename, $data);
            }
            $slider->save();
        }
        return redirect(url('/admin/sliders/slider/' . $id));
    }

    public function deleteslider($id) {
        $service = Sliderimage::destroy((int) $id);
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
