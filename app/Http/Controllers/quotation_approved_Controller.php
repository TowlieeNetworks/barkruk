<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\quotation;
use App\User;
use Mail;
use App\Quotation_Rules;

class quotation_approved_Controller extends Controller
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
        $finance = quotation::find($id);
        return view('finance/quotation_approved_edit', ['finance'=>$finance]);
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
        $quotation = quotation::find($id);
        $quotation_rules = Quotation_Rules::find($id);


        if ($request->yes_no == "true"){
            $request->yes_no = 1;
        }
        else{
            $request->yes_no = 2;
        }

        $quotation->update([
            'Goedgekeurd' => $request->yes_no
        ]);

        $data = [
            'name'  => $quotation->users->name,
            'Supply' => $quotation_rules->Supply->name,
            'description' => $quotation_rules->description
        ];


            Mail::to($quotation->users->email)->send(new \App\Mail\newquotationmail($data));

        return redirect()->route('finance.index');
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
