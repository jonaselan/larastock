<?php
  namespace larastock\Http\Controllers;

  use Illuminate\Support\Facades\DB;
  use larastock\Product;
  use Request;
  /**
   *
   */
  class ProductController extends Controller
  {

    public function index(){
      // $products = DB::select('select * from products');
      $products = Product::all();
      // U can too passing an array through return
      // return view('products.index', ['products'=>$products]);
      return view('index')->withProducts($products);
    }

    public function show($id){
      // INPUT for get element by request parameters
      // $id = Request::input('id', '0');
      // in this case you can use ROUTE instead, for get on route
      $response = Product::find($id);
      return view('show')->with('p', $response);
    }
  }

?>
