<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Order;
use Session;
use DB;
use Auth;

class ManageOrder extends Controller
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
        if(Auth::user()->user_type==1){
        $order_model=new Order();

        if($request->order_row_id)
        {
            // update the product.

          DB::table('orders')->where('order_row_id',$request->order_row_id)->update(['status' => $request->status]);

       }

        return redirect('/show-order')->with('success','Order Updated successfully');
      }
      else{
          return redirect('/');
      }
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

    $product_info = DB::table('orders')->where('order_row_id',$id)->delete();
       //echo $data;
      // delete($product_info);
      // echo $id;

          return redirect('/show-order')->with('success','Order deleted successfully');
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
            $data['user_id']= Auth::user()->id;

            foreach ($product_info as $row) {
                $insert[] = [
                    'product_row_id' => $row->product_row_id,
                    'tracking_number' => $row->tracking_number,
                    'user_id' => Auth::user()->id,
                    'product_price' => $row->product_price,
                    'product_qty' => $row->product_qty,
                    'payment_method'=>$request->payment_method,
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
                $product_info = DB::table('temp_orders')->where('tracking_number', $tracking_number)->delete();
                return redirect('/thankyou');
            }
        }
    }
    public function thnx(){
          //
          // $data['order']=\App\Order::paginate(12);
          // foreach($data['order'] as $row){
          //     $id=$row->user_id;
          //     echo $id;
          // }
        return view('thankyou');
    }


    public function showOrder(){
        $order_model=new Order();
        $data['orders']=$order_model::with('user_name')->paginate(30);
        return view('manage_order.show_order',['data'=>$data]);
    }
    public function getUpazila($id){
        $upazillas = DB::table('upazila')->where('district_id',$id)->get();
        foreach($upazillas as $row){
            $id=$row->id;
            $full_name=$row->full_name;
            echo '<option value='.$id.'>'.$full_name.'</option>';
        }
    }
    public function edit_order($id){
    if(Auth::user()->user_type==1){
        $order_model=new Order();
        $data['orders']=$order_model::where('order_row_id',$id)->first();
      return view('manage_order.edit_order',['data'=>$data]);
    }
    }

}
