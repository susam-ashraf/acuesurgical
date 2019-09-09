<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;
use Auth;

class CartController extends Controller
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
        return redirect('/mycart');
    }

     public function addToCart(Request $request,$id) {

        $data['product_info'] = DB::table('products')->where('product_row_id', $id)->first();
        if($data['product_info']->is_featured==1){
          $price=$data['product_info']->product_price-200;
        }
        elseif($data['product_info']->is_latest==1){
          $price=$data['product_info']->product_price-500;
        }
        else{
            $price=$data['product_info']->product_price;
        }

        $tracking_number = Session::getId();
        DB::table('temp_orders')->insert([
        'product_row_id'=> $data['product_info']->product_row_id,
        'product_image'=> $data['product_info']->product_image,
        'tracking_number'=> $tracking_number,
        'product_price'=>   $price,
        'product_qty'=> 1,
        'user_id'=>Auth::user()->id,
        'product_total_price'=> $price,
        'created_at'=> date('Y-m-d H:i:s'),
        ]);

        return redirect('/mycart');

    }
    public function mycart() {
        $tracking_number = Session::getId();
        $data['temp_orders'] = DB::table('temp_orders As To')
                               ->join('products As p', 'To.product_row_id', '=', 'p.product_row_id')
                               ->where('To.tracking_number', $tracking_number)
                               ->select('p.product_name', 'To.*')
                               ->get();

        $data['total_price'] = DB::table('temp_orders')
                               ->where('tracking_number', $tracking_number)
                               ->sum('product_total_price');




        return view('order.add_to_cart', ['data'=>$data]);
    }

     public function updateCart( Request $request)
     {
        if($request->temp_order_row_id)
        {
                 $temp_order_row_id_arr = $request->temp_order_row_id;
                 for($i=0; $i<count($temp_order_row_id_arr); $i++)
                 {
                     $product_info = DB::table('temp_orders')->where('temp_order_row_id', $temp_order_row_id_arr[$i])->first();
                     $product_price = DB::table('products')->where('product_row_id', $product_info->product_row_id)->first()->product_price;
                     $product_qty_txt_box_name = 'product_qty_' . $temp_order_row_id_arr[$i];
                     $product_qty = $request->$product_qty_txt_box_name;

                     DB::table('temp_orders')->where('temp_order_row_id', $temp_order_row_id_arr[$i])->update([
                      'product_qty'=> $product_qty,
                      'product_total_price'=> ($product_price * $product_qty)
                      ]);
                 }

        }
       return redirect('/mycart');
     }
      public function cartItemDelete(Request $request)
    {

        if($request->temp_order_row_id)
        {
            DB::table('temp_orders')->where('temp_order_row_id', $request->temp_order_row_id)->delete();
        }
          return redirect('/mycart');

    }
      public function cartItemDeleteone($id)
    {

            DB::table('temp_orders')->where('temp_order_row_id', $id)->delete();
            return redirect('/mycart');

    }

    public function cartItemDeleteAll()
    {
        $tracking_number = Session::getId();

        if($tracking_number)
        {
            DB::table('temp_orders')->where('tracking_number', $tracking_number)->delete();
        }
        return redirect('/mycart');
    }
    public function addToOrders()
    {

            $tracking_number= Session::getId();
            $product_info = DB::table('temp_orders')->where('tracking_number', $tracking_number)->get();
            foreach($product_info as $row){
                $insert[]=[
                    'product_row_id'=>$row->product_row_id,
                    'tracking_number'=>$row->tracking_number,
                    'user_id'=>$row->user_id,
                    'product_price'=>$row->product_price,
                    'product_qty'=>$row->product_qty,
                    'product_total_price'=>$row->product_total_price,
                    'product_row_id'=>$row->product_row_id,
                    'created_at'=>$row->created_at,
                    'updated_at'=>$row->updated_at,
                ];
                /*$data['product_row_id']=$row->product_row_id;
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
            if(empty($insert)){
               DB::table('orders')->insert($insert);
            }

    }




}
