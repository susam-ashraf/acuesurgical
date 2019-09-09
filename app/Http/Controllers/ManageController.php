<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Review;
use Auth;
use DB;
use redirect;

class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search.search');
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
    public function autocomplete(Request $request){

       $name=$request->term;
       $products=DB::table('products')->where('product_name', 'LIKE', '%'.$name.'%')->get();
       $searchResult=array();
       if(count($products)== 0){
         $searchResult[]= "no item found";
       }
      else {
         foreach ($products as $key => $value) {
          // code...
          $searchResult[]=$value->product_name;
         }
       }
       // $availableTags = [
    //   "ActionScript",
    //   "AppleScript",
    //   "Asp",
    //   "BASIC",
    //   "C",
    //   "C++",
    //   "Clojure",
    //   "COBOL",
    //   "ColdFusion",
    //   "Erlang",
    //   "Fortran",
    //   "Groovy",
    //   "Haskell",
    //   "Java",
    //   "JavaScript",
    //   "Lisp",
    //   "Perl",
    //   "PHP",
    //   "Python",
    //   "Ruby",
    //   "Scala",
    //   "Scheme"
    // ];

      return $searchResult;
  }
  public function wishlist(){

    return view('pages.wishlist');
  }

  public function search_all(Request $request){

     if($request->search){
         $name=$request->search;
       //   $data['products']=DB::table('products')->where('product_name', 'LIKE', '%'.$name.'%')->paginate(12);
          $data['products']=\App\Product::where('product_name','LIKE', '%'.$name.'%')->paginate(12);
           }
           else {
             // code...
               $data['products']="no item found";
           }
     return view('pages.allproduct', ['data'=>$data]);

   }


    public function welcome(){
      
        $data['products']=\App\Product::where('is_latest','1')->paginate(8);
        $data['products_1']=\App\Product::where('is_featured','1')->paginate(12);
       
        return view('pages.welcome', ['data'=>$data]);
    }
    public function welcome_bangla(){
       
        $data['products']=\App\Product::where('is_latest','1')->paginate(8);
        $data['products_1']=\App\Product::where('is_featured','1')->paginate(12);
  
        return view('pages.welcome_bangla', ['data'=>$data]);
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function sitemap(){
        return view('pages.sitemap');
    }
    public function faq(){
        return view('pages.faq');
    }
    public function terms_and_condition(){
        return view('pages.terms_and_condition');
    }


     public function productDetails($id)
    {
        $data['info'] = \App\Product::where('product_row_id',$id)->first();
        $data['review'] =\App\Review::where('product_row_id',$id)->paginate(5);
        $cat_id=$data['info']->category_row_id;
        $data['recomand'] = \App\Product::where('category_row_id',$cat_id)->paginate(5);

        $rate = \App\Review::where('product_row_id',$id)->avg('review');
        return view ('pages.productDetails',['data'=>$data,'rate'=>$rate]);

    }
     public function more_images($id)
    {
        $data['info'] = \App\Product::where('product_row_id',$id)->first();
        return view ('pages.p_photo',['data'=>$data]);
    }
     public function review_submit(Request $request,$id)
    {
          $review_model=new Review();
            // code..
          if($request->name!=null||$request->email!=null||$request->subject!=null||$request->message!=null||$request->rating!=null){
          $review_model->name=$request->name;
          $review_model->email=$request->email;
          $review_model->subject=$request->subject;
          $review_model->message=$request->message;
          $review_model->review=$request->rating;
          $review_model->product_row_id=$request->product_row_id;
          $review_model->save();
        }else{
          return redirect('product-details/'.$id.'')->with('status1', 'Review is not submite!');
        }

      return redirect('product-details/'.$id.'')->with('status', 'Review Submited!');
      // return redirect()->route('product-details', ['id' => 44]);
    }






        public function product_list($id)
    {
       if($id==18){
           $data['products']=\App\Product::where('parent_id',$id)->paginate(12);
       }
       if($id==19){
           $data['products']=\App\Product::where('parent_id',$id)->paginate(12);
       }
       if($id==20){
           $data['products']=\App\Product::where('parent_id',$id)->paginate(12);
       }
       if($id==21){
           $data['products']=\App\Product::where('parent_id',$id)->paginate(12);
       }
        else{
            $data['products']=\App\Product::where('category_row_id',$id)->paginate(12);
        }



        return view('product.allproduct',['data'=>$data]);
    }









    public function cidex()
    {

        $data['products']=\App\Product::where('category_row_id','2')->paginate(12);

        return view('product.allproduct',['data'=>$data]);
    }
    public function DISINFECTANT_SPRAYS()
    {

        $data['products']=\App\Product::where('category_row_id','3')->paginate(12);

        return view('product.allproduct',['data'=>$data]);
    }
    public function DISINFECTANT_WIPES()
    {

        $data['products']=\App\Product::where('category_row_id','4')->paginate(12);

        return view('product.allproduct',['data'=>$data]);
    }
    public function HAND_HYGIENE()
    {

        $data['products']=\App\Product::where('category_row_id','5')->paginate(12);

        return view('product.allproduct',['data'=>$data]);
    }
    public function HIGH_LEVEL_DISINFECTANTS()
    {

        $data['products']=\App\Product::where('category_row_id','6')->paginate(12);

        return view('product.allproduct',['data'=>$data]);
    }
    public function STERILIZATION()
    {

        $data['products']=\App\Product::where('category_row_id','9')->paginate(12);

        return view('product.allproduct',['data'=>$data]);
    }
    public function SHARPS_CONTAINERS()
    {

        $data['products']=\App\Product::where('category_row_id','8')->paginate(12);

        return view('product.allproduct',['data'=>$data]);
    }
    public function INSTRUMENT_CLEANERS()
    {

        $data['products']=\App\Product::where('category_row_id','7')->paginate(12);

        return view('product.allproduct',['data'=>$data]);
    }
    public function IV_PRODUCTS()
    {

        $data['products']=\App\Product::where('category_row_id','10')->paginate(12);

        return view('product.allproduct',['data'=>$data]);
    }









}
