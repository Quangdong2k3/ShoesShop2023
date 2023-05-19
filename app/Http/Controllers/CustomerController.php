<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = CustomerModel::all();
        $pageTitle = "Quản Lý Khách Hàng";
        return view("admin.customers.customers",compact("pageTitle","customers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {
        return view("client.register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        echo "</pre>";
        // $mess = [
        //     "name.required" => "Tên category không được để trống",
        //     "description.required" => "Description không được để trống",
        // ];
        $valid = $request->validate([
            "username"=>"required|string|unique:customer",
            "email"=>"required|email|unique:customer",
            'password' => [
                'required',
                'string',
                'min:10',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            "repassword"=>"required|same:password",
            

        ]);
        $cus = new CustomerModel();
        $cus->username = $request->username;
        $cus->email = $request->email;
        $cus->password = md5($request->password);
        $cus->save();
        Session()->flash("registerMessage", "Đăng ký tài khoản thành công");
        $minutes = 60;
        
        return redirect()->action([HomeController::class,"login"]);
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
    public function destroy(string $id)
    {
        $cus = CustomerModel::find($id);
        $cus->delete();
        Session()->flash("success", "Dữ liệu được xóa thành công!!!");

        return redirect()->action([CustomerController::class, "index"]);
    }
}
