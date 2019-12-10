<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class contactController extends Controller
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
        $this->validate($request, [
            'full_name'    => 'required|string|max:255',
            'email'        => 'required|string|email|max:255|unique:users',
            'company_name' => 'required|string',
            'street_name'  => 'required|string',
            'number'       => 'required|numeric',
            'postal_code'  => 'required|max:30',
            'city'         => 'required|string',
            'phone_number' => 'required|numeric'
        ]);

        $data = [
            'name'          => $request->full_name,
            'email'         => $request->email,
            'company_name'  => $request->company_name,
            'street_name'   => $request->street_name,
            'number'        => $request->number,
            'postal_code'   => $request->postal_code,
            'city'          => $request->city,
            'phone_number'  => $request->phone_number,
        ];

        $mail = "thebartenders.alert@gmail.com";
        Mail::to($mail)->send(new \App\Mail\NewContact($data));

        return view('Sales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
