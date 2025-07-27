<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use Illuminate\Support\Str;

use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class AdminProController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $idCategory = -1;
        if ($request->has('idCategory')) $idCategory = (int) $request['idCategory'];

        $perpage = env('PER_PAGE');
        if ($idCategory>0) {
            $product_arr = product::orderBy('id','desc')->where('idCategory', $idCategory)
            ->paginate($perpage)->withQueryString();
        }else {
            $product_arr = product::orderBy('id','desc')
            ->paginate($perpage)->withQueryString();
        }
        $cate_arr = category::all();
        return view('admin.product',compact(['idCategory', 'product_arr', 'cate_arr']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cate_arr = category::orderBy('thuTu')->get();
        return view('admin.addpro',compact('cate_arr'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $obj = new  product;
        $obj->name = $request['name'];
        $obj->describe = $request['describe'];
        $obj->image = $request['image'];
        $obj->price = (int) $request['price'];
        $obj->priceSale = (int) $request['priceSale'];
        $obj->quantity = (int) $request['quantity'];
        $obj->hot = (int) $request['hot'];
        $obj->label = (int) $request['label'];
        $obj->anHien = $request['anHien'];
        $obj->dateSubmitted	 = $request['dateSubmitted'];
        $obj->slug = Str::slug($obj->name);
        $obj->idCategory = (int) $request['idCategory'];
        $obj->save();
        return redirect(route('product.index'))->with('success','Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit( Request $request , string $id) {
        $product = product::where('id', $id)->first();
        if ($product==null){
            $request->session()->flash('warning','Không có sản phẩm này: '. $id);
            return redirect('/admin/sanpham');
        }
        $cate_arr = category::orderBy('thuTu')->get();
        return view('admin.editpro' , compact(['product','cate_arr']));
    }
    
    public function update(Request $request, string $id) {
        $obj = product::find($id);
        $obj->name = $request['name'];
        $obj->describe = $request['describe'];
        $obj->image = $request['image'];
        $obj->price = (int) $request['price'];
        $obj->priceSale = (int) $request['priceSale'];
        $obj->quantity = (int) $request['quantity'];
        $obj->hot = (int) $request['hot'];
        $obj->label = (int) $request['label'];
        $obj->anHien = $request['anHien'];
        $obj->dateSubmitted	 = $request['dateSubmitted'];
        $obj->slug = Str::slug($obj->name);
        $obj->idCategory = (int) $request['idCategory'];
        $obj->save();
        return redirect(route('product.index'))->with('success', 'Cập nhập thành công');
    }

    public function destroy(Request $request,  string $id)
    {
        $cokhong = product::where('id', $id)->exists();
        if ($cokhong==false) {
            $request->session()->flash('warning','Sản phẩm không tồn tại');
            return redirect('/admin/product');
        }
        product::where('id', $id)->delete();
        $request->session()->flash('alert', 'Xóa thành công! Bạn có thể khôi phục nó trong thùng rác');
        return redirect('/admin/product');

    }

    public function protrash(Request $request)
    {
        $idCategory = -1;
        if ($request->has('idCategory')) $idCategory = (int) $request['idCategory'];

        $perpage = env('PER_PAGE');
        if ($idCategory>0) {
            $protrash_arr = product::onlyTrashed()->orderBy('id','desc')->where('idCategory', $idCategory)
            ->paginate($perpage)->withQueryString();
        }else {
            $protrash_arr = product::onlyTrashed()->orderBy('id','desc')
            ->paginate($perpage)->withQueryString();
        }
        $cate_arr = category::all();
        return view('admin.protrash',compact(['idCategory', 'protrash_arr', 'cate_arr']));
    }

    function protrash_restore($id) {
        $product = product::withTrashed()->find($id);
        if ($product == null) return redirect('/admin/protrash')->with('warning', 'Không tìm thấy sản phẩm cần khôi phục');
        $product->restore();
        return redirect('/admin/protrash');
    }

    function protrash_delete($id) {
        $product = product::withTrashed()->find($id);
        if ($product == null) return redirect('/admin/protrash')->with('warning', 'Không tìm thấy sản phẩm cần xóa');
        $product->forceDelete();
        return redirect('/admin/protrash');
    }
    
}
