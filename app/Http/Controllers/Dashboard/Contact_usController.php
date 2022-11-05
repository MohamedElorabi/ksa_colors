<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact_us;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Contact_usController extends Controller
{
    public function index()
    {
        $contacts = Contact_us::all()->sortByDesc('id');
        
        return view('dashboard.settings.contact_us.index', compact('contacts'));
    }


    public function showContact($id)
    {   
        $contact = Contact_us::find($id);
        if($contact->status == '0')
        {
            $status = '1';

        }else {
            $status = '1';
        }
        $values = array('status'=> $status);
        
        DB::table('contact_us')->where('id',$id)->update($values);

        return view('dashboard.settings.contact_us.show', compact('contact'));
    }

}
