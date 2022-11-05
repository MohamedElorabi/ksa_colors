<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\WhoRequest;
use App\Models\Who;
use Illuminate\Http\Request;

class WhoController extends Controller
{
    


    public function index()
    {
        $whos = Who::all();

        return view('dashboard.page_static.who', compact('whos'));
    }


    public function update(WhoRequest $request)
    {
        $who = Who::first();
        if ($request->hasFile('image_home')) {
            $destination = 'uploads/who_page';
            $photo = $request->image_home;
            $image_home = $photo->hashName();
            $photo->move($destination, $image_home);
            $who->image_home = $image_home;
            $who->update(['image_home'=>$image_home]);  
        } 

        if ($request->hasFile('image')) {
            $destination = 'uploads/who_page';
            $photo = $request->image;
            $image = $photo->hashName();
            $photo->move($destination, $image);
            $who->image = $image;
            $who->update(['image'=>$image]);  
        } 
        $who->update([
            'title'=>$request->title,
            'desc'=> $request->desc,
            'url_video'=>$request->url_video,
            'title_bottom'=>$request->title_bottom, 
            'desc_bottom'=>$request->desc_bottom,
    
        ]);

        $who->save();
        return redirect(route('who_are_we'))->with('success', 'تم التعديل بنجاح');

    }
}
