<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Session;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['store', 'email']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::get();
        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = request()->validate([
            'name' => 'required',
            'companyname' => '',
            'email' => 'required|email',
            'phonenumber' => '',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        Contact::Create($contact);
        Session::flash('status', 'Thank you, I will be contacting you within 24 hours.');

        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function email(Request $request)
    {
        $contact = request()->validate([
            'email' => 'required|email',
        ]);

        $contact = new Contact;
        $contact->name = "email";
        $contact->email = $request->email;
        $contact->message = $request->post_slug;
        $contact->save();

        Session::flash('status', 'Thank you. Added to the list!');

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
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
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
