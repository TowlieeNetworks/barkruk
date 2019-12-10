<?php

namespace App\Http\Controllers;

use App\work_order;
use App\User;
//use http\Client\Curl\User;
use Illuminate\Http\Request;

class WorkOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return 'in de index';
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
//        $user = User::where('id', $request->id);
        $user = User::where('Id', $request->id)->first();

        work_order::insert([
            'user_id' => $user->id,
            'lease_id' => 1,
            'description' => $request->description,
            'date_time' => now(),
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\work_order  $work_order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('work_orders.create', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\work_order  $work_order
     * @return \Illuminate\Http\Response
     */
    public function edit(work_order $work_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\work_order  $work_order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, work_order $work_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\work_order  $work_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(work_order $work_order)
    {
        //
    }
}
