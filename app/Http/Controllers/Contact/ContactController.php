<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\WebController;
use App\Models\Contact;
use App\Models\Theme;
use Illuminate\Http\Request;

class ContactController extends WebController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=Contact::all();

       return $this->showAll('system.contact.index',$contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
       'name'=>'required',
       'mobile'=>'required|min:10|max:13',
     ];

     $this->validate($request,$rules);

     $data = $request->all();

     $contact = Contact::create($data);

     if (Theme::all()->isEmpty())
     {
       return view('system.theme.create');
     }

     return back()->with('success','Contact created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return $this->showOne('system.contact.show',$contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return $this->showOne('system.contact.edit',$contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
      $contact->delete();

      return back()->with('success','Contact Deleted successfully!');
    }
}
