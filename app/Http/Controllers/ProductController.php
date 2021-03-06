<?php
  namespace larastock\Http\Controllers;

  use Illuminate\Support\Facades\DB;
  use larastock\Product;
  use Illuminate\Auth\Middleware\Authenticate;
  use larastock\Http\Requests\ProductsRequest;
  use Request;
  use Debugbar;
  /**
   *
   */

  class ProductController extends Controller
  {
    public function __construct() {
      $this->middleware('auth');
    }

    public function index(){
      // $products = DB::select('select * from products');
      $products = Product::simplePaginate(7);
      Debugbar::addMessage('my message', 'test');
      // U can too passing an array through return
      // return view('products.index', ['products'=>$products]);
      return view('product.index')->withProducts($products);
    }

    public function show($id){
      // INPUT for get element by request parameters
      // $id = Request::input('id', '0');
      // in this case you can use ROUTE instead, for get on route
      $response = Product::find($id);
      return view('product.show')->with('p', $response);
    }

    public function edit($id){
      $product = Product::find($id);
      return view('product.edit', compact('product'));
    }

    public function update(ProductsRequest $request, $id){
      $product = Product::find($id)->update($request->all());
      return redirect()
              ->action('ProductController@index');
    }

    public function create(){
      return view('product.create');
    }

    public function store(ProductsRequest $request){
      Product::create($request->all());
      return redirect()
              ->action('ProductController@index')
              ->withInput(Request::only('name'));
    }

    public function destroy($id){
      Product::find($id)->delete();
      return redirect()
              ->action('ProductController@index');
    }
  }

?>
