<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
Use Auth;
use DB;
use App\Product;
use App\Category;
use App\Order;
use redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['categories']=\App\Category::paginate(4);
      $data['categories']=\App\Category::paginate(4);
      $data['products']=\App\Product::where('category_row_id','15')->paginate(8);
      $data['products_1']=\App\Product::where('category_row_id','12')->paginate(4);
      $data['products_2']=\App\Product::where('category_row_id','16')->paginate(4);
      $data['products_3']=\App\Product::where('category_row_id','14')->paginate(4);

            return view('pages.welcome',['data'=>$data]);
    }

    public function wishlist(){
      $id=Auth::user()->id;
      $data['products']=\App\Wishlist::where('user_id', $id)->with('product_list')->paginate(12);
      return view('pages.wishlist',['data'=>$data,'s'=>'1']);
    }

    public function delete_wishlist($id){

      $product_info = DB::table('wishlists')->where('wishlist_id',$id)->delete();
      return redirect('/wishlist')->with('success','Deleted successfully');
    }
     public function welcome(){
      
        $data['products']=\App\Product::where('is_latest','1')->paginate(8);
        $data['products_1']=\App\Product::where('is_featured','1')->paginate(12);
       
        return view('pages.welcome', ['data'=>$data]);
    }


    public function addToWishlist($id) {

        $data['product_info'] = DB::table('products')->where('product_row_id', $id)->first();
        $id=$data['product_info']->product_row_id;
        $tracking_number = Session::getId();
        DB::table('wishlists')->insert([
        'product_row_id'=> $data['product_info']->product_row_id,
        'tracking_number'=> $tracking_number,
        'user_id'=>Auth::user()->id,
        'created_at'=> date('Y-m-d H:i:s'),
        'updated_at'=> date('Y-m-d H:i:s'),
        ]);

        return redirect()->route('product-details', ['id' => $id])->with('success','Added successfully');

    }



    public function admin()
    {
            if( Auth::user()->user_type==1){
            return view('layouts.app_admin');
            }
            else{
              $data['products']=\App\Product::paginate(12);
              $data['products_1']=\App\Product::where('category_row_id','2')->paginate(4);
              $data['products_2']=\App\Product::where('category_row_id','3')->paginate(4);
              $data['products_3']=\App\Product::where('category_row_id','4')->paginate(4);

              return view('pages.welcome',['data'=>$data]);
            }

    }



    public function profile($id){
        $data['info'] = \App\User::where('id',$id)->first();
        return view('user',['data'=>$data]);
    }
    public function user_dashboard($id){
        $data['info'] = \App\User::where('id',$id)->first();
        return view('user.dashboard',['data'=>$data]);
    }
    public function user_addressbook($id){
        $data['info'] = \App\User::where('id',$id)->first();
        return view('user',['data'=>$data]);
    }

    public function my_order($id){
        $order_model=new Order();
        $data['info']=$order_model::where('user_id',$id)->with('product_name')->paginate(10);
        // $data['info'] = DB::table('orders')->where('user_id',$id)->first();
        return view('user.my_order',['data'=>$data,'s'=>'1']);
    }


}
