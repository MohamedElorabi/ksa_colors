<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        
        return view('dashboard.settings.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.settings.sliders.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = Slider::create($request->all());
        if ($request->hasFile('image')) {
            $destination = 'uploads/sliders';
            $photo = $request->image;
            $image = $photo->hashName();
            $photo->move($destination, $image);
            $slider->image = $image;
            $slider->update(['image'=>$image]);  
        } 
        return redirect(route('sliders.index'))->with('success', 'تم إنشاء بيانات البنر بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('dashboard.settings.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        $slider->update($request->all());
        if ($request->hasFile('image')) {
            $destination = 'uploads/sliders';
            $photo = $request->image;
            $image = $photo->hashName();
            $photo->move($destination, $image);
            $slider->image = $image;
            $slider->update(['image'=>$image]);  
        } 
        
        return redirect(route('sliders.index'))->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect(route('sliders.index'))->with('success', 'تم الحذف بنجاح');
    }
}
