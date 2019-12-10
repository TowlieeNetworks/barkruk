<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use App\Supplies;
use App\purchase;
use Auth;
use Mail;
use App\User;
use App\purchase_rules;

class InkoopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inkoper.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplies = supplies::all();
        $purchases = purchase::all();

        return view('inkoper.Createproductorder', [
            'supplies' => $supplies,
            'purchases' => $purchases
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
        $product1 = Supplies::find($request->productname1);
        $product2 = Supplies::find($request->productname2);
        $product3 = Supplies::find($request->productname3);


        $product1->total_price = $request->purchase_amount1 * $product1->unit_price;
        $product2->total_price = $request->purchase_amount2 * $product2->unit_price;
        $product3->total_price = $request->purchase_amount3 * $product3->unit_price;

        $master_total = $product1->total_price + $product2->total_price + $product3->total_price;

        $id = Auth::id();
        $now = now();

        if ($master_total > 5000){

            $user = User::where('id',$id)->first();
            if ($user == null){
                return view('inkoper.index');
            };

            $data = ['total' => $master_total,
                     'product1' => $product1,
                     'supply_id1' => $product1->id,
                     'amount1' => $request->purchase_amount1,
                     'total_price1' => $product1->total_price,

                     'product2' => $product2,
                     'supply_id2' => $product2->id,
                     'amount2' => $request->purchase_amount2,
                     'total_price2' => $product2->total_price,

                     'product3' => $product3,
                     'supply_id3' => $product3->id,
                     'amount3' => $request->purchase_amount3,
                     'total_price3' => $product3->total_price,

                     'user'     => $user];

            $mail = "thebartenders.alert@gmail.com";
            Mail::to($mail)->send(new \App\Mail\LargeOrderMail($data));
        }

        purchase::insert([
            'user_id' => $id,
            'date_time' => $now,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $purchase = purchase::where('created_at', $now)->first();

        purchase_rules::insert([
            'purchase_id' =>  $purchase->id,
            'supply_id' => $product1->id,
            'amount' => $request->purchase_amount1,
            'total_price' => $product1->total_price,
            'delivery_date' => $request->date1,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        purchase_rules::insert([
            'purchase_id' =>  $purchase->id,
            'supply_id' => $product2->id,
            'amount' => $request->purchase_amount2,
            'total_price' => $product2->total_price,
            'delivery_date' => $request->date2,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        purchase_rules::insert([
            'purchase_id' =>  $purchase->id,
            'supply_id' => $product3->id,
            'amount' => $request->purchase_amount3,
            'total_price' => $product3->total_price,
            'delivery_date' => $request->date3,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        return view('inkoper.index');
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
