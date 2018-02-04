<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Meal;

/**
 * Description of MealsController
 *
 * @author mhmudhsham
 */
class MealsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $meals = Meal::orderBy('id', 'desc')->get();
        return view('admin.meals.index', compact("meals"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.meals.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $meals = new Meal;
        $meals->title_ar = $request->title_ar;
        $meals->title_en = $request->title_en;
        $meals->title_ur = $request->title_ur;

        $meals->save();
        //return redirect()->route('sliders-web');
        return redirect()->route('admin_meals');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $edit = Meal::find($id);
        return view('admin.meals.edit', compact("id", 'edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $meals = Meal::find((int) $id);

        $meals->title_ar = $request->title_ar;
        $meals->title_en = $request->title_en;
        $meals->title_ur = $request->title_ur;
        $meals->save();
        return redirect()->route('admin_meals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $meals = Meal::destroy((int) $id);
        $data = null;
        if ($meals) {
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
