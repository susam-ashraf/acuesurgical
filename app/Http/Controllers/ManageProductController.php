<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Auth;
use redirect;
use Illuminate\Http\Request;

class ManageProductController extends Controller
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
			if(Auth::user()->user_type==1){
        $product_model=new Product();
        $data['my_categories'] =\App\Category::where('level','2')->get();
       // $data['my_products'] =$product_model::where('created_by',Auth::user()->id)->paginate(3);
        $data['my_products']=$product_model::with('catname')->paginate(9);

        return view('manage_product.create_product',['data'=>$data]);
			}
			else{
				return redirect('/');
			}
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
        $product_model=new Product();
         if($request->product_row_id)
        {
            // update the product.
             $product_model = $product_model::find($request->product_row_id);
        }
        $product_model->category_row_id=$request->category;
        $product_model->product_name=$request->product_name;
        $product_model->product_price=$request->product_price;
        $product_model->product_Sku=$request->product_sku;
        $product_model->product_height=$request->product_height;
        $product_model->product_width=$request->product_width;
        $product_model->product_weight=$request->product_weight;
        $product_model->product_short_description=$request->product_short_description;
        $product_model->video=$request->video;
        $product_model->is_latest=$request->is_latest;
        $product_model->is_featured=$request->is_featured;
        $product_model->created_by=Auth::user()->id;
        $product_model->updated_by=Auth::user()->id;

        $file = $request->file('product_image');
        if($file!=null){
            $fileName = time().$file->getClientOriginalName();
            $request->file('product_image')->move('public/product_images/' , $fileName);
            $product_model->product_image=$fileName;
        }
        $file = $request->file('product_image_1');
        if($file!=null){
            $fileName = time().$file->getClientOriginalName();
            $request->file('product_image_1')->move('public/product_images/' , $fileName);
            $product_model->product_image_1=$fileName;
        } 
        $file = $request->file('product_image_2');
        if($file!=null){
            $fileName = time().$file->getClientOriginalName();
            $request->file('product_image_2')->move('public/product_images/' , $fileName);
            $product_model->product_image_2=$fileName;
        }

        $product_model->save();


        return redirect('manage-product')->with('success','Product successfully Updated');
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
			if(Auth::user()->user_type==1){
       $data['my_categories'] =\App\Category::where('level','2')->get();
       $data['my_products']=\App\Product::where('product_row_id',$id)->get();

       return view('manage_product.editProduct',['data'=>$data]);
		 }
			 else{
 				return redirect('/');
 			}

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

     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
			if(Auth::user()->user_type==1){
      $data=\App\Product::where('product_row_id',$id)->first();

      $data->delete();
        return redirect('/show-products')->with('success','Product deleted successfully');
    }
		else{
			return redirect('/');
		}
	}

    public function showProduct()
    {
			if(Auth::user()->user_type==1){
    	$product_model=new Product();
        $data['my_categories'] =\App\Category::where('level','2')->get();
        //$data['my_products'] =$product_model::paginate(30);
        //$data['my_products']=$product_model::with('catname')->paginate(4);
        $data['my_products']=$product_model::with('catname')->paginate(30);

        return view('manage_product.all_product',['data'=>$data]);
    }
		else{
			return redirect('/');
		}

	}

}
