<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\GenralSetting;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Who;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home_page()
    {
        $who = Who::all();
        $products = Product::limit(4)->get();
        $sliders = Slider::all();
        $settings = GenralSetting::all();
        return view('front.home_page.index', compact('who', 'products', 'sliders', 'settings'), ['title' => 'الرئيسية']);
    }


    public function who_page()
    {
        $who = Who::all();
        $settings = GenralSetting::all();
        return view('front.who_page.index', compact('who', 'settings'), ['title' => 'نبذة عنا']);
    }



    public function products_page(Request $request)
    {
        $category = Category::with('products')->get();
        $catTab = isset($request->id) ? $request->id : $category->first()->id;
        $settings = GenralSetting::all();
        return view('front.products.index',compact('category', 'catTab', 'settings'), ['title' => 'منتجاتنا'])->with(['category' => $category]);

    }



    public function product_details($id)
    {
        $product = Product::findOrFail($id);
        $related_products = Product::where('id','!=',$id)->where(['category_id'=>$product->category_id])->get();
        $settings = GenralSetting::all();
        return view('front.products.product_detailes', compact('product', 'settings', 'related_products'), ['title' => $product->name]);
    }


    public function search(Request $request)
    {
        $output = "";
        $products = Product::where('name', 'Like', '%'.$request->search. '%')->get();
        foreach ($products as $product)
        {
            $output.=
                '<ul>

                    <li> '.$product->name.' </li>
                </ul>';
        }

        return response($output);
    }


}
