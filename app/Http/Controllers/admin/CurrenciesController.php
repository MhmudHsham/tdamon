<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Currency;

/**
 * Description of CurrenciesController
 *
 * @author mhmudhsham
 */
class CurrenciesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $currencies = Currency::orderBy('id', 'desc')->get();
        return view('admin.currencies.index', compact("currencies"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.currencies.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $currencies = new Currency;
        $currencies->title_ar = $request->title_ar;
        $currencies->title_en = $request->title_en;
        $currencies->title_ur = $request->title_ur;
        $currencies->sign = $request->sign;
        $currencies->price = $request->price;

        $currencies->save();
        //return redirect()->route('sliders-web');
        return redirect()->route('admin_currencies');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $edit = Currency::find($id);
        return view('admin.currencies.edit', compact("id", 'edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $currencies = Currency::find((int) $id);

        $currencies->title_ar = $request->title_ar;
        $currencies->title_en = $request->title_en;
        $currencies->title_ur = $request->title_ur;
        $currencies->sign = $request->sign;
        $currencies->price = $request->price;
        $currencies->save();
        return redirect()->route('admin_currencies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $currencies = Currency::destroy((int) $id);
        $data = null;
        if ($currencies) {
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
