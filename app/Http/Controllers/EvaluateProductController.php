<?php
  namespace larastock\Http\Controllers;

  use Illuminate\Support\Facades\DB;
  use larastock\EvaluateProduct;
  use larastock\Product;
  use Illuminate\Auth\Middleware\Authenticate;
  use larastock\Http\Requests\EvaluateProductsRequest;
  use Request;
  /**
   *
   */

  class EvaluateProductController extends Controller
  {
    public function __construct() {
      $this->middleware('auth');
    }

    public function index(){
      $products = Product::all();
      return view('product.index')->withProducts($products);
    }

    // public function show($id){
    //   $response = Product::find($id);
    //   return view('product.show')->with('p', $response);
    // }

    // public function edit($id){
    //   $product = Product::find($id);
    //   return view('product.edit', compact('product'));
    // }

    // public function update(EvaluateProductsRequest $request, $id){
    //   $product = Product::find($id)->update($request->all());
    //   return redirect()
    //           ->action('ProductController@index');
    // }

    public function create(){
      $products = Product::all()->pluck('name', 'id')->all();
      return view('evaluate_product.create')->with('produc_options', $products);
    }

    public function store(EvaluateProductsRequest $request){
      EvaluateProduct::create($request->all());
      return redirect()
              ->action('ProductController@index');
    }

    // public function destroy($id){
    //   Product::find($id)->delete();
    //   return redirect()
    //           ->action('ProductController@index');
    // }
  }

?>
