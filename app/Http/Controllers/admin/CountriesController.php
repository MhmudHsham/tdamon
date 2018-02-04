<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;

/**
 * Description of CountriesController
 *
 * @author mhmudhsham
 */
class CountriesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $countries = Country::orderBy('id', 'desc')->get();
        return view('admin.countries.index', compact("countries"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.countries.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $countries = new Country;

        $countries->title_ar = $request->title_ar;
        $countries->title_en = $request->title_en;
        $countries->title_ur = $request->title_ur;

        $countries->save();
        //return redirect()->route('sliders-web');
        return redirect()->route('admin_countries');
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
        $edit = Country::find($id);
        return view('admin.countries.edit', compact("id", 'edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $countries = Country::find((int) $id);

        $countries->title_ar = $request->title_ar;
        $countries->title_en = $request->title_en;
        $countries->title_ur = $request->title_ur;
        $countries->save();
        return redirect()->route('admin_countries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $countries = Country::destroy((int) $id);
        $data = null;
        if ($countries) {
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
