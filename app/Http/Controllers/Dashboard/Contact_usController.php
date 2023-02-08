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
        if($contact->status_read == '0')
        {
            $status_read = '1';

        }else {
            $status_read = '1';
        }
        $values = array('status_read'=> $status_read);
        
        DB::table('contact_uses')->where('id',$id)->update($values);

        return view('dashboard.settings.contact_us.show', compact('contact'));
    }

}
