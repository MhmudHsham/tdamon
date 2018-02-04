<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Nationality;

/**
 * Description of NationalitiesController
 *
 * @author mhmudhsham
 */
class NationalitiesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $nationalities = Nationality::orderBy('id', 'desc')->get();
        return view('admin.nationalities.index', compact("nationalities"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.nationalities.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $nationalities = new Nationality;
        $nationalities->title_ar = $request->title_ar;
        $nationalities->title_en = $request->title_en;
        $nationalities->title_ur = $request->title_ur;

        $nationalities->save();
        //return redirect()->route('sliders-web');
        return redirect()->route('admin_nationalities');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $edit = Nationality::find($id);
        return view('admin.nationalities.edit', compact("id", 'edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $nationalities = Nationality::find((int) $id);

        $nationalities->title_ar = $request->title_ar;
        $nationalities->title_en = $request->title_en;
        $nationalities->title_ur = $request->title_ur;
        $nationalities->save();
        return redirect()->route('admin_nationalities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $nationalities = Nationality::destroy((int) $id);
        $data = null;
        if ($nationalities) {
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
