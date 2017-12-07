<?php
  namespace larastock\Http\Controllers;

  use Illuminate\Support\Facades\DB;
  use larastock\Product;
  /**
   *
   */
  class ProductController extends Controller
  {

    public function index()
    {
      $products = DB::select('select * from products');
      return view('index')->withProducts($products);
      // return view('products.index', ['products'=>$products]);
    }
  }

?>
