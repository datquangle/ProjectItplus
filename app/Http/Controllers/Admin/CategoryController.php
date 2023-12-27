<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Http\Requests\Admin\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    function index()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(16);
        // dd($categories);
        return view('admin.categories.index', compact('categories'));
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function cart( $slug){
       $category = Category::where('slug', '=', $slug)->limit(1)->first();
       dd($category);
       return view('admin.category.detail', compact('category'));
    }

    public function store(CategoryStoreRequest $request){
        $category = $request->only('name', 'description', 'status');
        $category['slug'] = Str::slug($category['name']);
        $category['created_at']= now();
        $category['updated']= now();
        //dd($request->file('img'));

        // tạo tên file
        // $fileName = $request->name . rand(1,1000) . time() . '.' . $request->file('img')->extension();
        // lưu trữ vào storage
        // $request->file('img')->storeAs('public/category', $fileName);
        // tạo đường dẫn lưu vào db
        // $imgPath = 'storage/category/' . $fileName;
        // dd($imgPath);
        // $category['img'] = $imgPath;

        Category::create($category);
        return redirect()->route('admin.category.index');

        Category::create($category);
        return redirect()->route('admin.category.index');

    }

    public function destroy(Category $category){
        {
            // xoá và kiểm tra thành công hay không?
            if( $category->delete() ) {
                return redirect()->back()->with('success','Xoá thành công');
            }
            return redirect()->back()->with('error','Xoá thất bại');
        }
    }
    public function edit(Category $category){
        return view('admin.categories.edit', compact('category'));

    }

    public function update(CategoryUpdateRequest $request, Category $category){
        $data = $request->only('name', 'description', 'status');
        $data['slug'] = Str::slug($category['name']);

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

        $category->update($data);

        if($category->update($data)){
            return redirect()->route('admin.category.index')
                ->with('success', 'Sua thanh cong');
        }
        return redirect()->back()->with('error', 'Sua that bai');
    }
    //
//    protected $casts = [
//        'name' => 'array'
//        ];

    public function link(){
        $category = Category::first();
        dd($category->products());
    }
}
