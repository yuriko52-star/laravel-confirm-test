<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view ('index');
    }
    public function confirm(Request  $request)
    {
        $contact = $request->only(['last_name','first_name' ,'gender','email','tel1','tel2','tel3','address','building','detail','content']);

        return view('confirm',compact('contact'));

    }
    public function store(Request $request){
        $contact = $request->only(['last_name','first_name' ,'gender','email','tel1','tel2','tel3','address','building','detail','content']);
        
        $tel = $request->input('tel1') . '-' . $request->input('tel2') . '-' . $request->input('tel3');

        $contact['tel'] = $tel;
        Contact::create($contact);
        return view('thanks');

    }
}
