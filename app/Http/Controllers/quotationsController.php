<?php

namespace App\Http\Controllers;
use App\quotation;
use App\Supplies;
use App\User;
use App\Quotation_Rules;
use Auth;
use App\ComanyDetails;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class quotationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $quotation = quotation::all();
        $supplies = Supplies::all();
        $customers = User::all()->where('role_id', '==', 7);
        return view('sales/createquotation', [
            'quotations' => $quotation,
            'supplies' => $supplies,
            'customers' => $customers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        $now = now();

        $customer = User::find($request->Customer);

        quotation::insert([
           'sales_id' => $id,
           'customer_id' => $customer->id,
           'date' => $now,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        $quotation = quotation::where('created_at', $now)->first();
        $product = Supplies::find($request->Productname);

        Quotation_Rules::insert([
            'quotation_id' => $quotation->id,
            'supply_id' => $product->id,
            'description' => $request->description,
            'delivery_date' => $request->date,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        $companies = ComanyDetails::All()->where('BKR_registered', '==', null);

        return view('sales.index' , ['companies'=>$companies]);

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
