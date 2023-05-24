<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\CustomerModel;
use App\Models\EmployeeModel;
use App\Models\Order;
use App\Models\OrderModel;
use App\Models\ShoesModel;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class AdminController extends Controller
{
    public function Beforelogin()
    {

        return view("admin.login");
    }
    public function dashboard(Request $request)
    {
        
        $emp = EmployeeModel::FindOrFail(request()->cookie("id"));
        Cookie::queue("admAvatar", $emp->avatar, 60);
        $order_count = Order::whereRaw("status=1")->count();
        $cus_count = CustomerModel::all()->count();
        $admin_count = EmployeeModel::whereRaw("role_id=1")->count();
        $emp_count = EmployeeModel::whereRaw("role_id=0")->count();

        
        return view("admin.statistic.index",compact("order_count","cus_count","admin_count","emp_count"))->with("pageTitle", "Doanh thu cửa hàng");
    }
    
    public function statisticFilter(Request $request)
    {
        
        $request->validate([
            "fromdate" => 'required|before:todate',
            "todate" => "required|after:fromdate",
        ],[
            "fromdate.required" => "Ngày bắt đầu không được để trống",
        "todate.required" => "Ngày kết thúc không được để trống",
        ]);
        $from = Carbon::parse($request->fromdate)->format("Y-m-d");
        $to = Carbon::parse($request->todate)->format("Y-m-d");

        $emp = EmployeeModel::FindOrFail(request()->cookie("id"));
        Cookie::queue("admAvatar", $emp->avatar, 60);
        $order_count = Order::whereRaw("status=1")->count();
        $cus_count = CustomerModel::all()->count();
        $admin_count = EmployeeModel::whereRaw("role_id=1")->count();
        $emp_count = EmployeeModel::whereRaw("role_id=0")->count();
        $statistic = Order::all();
        $customer = CustomerModel::all();
        session()->flash("fromday",$request->fromdate);
        session()->flash("today",$request->todate);

        // foreach($statistic as $r){
        //     foreach($customer as $c){
        //         if($r->customer_id===$c->id){
        //             $sum = Order::whereBetween('created_at',[$from,$to])->whereRaw("customer_id=".$r->customer_id)->whereRaw('status=4')->groupBy("order.customer_id")->select(["*",DB::raw('sum(total_payment) as sum_pay')])->get();
        //         }
                
        //     }
        // }
        // die($sum);
        $sum = Order::whereBetween('created_at',[$from,$to])->whereRaw('status=4')->get([DB::raw('sum(total_payment) as sum_pay')]);

        return view("admin.statistic.filterStatistic",compact("sum","order_count","cus_count","admin_count","emp_count"))->with("pageTitle", "Doanh thu cửa hàng");
        // whereBetween('created',$from,$to)
        
        // return datatables($filter)->make(true);
        

    }
    public function login(Request $request)
    {
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
        $email = $request->email;
        $password = ($request->password);
        $emp = DB::table('employee')->where("email", $email)->where("password", md5($password))->first();
        // if ($emp != null) {
            $minutes = 60;
            Cookie::queue("name", $emp->username, $minutes);
            Cookie::queue("id", $emp->emp_id, $minutes);

            return redirect()->action([AdminController::class, 'dashboard']);
        // }
        // return redirect()->action([AdminController::class, "Beforelogin"]);
    }
    public function index(Request $request)
    {
        // if ($request->cookie('id')) {
            return view("admin.index")->with("pageTitle", "Trang chủ Admin");
        // }
        // return redirect()->action([AdminController::class, "Beforelogin"]);
    }
    //ham cap nhat role
    public function updateRole($id, Request $request)
    {
        $employee = EmployeeModel::findOrFail($id);
        if ($request->role == 1) {
            Session()->flash("success", "Update Role Employee " . $employee->fullname . " is nhan vien quan ly");

            $employee->role_id = 0;
        } else {
            $employee->role_id = 1;
            Session()->flash("success", "Update Role Employee " . $employee->fullname . " is Quan tri tat ca");
        }
        $employee->update();
        return redirect()->action([EmployeeController::class, "index"]);
    }
    public function logoutAdmin()
    {
        Auth::logout();
        Cookie::queue(Cookie::forget("id"));
        Cookie::queue(Cookie::forget("admAvatar"));


        return redirect()->action([AdminController::class, "Beforelogin"]);
    }
}
