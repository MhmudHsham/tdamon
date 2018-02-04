<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use Validator;

/**
 * Description of NewsController
 *
 * @author mhmudhsham
 */
class NewsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $news = News::orderBy('id', 'desc')->get();
        return view('admin.news.index', compact("news"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.news.add');
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
        $news = new News;
        $news->title_ar = $request->title_ar;
        $news->title_en = $request->title_en;
        $news->title_ur = $request->title_ur;
        $news->content_ar = $request->content_ar;
        $news->content_en = $request->content_en;
        $news->content_ur = $request->content_ur;
        $news->keywords_ar = $request->keywords_ar;
        $news->keywords_en = $request->keywords_en;
        $news->keywords_ur = $request->keywords_ur;
        $news->description_ar = $request->description_ar;
        $news->description_en = $request->description_en;
        $news->description_ur = $request->description_ur;

        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/news';
            $file->move($path, $filename);
            $news->image = $path . '/' . $filename;
        }

        $news->save();
        return redirect(url('/admin/news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $edit = News::find($id);
        return view('admin.news.edit', compact("id", 'edit'));
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

        $news = News::find((int) $id);

        $news->title_ar = $request->title_ar;
        $news->title_en = $request->title_en;
        $news->title_ur = $request->title_ur;
        $news->content_ar = $request->content_ar;
        $news->content_en = $request->content_en;
        $news->content_ur = $request->content_ur;
        $news->keywords_ar = $request->keywords_ar;
        $news->keywords_en = $request->keywords_en;
        $news->keywords_ur = $request->keywords_ur;
        $news->description_ar = $request->description_ar;
        $news->description_en = $request->description_en;
        $news->description_ur = $request->description_ur;
        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/news';
            $file->move($path, $filename);
            $news->image = $path . '/' . $filename;
        }
        $news->save();
        return redirect(url('/admin/news/' . $news->country_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $news = News::destroy((int) $id);
        $data = null;
        if ($news) {
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
