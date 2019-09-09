<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;
use Auth;

class Order extends Controller
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
    
    public function checkout()
    {

     $data['tracking_number']= Session::getId();
     $data['user_id']= Auth::user()->id;
     //$data['product_total_price'] = DB::table('temp_orders')->where('tracking_number', $tracking_number)->sum('product_total_price');
     //$data['product_total_price'] = DB::table('temp_orders')->where('tracking_number', $tracking_number)->sum('product_total_price');
     $data['districts'] = DB::table('districts')->get();
     return view('order.checkout', ['data'=>$data]);   

    }
    public function addToOrders(Request $request) {
        if($request->tracking_number) {
            $tracking_number = Session::getId();
            $product_info = DB::table('temp_orders')->where('tracking_number', $tracking_number)->get();
          
          
            foreach ($product_info as $row) {
                $insert[] = [
                    'product_row_id' => $row->product_row_id,
                    'tracking_number' => $row->tracking_number,
                    'user_id' => $row->user_id,
                    'product_price' => $row->product_price,
                    'product_qty' => $row->product_qty,
                    'product_total_price' => $row->product_total_price,
                    'product_row_id' => $row->product_row_id,
                    'created_at' => $row->created_at,
                    'updated_at' => $row->updated_at,
                ];
                /* $data['product_row_id']=$row->product_row_id;
                  $data['tracking_number']=$row->tracking_number;
                  $data['user_id']=$row->user_id;
                  $data['product_price']=$row->product_price;
                  $data['product_qty']=$row->product_qty;
                  $data['product_total_price']=$row->product_total_price;
                  $data['created_at']=$row->created_at;
                  $data['updated_at']=$row->updated_at;
                  DB::table('orders')->insert($data);
                 * 
                 */
            }
          //  var_dump($insert);
            if (!empty($insert)) {
                DB::table('orders')->insert($insert);
                return redirect('/thankyou');
            }
        }
    }
    public function thnx(){
        return view('thankyou');
    }
    public function getUpazila($id){
        $upazillas = DB::table('upazila')->where('district_id',$id)->get();
        foreach($upazillas as $row){
            $id=$row->id;
            $full_name=$row->full_name;
            echo '<option value='.$id.'>'.$full_name.'</option>';
        }
    }
}
