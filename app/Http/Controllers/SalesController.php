<?php

namespace App\Http\Controllers;
use App\Notes;
use Auth;
use Mail;
use \App\User;
use \App\ComanyDetails;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class salesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = ComanyDetails::All()->where('BKR_registered', '==', null);
        return view('sales.index' , ['companies'=>$companies]);
    }

    /**
     * used for new customers
     */
    public function newCustomer()
    {
        dd("moved to create and store function");
    }

    /**
     * used for existing customers
     */
    public function ExistingCustomer()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales/create2');
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
           'password'     => 'required|string|min:8',
           'password_confirmation' => 'required|string|min:8',
           'company_name' => 'required|string',
           'street_name'  => 'required|string',
           'number'       => 'required|numeric',
           'postal_code'  => 'required|max:30',
           'city'         => 'required|string',
           'phone_number' => 'required|numeric'
        ]);

        User::insert([
            'name'          => $request->full_name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
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

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];


        Mail::to($user->email)->send(new \App\Mail\NewCustomerMail($data));

        return view('sales/create2');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = ComanyDetails::find($id);
        return view('sales/show', ['user'=>$users]);
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
