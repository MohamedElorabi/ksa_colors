<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\GenralSetting;
use Illuminate\Http\Request;

class GenralSettingController extends Controller
{
    

    public function index()
    {
        $settings = GenralSetting::all();
        return view('dashboard.settings.genral_setting.index', compact('settings'));
    }


    public function update(SettingRequest $request)
    {
        $setting = GenralSetting::first();
        if ($request->hasFile('logo')) {
            $destination = 'uploads/genral_setting';
            $photo = $request->logo;
            $logo = $photo->hashName();
            $photo->move($destination, $logo);
            $setting->logo = $logo;
            $setting->update(['logo'=>$logo]);  
        } 
        if ($request->hasFile('logo_bottom')) {
            $destination = 'uploads/genral_setting';
            $photo = $request->logo_bottom;
            $logo_bottom = $photo->hashName();
            $photo->move($destination, $logo_bottom);
            $setting->logo_bottom = $logo_bottom;
            $setting->update(['logo_bottom'=>$logo_bottom]);  
        } 
        $setting->update([
            'name_site'=>$request->name_site,
            'address'=> $request->address,
            'phone_1'=>$request->phone_1,
            'phone_2'=>$request->phone_2, 
            'phone_3'=>$request->phone_3,
            'phone_4'=>$request->phone_4,
            'whats_num'=>$request->whats_num,
            'face_url'=>$request->face_url,
            'twitter_url'=>$request->twitter_url,
            'snap_url'=>$request->snap_url,
        ]);

        $setting->save();
        return redirect(route('genral_setting'))->with('success', 'تم التعديل بنجاح');

    }
}
