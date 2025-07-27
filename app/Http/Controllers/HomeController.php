<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use App\Models\Product;
use App\Models\comment;
use DB;

Paginator::useBootstrap();

class HomeController extends Controller
{
    function index()
    {
        $new_phone = product::orderBy('id', 'asc')
            ->limit(3)
            ->get();

        $hangmoi = product::orderBy('id', 'desc')
            ->limit(8)
            ->get();

        $hangmoi2 = product::orderBy('id', 'desc')
            ->limit(8)
            ->get();

        $hangmoi3 = product::orderBy('id', 'desc')
            ->limit(2)
            ->get();

        $bestseller = product::where('hot', '=', '1')
            ->limit(8)
            ->get();

        $bestseller2 = product::where('hot', '=', '1')
            ->limit(2)
            ->get();

        $promotion = product::orderBy('priceSale', 'asc')
            ->limit(8)
            ->get();

        $promotion2 = product::orderBy('priceSale', 'asc')
            ->limit(2)
            ->get();

        $brand_arr = category::get();

        return view('client.home', [
            'new_phone' => $new_phone,
            'hangmoi' => $hangmoi,
            'hangmoi2' => $hangmoi2,
            'hangmoi3' => $hangmoi3,
            'bestseller' => $bestseller,
            'bestseller2' => $bestseller2,
            'promotion' => $promotion,
            'promotion2' => $promotion2,
            'brand_arr' => $brand_arr,
        ]);
    }

    public function __construct()
    {
        $cate_arr = category::where('anHien', 1)->orderBy('thuTu')->get();
        \View::share('cate_arr', $cate_arr);
    }

    function showProducts($idCata = 0)
    {
        $per_page = env('PER_PAGE');
        $products = Product::query();

        if ($idCata) {
            $products = $products->where('idCategory', $idCata);
            $categoryName = category::where('id', $idCata)->value('name');
        } else {
            $categoryName = "Tất cả sản phẩm";
        }

        $products = $products->paginate($per_page)->withQueryString();

        return view('client.product', compact('products', 'categoryName'));
    }

    function detail($id = 0)
    {
        $detail = product::where('id', $id)
            ->first();
        if ($detail == null) return redirect('/thongbao')->with(['thongbao' => 'Không có sản phẩm']);

        $idCate = $detail->idCategory;

        $relatedPro = product::where('idCategory', $idCate)
            ->where('label', $detail->label)
            ->orderBy('dateSubmitted', 'desc')
            ->limit(8)->get()->except($id);

        return view('client.detail', compact(['detail', 'relatedPro']));
    }

    function savecomment()
    {
        $idUser = 1;
        $arr = request()->post();
        $idProduct = (Arr::exists($arr, 'idProduct')) ? $arr['idProduct'] : "-1";
        $Content = (Arr::exists($arr, 'Content')) ? $arr['Content'] : "";
        if ($idProduct <= -1) return redirect("/thongbao")->with(['thongbao' => "Không biết sản phẩm $idProduct"]);
        if ($Content == "") return redirect("/thongbao")->with(['thongbao' => 'Nội dung không có']);
        comment::insert(
            ['idUser' => $idUser, 'idProduct' => $idProduct, 'Content' => $Content, 'dateSubmitted' => now()]
        );
        // return redirect('/thongbao')->with(['thongbao'=>'Đã lưu bình luận']);
        return redirect("/detail/$idProduct");
    }

    function addcart(Request $request, $idProduct = 0, $quantity = 1)
    {
        if ($request->session()->exists('cart') == false) { //chưa có cart trong session           
            $request->session()->push('cart', ['idProduct' => $idProduct,  'quantity' => $quantity]);
        } else { // đã có cart, kiểm tra idProduct có trong cart không
            $cart =  $request->session()->get('cart');
            $index = array_search($idProduct, array_column($cart, 'idProduct'));
            if ($index != '') { //idProduct có trong giỏ hàng thì tăhg số lượng
                $cart[$index]['quantity'] += $quantity;
                $request->session()->put('cart', $cart);
            } else { //sp chưa có trong arrary cart thì thêm vào 
                $cart[] = ['idProduct' => $idProduct, 'quantity' => $quantity];
                $request->session()->put('cart', $cart);
            }
        }
        return redirect('/showcart');
    }
    public function addCartAjax(Request $request)
    {
        $idProduct = $request->input('idProduct');
        $quantity = $request->input('quantity', 1);
        
        if ($request->session()->exists('cart') == false) {
            $request->session()->push('cart', ['idProduct' => $idProduct, 'quantity' => $quantity]);
        } else {
            $cart = $request->session()->get('cart');
            $index = array_search($idProduct, array_column($cart, 'idProduct'));
            
            if ($index !== false) { // Sửa điều kiện này
                $cart[$index]['quantity'] += $quantity;
                $request->session()->put('cart', $cart);
                $message = 'Đã tăng số lượng sản phẩm trong giỏ hàng!';
            } else {
                $cart[] = ['idProduct' => $idProduct, 'quantity' => $quantity];
                $request->session()->put('cart', $cart);
                $message = 'Đã thêm sản phẩm vào giỏ hàng!';
            }
        }
        
        // Đếm tổng số lượng sản phẩm trong cart
        $cartCount = 0;
        $cart = $request->session()->get('cart', []);
        foreach ($cart as $item) {
            $cartCount += $item['quantity'];
        }
        
        return response()->json([
            'success' => true,
            'message' => $message,
            'cartCount' => $cartCount
        ]);
    }

    function showcart(Request $request)
    {
        $cart =  $request->session()->get('cart');
        $total_amount = 0;
        $total = 0;
        for ($i = 0; $i < count($cart); $i++) {
            $product = $cart[$i]; // $sp = [ 'id_sp' =>100, 'soluong'=>4, ]
            $id = product::where('id', $product['idProduct'])->value('id');
            $name = product::where('id', $product['idProduct'])->value('name');
            $priceSale = product::where('id', $product['idProduct'])->value('priceSale');
            $image = product::where('id', $product['idProduct'])->value('image');
            $into_money = $priceSale * $product['quantity'];
            $total += $product['quantity'];
            $total_amount += $into_money;

            $product['id'] = $id;
            $product['name'] = $name;
            $product['priceSale'] = $priceSale;
            $product['image'] = $image;
            $product['into_money'] = $into_money;
            $cart[$i] = $product;
        }
        $request->session()->put('cart', $cart);
        return view('client.cart', compact(['cart', 'total', 'total_amount']));
    }

    function deletecart(Request $request, $id =0){
        $cart =  $request->session()->get('cart'); 
        $index = array_search($id, array_column($cart, 'idProduct'));
        if ($index!=''){ 
            array_splice($cart, $index, 1);
            $request->session()->put('cart', $cart);
        }
        return redirect('showcart');
    }

    public function updateCartQuantity(Request $request)
{
    $productId = $request->input('productId');
    $newQuantity = $request->input('quantity');
    
    // Validate quantity
    if ($newQuantity < 1) {
        return response()->json([
            'success' => false,
            'message' => 'Số lượng phải lớn hơn 0'
        ]);
    }
    
    if ($request->session()->exists('cart')) {
        $cart = $request->session()->get('cart');
        $index = array_search($productId, array_column($cart, 'idProduct'));
        
        if ($index !== false) {
            // Cập nhật số lượng
            $cart[$index]['quantity'] = $newQuantity;
            $request->session()->put('cart', $cart);
            
            // Lấy thông tin sản phẩm để tính toán
            $product = Product::find($productId); // Thay Product bằng model của bạn
            
            if ($product) {
                $itemTotal = $product->priceSale * $newQuantity;
                
                // Tính tổng giỏ hàng
                $totalAmount = 0;
                $cartCount = 0;
                foreach ($cart as $cartItem) {
                    $prod = Product::find($cartItem['idProduct']);
                    if ($prod) {
                        $totalAmount += $prod->priceSale * $cartItem['quantity'];
                        $cartCount += $cartItem['quantity'];
                    }
                }
                
                return response()->json([
                    'success' => true,
                    'message' => 'Cập nhật số lượng thành công',
                    'itemTotal' => number_format($itemTotal, 0, ',', '.') . 'đ',
                    'totalAmount' => number_format($totalAmount, 0, ',', '.') . 'VNĐ',
                    'cartCount' => $cartCount,
                    'quantity' => $newQuantity
                ]);
            }
        }
    }
    
    return response()->json([
        'success' => false,
        'message' => 'Không tìm thấy sản phẩm trong giỏ hàng'
    ]);
}

    public function removeFromCart(Request $request)
    {
    $productId = $request->input('productId');
    
        if ($request->session()->exists('cart')) {
            $cart = $request->session()->get('cart');
            $index = array_search($productId, array_column($cart, 'idProduct'));
        
            if ($index !== false) {
                // Xóa sản phẩm khỏi giỏ hàng
                array_splice($cart, $index, 1);
                $request->session()->put('cart', $cart);
                
                // Tính lại tổng giỏ hàng
                $totalAmount = 0;
                $cartCount = 0;
                foreach ($cart as $cartItem) {
                    $prod = Product::find($cartItem['idProduct']);
                    if ($prod) {
                        $totalAmount += $prod->priceSale * $cartItem['quantity'];
                        $cartCount += $cartItem['quantity'];
                    }
                }
                
                return response()->json([
                    'success' => true,
                    'message' => 'Đã xóa sản phẩm khỏi giỏ hàng',
                    'totalAmount' => number_format($totalAmount, 0, ',', '.') . 'VNĐ',
                    'cartCount' => $cartCount,
                    'isEmpty' => empty($cart)
                ]);
            }
        }
    
        return response()->json([
            'success' => false,
            'message' => 'Không tìm thấy sản phẩm trong giỏ hàng'
        ]);
    }

    function download(){ return view("download"); }

}
