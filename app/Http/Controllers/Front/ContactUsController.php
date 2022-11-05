<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact_usRequest;
use App\Mail\Mail as MailMail;
use App\Models\Contact_us;
use App\Models\GenralSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        $settings = GenralSetting::all();
        return view('front.contact_us.index', compact('settings'),['title' => 'تواصل معنا']);
    }

    public function store_contact_us(Contact_usRequest $request){

        $data =  $request->all();
        $contacts = Contact_us::create($data);
        Mail::to('elorabi199@gmail.com')->send(new MailMail($data));
        return redirect(route('contact_us'))->with('success', 'تم إرسال الرسالة بنجاح');
    
        }
}
