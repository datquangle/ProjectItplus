<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductUpdateRequest;
use App\Http\Requests\Admin\ProductStoreRequest;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(16);

        return view('admin.products.index', compact('products'));
    }

    public function create(){
        return view('admin.products.create');
    }

    public function store(ProductStoreRequest $request){
        $product = $request->only('id_category', 'name', 'description', 'img', 'price');
        $product['slug'] = Str::slug($product['name']);
        $product['created_at']= now();
        $product['updated']= now();
        // $product['id_category'] = $request->idmc;

        // tạo tên file
        $fileName = $request->name . rand(1,1000) . time() . '.' . $request->file('img')->extension();
        // lưu trữ vào storage
        $request->file('img')->storeAs('public/product', $fileName);
        // tạo đường dẫn lưu vào db
        $imgPath = 'storage/product/' . $fileName;
        // dd($imgPath);
        $product['img'] = $imgPath;

        product::create($product);
        return redirect()->route('admin.product.index');

        Product::create($product);
        return redirect()->route('admin.product.index');

    }

    public function destroy(product $product){
        {
            // xoá và kiểm tra thành công hay không?
            if( $product->delete() ) {
                return redirect()->back()->with('success','Xoá thành công');
            }
            return redirect()->back()->with('error','Xoá thất bại');
        }
    }
    public function edit(product $product){
        return view('admin.products.edit', compact('product'));

    }

    public function update(productUpdateRequest $request, product $product){
        $data = $request->only('name', 'id_category', 'description', 'price');
        $data['slug'] = Str::slug($product['name']);

        if($request->img){
            // tạo tên file
            $fileName = $request->name . rand(1,1000) . time() . '.' . $request->file('img')->extension();
            // lưu trữ vào storage
            $request->file('img')->storeAs('public/category', $fileName);
            // tạo đường dẫn lưu vào db
            $imgPath = 'storage/category/' . $fileName;
            // dd($imgPath);
            $data['img'] = $imgPath;

        }
        $data['updated']= now();

        $product->update($data);

        if($product->update($data)){
            return redirect()->route('admin.product.index')
                ->with('success', 'Sua thanh cong');
        }
        return redirect()->back()->with('error', 'Sua that bai');


    }
}
