<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view ('index');
    }
    public function confirm(ContactRequest  $request)
    {
        $contact = $request->only(['last_name','first_name' ,'gender','email','tel1','tel2','tel3','address','building','detail']);


        $category = $request->only('content');

        return view('confirm',compact('contact','category'));

    }
    public function store(ContactRequest $request)
    {  $contact = $request->only(['category_id','last_name','first_name' ,'gender','email','tel1','tel2','tel3','address','building','detail']);       
         $tel = $request->input('tel1') . '-' . $request->input('tel2') . '-' . $request->input('tel3');

         $contact['tel'] = $tel;
         Contact::create($contact);
        return view('thanks');

    }
}
