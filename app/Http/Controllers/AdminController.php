<?php

namespace App\Http\Controllers;

use App\ComanyDetails;
use App\Notes;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.newProspect');
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
            'street_name'  => 'nullable|string',
            'number'       => 'nullable|numeric',
            'postal_code'  => 'nullable|max:30',
            'city'         => 'nullable|string',
            'phone_number' => 'required|numeric'
        ]);


        User::insert([
            'name'          => $request->full_name,
            'email'         => $request->email,
            'password'      => null,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        $user = User::where('email',$request->email)->first();

        ComanyDetails::insert([
            'user_id' => $user->id,
            'street_name'=> $request->street_name,
            'number' => $request->number,
            'postal_code' => $request->postal_code,
            'city' => $request->city,
            'phone_number' => $request->phone_number,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        $id = Auth::id();

        Notes::insert([
            'sales_id' => $id,
            'customer_id' => $user->id,
            'content' => $request->notes,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        $message = "Prospect has been created succesfully";

        return redirect()->route('admin.index')->withErrors($message);
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
