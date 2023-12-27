<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function indexhome(){
        $products = Product::orderBy('id')->paginate(16);
        return view('customer.home', compact('products'));
    }
    public function indexlist(){
        $products = Product::orderBy('id')->paginate(99);
        return view('customer.list', compact('products'));
    }

    public function indexproduct(){
        $products = Product::orderBy('id')->paginate(99);
        return view('customer.product', compact('products'));
    }

    public function checkout(){
        $products = Product::orderBy('id')->paginate(99);
        return view('customer.checkout', compact('products'));
    }

    public function detail($slug){
        $product = Product::where('slug', '=', $slug)->limit(1)->first();
//        dd($product);
        return view('customer.detail', compact('product'));

    }


    public function indexdetail(){
        return view('customer.detail');
    }
    public function indexabout(){
        return view('customer.about');
    }
    public function indexblog(){
        return view('customer.blog');
    }
    public function indexcontact(){
        return view('customer.contact');
    }

    public function cart(){
        return view('customer.cart');
    }

    public function addcart($id){

        $product = Product::find($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])){
            $cart[$id]['quantity'] ++;
        } else{
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'img' => $product->img
            ];
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success', 'thanh cong');

    }




    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteProduct(Request $request)
    {
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart',$cart);
            }
            session()->flash('success', 'Xoa thanh cong');
        }
    }
}
