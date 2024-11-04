<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function index()
    {
        return view ('index');
    }
    public function confirm(ContactRequest  $request)
    {
        $contact = $request->only(['category_id','last_name','first_name' ,'gender','email','tel1','tel2','tel3','address','building','detail']);


        $category = Category::find($contact['category_id']);

        return view('confirm',[ 'contact' => $contact,
        'category' => $category]);

    }
    public function store(ContactRequest $request)
    {  $contact = $request->only(['category_id','last_name','first_name' ,'gender','email','tel1','tel2','tel3','address','building','detail']);       
         $contact['tel']= $request->input('tel1') . '-' . $request->input('tel2') . '-' . $request->input('tel3');

       
         Contact::create($contact);
        return view('thanks');

    }
    public function search(Request $request)
    {
        
        $query = Contact::query();

        
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        
        if ($request->filled('gender')) {
            $query->where('gender', $request->input('gender'));
        }

        
        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->input('email') . '%');
        }
        if ( $request->filled('category_id')) {
            $query->find('category_id',
            $request->input('category_id'));
        }
        $contacts = $query->paginate(7);

        return view('/admin', compact('contacts'));
    }
}

    


