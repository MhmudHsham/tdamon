<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use Validator;

/**
 * Description of SettingsController
 *
 * @author mhmudhsham
 */
class SettingsController extends Controller {

    public function index() {
        $settings_all = Setting::all();
        $new_array = null;
        foreach ($settings_all as $one) {
            $new_array[$one->key] = $one->value;
        }
        $settings = (object) $new_array;
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request) {
        $rules['site_logo'] = 'image|mimes:jpeg,jpg,bmp,png|max:10000';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        foreach ($request->all() as $key => $value) {
            if ($key == "_token")
                continue;
            $settings = Setting::where("key", $key)->first();
            $settings->value = $value;
            if ($key == "site_video") {
                $settings->value = substr($request->site_video, strpos($request->site_video, "=") + 1);
            }
            if ($key == "site_logo") {
                $file = $value;
                $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
                $path = 'images/settings';
                $file->move($path, $filename);
                $settings->value = $path . '/' . $filename;
            }
            $settings->save();
        }
        return redirect()->route('admin_settings');
    }

}
