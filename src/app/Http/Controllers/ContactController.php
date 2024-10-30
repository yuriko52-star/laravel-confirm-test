<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        
        $tell = $request->input('tel1') . '-' . $request->input('tel2') . '-' . $request->input('tel3');

        $contact['tell'] = $tell;

    }
}
