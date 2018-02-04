<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Programdate;
use App\Nationality;
use App\Currency;

/**
 * Description of ProgramdatesController
 *
 * @author mhmudhsham
 */
class ProgramdatesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = 0) {
        if ($id <= 0) {
            return redirect()->route('admin_programs');
        }
        $program_title = \App\Program::find($id);
        $programdates = Programdate::where("program_id", $id)->orderBy('id', 'desc')->get();
        return view('admin.programdates.index', compact("programdates", "program_title", "id"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($program_id) {
        $nationalities = Nationality::all();
        $currencies = Currency::all();
        return view('admin.programdates.add', compact('program_id', 'nationalities', 'currencies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $programdates = new Programdate;
        $programdates->program_id = $request->program_id;
        $programdates->currency_id = $request->currency_id;
        $programdates->nationality_id = $request->nationality_id;
        $programdates->price = $request->price;
        $programdates->start_date = $request->start_date;

        $programdates->save();
        return redirect(url('/admin/programdates/index/' . $request->program_id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $nationalities = Nationality::all();
        $currencies = Currency::all();
        $edit = Programdate::find($id);
        return view('admin.programdates.edit', compact("id", 'edit', 'nationalities', 'currencies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $programdates = Programdate::find((int) $id);
        $programdates->currency_id = $request->currency_id;
        $programdates->nationality_id = $request->nationality_id;
        $programdates->price = $request->price;
        $programdates->start_date = $request->start_date;
        $programdates->save();
        return redirect(url('/admin/programdates/index/' . $programdates->program_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $programdates = Programdate::destroy((int) $id);
        $data = null;
        if ($programdates) {
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
