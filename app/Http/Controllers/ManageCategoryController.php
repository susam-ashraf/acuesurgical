<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Auth;
use redirect;

use Illuminate\Http\Request;

class ManageCategoryController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');

    }


    public function index()
    {
			if(Auth::user()->user_type==1){
        //$product_model=new Product();
        $data['my_categories'] =\App\Category::get();
       // $data['my_products'] =$product_model::where('created_by',Auth::user()->id)->paginate(3);
        //$data['my_products']=$product_model::with('catname')->paginate(9);

        return view('manage_category.creat_cat',['data'=>$data]);
			}
			else{
				return redirect('/');
			}
    }
    public function mainCategory()
    {
			if(Auth::user()->user_type==1){
        //$product_model=new Product();
        $data['my_categories'] =\App\Category::get();
       // $data['my_products'] =$product_model::where('created_by',Auth::user()->id)->paginate(3);
        //$data['my_products']=$product_model::with('catname')->paginate(9);

        return view('manage_category.create_cat_main',['data'=>$data]);
			}
			else{
				return redirect('/');
			}
    }
    public function subCategory()
    {
			if(Auth::user()->user_type==1){
        //$product_model=new Product();
        $data['my_categories'] =\App\Category::get();
       // $data['my_products'] =$product_model::where('created_by',Auth::user()->id)->paginate(3);
        //$data['my_products']=$product_model::with('catname')->paginate(9);

        return view('manage_category.create_categories',['data'=>$data]);
			}
			else{
				return redirect('/');
			}
    }


    public function showCategory()
    {
				if(Auth::user()->user_type==1){
        $data['my_categories'] =\App\Category::paginate(50);
        //$data['my_categories'] =$category_model::where('created_by',Auth::user()->id)->paginate(30);
        //$data['my_products']=$product_model::with('catname')->paginate(4);

        return view('manage_category.all_categories',['data'=>$data]);
			}
				else{
					return redirect('/');
				}
    }
    public function store(Request $request)
    {
				if(Auth::user()->user_type==1){
					  $product_model=new Category();
					if($request->category_row_id)
	        {
	            // update the product.
	             $product_model = $product_model::find($request->category_row_id);


        if($request->category_row_id)
        {
            // update the product.
             $product_model = $product_model::find($request->category_row_id);
        }
        $product_model->category_name=$request->category_name;
        $product_model->category_short_description=$request->category_short_description;
        $product_model->parent_id=$request->parent_id;
        $product_model->level=$request->category_type;
        $product_model->created_at=time();
        $product_model->updated_at=time();
        $product_model->save();
				return redirect('/admin/category/show')->with('success','Category Updated successfully');
			}
			else{
				$product_model=new Category();
				if($request->category_row_id)
				{
						// update the product.
						 $product_model = $product_model::find($request->category_row_id);
				}
				$product_model->category_name=$request->category_name;
				$product_model->category_short_description=$request->category_short_description;
				$product_model->parent_id=$request->parent_id;
				$product_model->level=$request->category_type;
				$product_model->created_at=time();
				$product_model->updated_at=time();
				$product_model->save();
				return redirect('/admin/category/create')->with('success','Category Created successfully');
			}



        return redirect('/admin/category/show')->with('success','Category Updated successfully');
			}
				else{
					return redirect('/');
				}
    }
    public function destroy($id)
    {
				if(Auth::user()->user_type==1){
      $data=\App\Category::where('category_row_id',$id)->first();

      $data->delete();
        return redirect('/admin/category/show')->with('success','Category deleted successfully');
    }
		else{
			return redirect('/');
		}

	}

    public function edit($id)
    {
				if(Auth::user()->user_type==1){
       $data['my_categories']=  \App\Category::where('category_row_id',$id)->get();

       return view('manage_category.edit_categories',['data'=>$data]);

    }
		else{
			return redirect('/');
		}
	}
	public function category_type(){

	  $data['my_categories'] =\App\Category::where('level','1')->get();
			foreach($data['my_categories'] as $row){
					$id=$row->category_row_id;
					$full_name=$row->category_name;
					echo '<option value='.$id.'>'.$full_name.'</option>';
			}
	}

}
