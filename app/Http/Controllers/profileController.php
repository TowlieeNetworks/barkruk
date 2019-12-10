<?php

namespace App\Http\Controllers;

use App\Factuur;
use App\LeaseRules;
use App\leases;
use App\LeaseTypes;
use App\quotation;
use App\Supplies;
use Illuminate\Http\Request;
use User;
use App\ComanyDetails;
use App\Roles;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $companyDetails = ComanyDetails::where('user_id', $user->id)->first();
        $role = Roles::where('id', $user->role_id)->first();
        $leases = leases::where('customer_id', $user->id)->get();
        $leaseTypes = LeaseTypes::all();
        $leaseRules = LeaseRules::all();
        $products = Supplies::all();
        $facturen = Factuur::all();

        return view('additional.profile', ['user' => $user,
                                                'companyDetails' => $companyDetails,
                                                'role' => $role,
                                                'leases' => $leases,
                                                'leaseTypes' => $leaseTypes,
                                                'leaseRules' => $leaseRules,
                                                'products' => $products,
                                                'facturen' => $facturen]);
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
        //
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
        $user = auth()->user();
        $companyDetails = ComanyDetails::where('user_id', $user->id)->first();
        return view('additional.profileEdit', ['user' => $user, 'companyDetails' => $companyDetails]);
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

        $user = auth()->user();

        $user->update(['name' => $request->name,
                      'email' => $request->email]);

        $company = ComanyDetails::where('user_id', $user->id)->first();

        $company->update([
            'company_name'  => $request->companyName,
            'street_name'  => $request->street_name,
            'number'       => $request->number,
            'postal_code'  => $request->postalcode,
            'city'         => $request->city,
            'phone_number' => $request->phone
        ]);

         return redirect( Route('profileIndex') );
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
