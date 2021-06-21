<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestName;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FormRequestName $rq)
    {
        // print_r($request->name);
        // $contact = new Contact();
        // $contact->name = $request->name;
        // $contact->email = $request->email;
        // $contact->content = $request->content;
        // $contact->save();
        DB::table('contract')->insert([
            'name' =>  $request->name,
            'email' =>  $request->email,
            'content'=> $request->content
        ]);
        return redirect('contact/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contract  $Contract
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        // Contact::
        return view('showContact');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contract  $Contract
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contract  $Contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $ontact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contract  $Contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
