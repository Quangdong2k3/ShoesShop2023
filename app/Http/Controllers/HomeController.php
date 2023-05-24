<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\CartModel;
use App\Models\CustomerModel;
use App\Models\Order;
use App\Models\OrderModel;
use App\Models\ShoesImageModel;
use App\Models\ShoesModel;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{
    public function index()
    {
        $shoes = OrderModel::join('order', 'orderdetail.order_id', '=', 'order.id')->join('shoes_size', "orderdetail.shoes_size_id", "=", "shoes_size.size_id")->join("shoes", "shoes_size.shoes_id", "=", "shoes.id")->where('order.status', 4)->orWhere('orderdetail.quantity', ">", '10')->groupBy('name')->orderBy('name', 'DESC')->get(['shoes.*']);
        // die($shoes);
        if($shoes->count()===0){
            return redirect()->action([HomeController::class,"all_product"]);
        }
        // ->whereRaw('orderdetail.discount_amount>0')->whereRaw('order.status = 4')
        $id = request()->cookie('cusId');
        



        // die($shoes);

        // $shoes = ShoesModel::all();
        $count_cart = CartModel::where("customer_id", "=", request()->cookie("cusId"))->get();
        $count_cart = $count_cart->count();
        session()->flash("countCart", $count_cart);
        if ($id) {
            $customer = CustomerModel::FindOrFail($id);
        }
        return view("client.home", compact("shoes"));
    }
    public function ProductDetai(string $id)
    {
        $shoe_detail = ShoesModel::FindOrFail($id);
        $shoes = ShoesModel::all();
        $size = DB::table('shoes_size')->join("shoes", "shoes_size.shoes_id", '=', "shoes.id")->whereRaw("shoes_size.shoes_id=" . $id)->orderBy('size', 'asc')->get();
        $sizes = $size->count();
        $shoes_related = DB::table('shoes')->where("brand_id", "=", $shoe_detail->brand_id)->whereRaw("shoes.id!=" . $id)->get();
        // ->OrWhere("category_id", "=", $shoe_detail->category_id)
        $shoesimg = DB::table('shoes_picture')->join("shoes", "shoes_picture.shoes_id", '=', "shoes.id")->whereRaw("shoes_picture.shoes_id=" . $id)->get();
        if ($shoesimg != null) {
            $shoesimgs = $shoesimg;
        } else {
            $shoesimgs = $shoe_detail->avatar;
        }
        // die($size);
        return view("client.product_detail", compact("shoe_detail", "shoes", "shoesimgs", "size", "shoes_related", "sizes"));
    }
    public function search(Request $request)
    {
        $shoes = ShoesModel::where('name', 'LIKE', '%' . $request->search . '%')->get();

        if (!$shoes->isEmpty()) {
            session()->flash("info", $request->search);
            return view("client.home", compact("shoes"));
        } else {
            session()->flash("unsearch", "Không có sản phẩm này");
            session()->flash("info", $request->search);

            return redirect()->route("home");
        }
    }
    public function MenShoes()
    {
        $shoes = ShoesModel::where("gender", "=", 1)->orWhere("gender", "=", 2)->get();
        return view("client.men", compact("shoes"));
    }

    public function all_product()
    {
        $shoes = ShoesModel::all();
        return view("client.home", compact("shoes"));
    }
    public function Login()
    {
        session()->put("url_page", url()->previous());
        return view("client.login");
    }
    public function SignIn(Request $request)
    {
        $remember = ($request->remember) ? true : false;
        $email = $request->email;
        $pass = $request->password;

        echo "<pre>";
        print_r($request->all());
        echo "</pre>";
        // $mess = [
        //     "name.required" => "Tên category không được để trống",
        //     "description.required" => "Description không được để trống",
        // ];
        $request->validate([
            "email" => 'required|email',
            'password' => [
                'required',
            ],

        ]);
        $customer = CustomerModel::where("email", "=", $email)->where("password", "=", md5($pass))->first();

        if ($customer !== null) {
            
            if ($remember) {
                

                $lifetime = time() + 60 * 60 * 24 * 365; // one year

                Cookie::queue("namecustomer", $customer->username, $lifetime);
                Cookie::queue("cusAvatar", $customer->avatar, $lifetime);

                Cookie::queue("cusId", $customer->id, $lifetime);
            } else {
                $minutes = 60;
                Cookie::queue("namecustomer", $customer->username, $minutes);
                Cookie::queue("cusAvatar", $customer->avatar, $minutes);

                Cookie::queue("cusId", $customer->id, $minutes);
            }

                return redirect("/");
        } else {
            session()->flash("message", "Đăng Nhập Sai!!!");
            return redirect()->action([HomeController::class, "login"]);
        }
    }
    public function logout()
    {
        Auth::logout();
        Cookie::queue(Cookie::forget("cusId"));
        Cookie::queue(Cookie::forget("namecustomer"));
        Cookie::queue(Cookie::forget("cusAvatar"));

        Cookie::queue(Cookie::forget("countCart"));
        
        session()->forget('url_page');
        session()->forget('sumOrder');
        // session()->regenerate();
        return redirect()->action([HomeController::class, "index"]);
    }
    public function countCartOrder(){
        $order = Order::where("customer_id","=",request()->cookie('cusId'))->get();
        $cart = CartModel::where("customer_id","=",request()->cookie('cusId'))->get();
        $sumOrder = $order->count();

        return response()->json(["order_count"=>$sumOrder,"cart_count"=>$cart->count()]);
    }
}
