<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::join("customer","order.customer_id","=","customer.id")->groupBy("order.customer_id")->get(["customer.fullname","Customer.gender","customer.phone","customer.username","customer.email","order.id","order.status","order.customer_id"]);
        $orders = Order::all();

        $pageTitle = "Quản Lý Order";
       

        return view("admin.orderdetails.order",compact("pageTitle","order","orders"));
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
        $pageTitle = "Quản Lý Order Detail";
        
        // $order = OrderModel::join("shoes_size","orderdetail.shoes_size_id","=","shoes_size.size_id")->join("shoes","shoes_size.shoes_id","=","shoes.id")->join("order","orderdetail_id","=","order.id")->whereRaw("order.customer_id=".$id)->get();
        $order = Order::whereRaw("order.customer_id=".$id)->get();
        foreach($order as $r){
            $orders = OrderModel::join("order","orderdetail.order_id","=","order.id")->join("shoes_size","orderdetail.shoes_size_id","=","shoes_size.size_id")->join("orderstatus","order.status","=","orderstatus.status_id")->join("shoes","shoes_size.shoes_id","=","shoes.id")->whereRaw("customer_id=".$id)->get(["order.id","shoes.name","orderdetail_id","shoes.price","order.status","status_id","shoes.price","shoes_size.size","shoes_size.quantity","orderstatus.description"]);

            $order_status = Order::join("orderstatus","order.status","=","orderstatus.status_id")->whereRaw("order.status=". $r->status)->get();
        }
        // session()->put("orderdetail_id",$id);

       return view("admin.orderdetails.order_details",compact("pageTitle","orders","order_status"));

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
        
        $or = Order::whereRaw("customer_id=".$id)->groupBy("customer_id")->get();
        foreach($or as $o){
            if(OrderModel::where("order_id","=",$o->id)->get() != null){
                $statement = "DELETE FROM `oderdetail` WHERE `orderdetail`.`order_id`=".$o->id;
                DB::statement($statement);
            }else{
                break;
            }
        
                
            
            
        }
        
        $or->delete();
        
        Session()->flash("success", "Dữ liệu được xóa thành công!!!");

        return redirect()->back();
    }
}
