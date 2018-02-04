<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Agent;
use App\Country;
use Validator;

/**
 * Description of AgentsController
 *
 * @author mhmudhsham
 */
class AgentsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $agents = Agent::orderBy('id', 'desc')->get();
        return view('admin.agents.index', compact("agents"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $countries = Country::all();
        return view('admin.agents.add', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
//        dd($request->all());
        $rules['image'] = 'image|mimes:jpeg,jpg,bmp,png|max:100000';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $agents = new Agent;

        $agents->title_ar = $request->title_ar;
        $agents->title_en = $request->title_en;
        $agents->title_ur = $request->title_ur;
        $agents->country_id = $request->country_id;
        $agents->url = $request->url;

        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/agents';
            $file->move($path, $filename);
            $agents->image = $path . '/' . $filename;
        }
        $agents->save();
        //return redirect()->route('sliders-web');
        return redirect()->route('admin_agents');
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
        $countries = Country::all();
        $edit = Agent::find($id);
        return view('admin.agents.edit', compact("id", 'edit', 'countries'));
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
        $agents = Agent::find((int) $id);

        $agents->title_ar = $request->title_ar;
        $agents->title_en = $request->title_en;
        $agents->title_ur = $request->title_ur;
        $agents->country_id = $request->country_id;
        $agents->url = $request->url;

        if (!empty($request->image)) {
            $file = $request->image;
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'images/agents';
            $file->move($path, $filename);
            $agents->image = $path . '/' . $filename;
        }
        $agents->save();
        return redirect()->route('admin_agents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $agents = Agent::destroy((int) $id);
        $data = null;
        if ($agents) {
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
