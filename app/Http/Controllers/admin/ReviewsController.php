<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Review;
use Validator;

/**
 * Description of ReviewsController
 *
 * @author mhmudhsham
 */
class ReviewsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $reviews = Review::orderBy('id', 'desc')->get();
        return view('admin.reviews.index', compact("reviews"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.reviews.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $rules['image'] = 'image|mimes:jpeg,jpg,bmp,png|max:100000';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $reviews = new Review;
        $reviews->title = $request->title;
        $reviews->content_ar = $request->content_ar;
        $reviews->content_en = $request->content_en;
        $reviews->content_ur = $request->content_ur;


        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/reviews';
            $file->move($path, $filename);
            $reviews->image = $path . '/' . $filename;
        }
        $reviews->save();
        //return redirect()->route('sliders-web');
        return redirect()->route('admin_reviews');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $edit = Review::find($id);
        return view('admin.reviews.edit', compact("id", 'edit'));
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
        $reviews = Review::find((int) $id);

        $reviews->title = $request->title;
        $reviews->content_ar = $request->content_ar;
        $reviews->content_en = $request->content_en;
        $reviews->content_ur = $request->content_ur;


        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/reviews';
            $file->move($path, $filename);
            $reviews->image = $path . '/' . $filename;
        }
        $reviews->save();
        return redirect()->route('admin_reviews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $reviews = Review::destroy((int) $id);
        $data = null;
        if ($reviews) {
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
