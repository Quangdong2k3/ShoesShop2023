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
        $order = Order::join("customer","order.customer_id","=","customer.id")->orderBy("created_at","desc")->get(["order.*"]);
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
     
        $orders = OrderModel::join('order',"orderdetail.order_id","=","order.id")->join('shoes_size',"shoes_size.size_id","=","shoes_size_id")->join('shoes',"shoes_size.shoes_id","=","shoes.id")->whereRaw("order.id=".$id)->get();
        $orders_info = Order::join('customer',"order.customer_id","=","customer.id")->join('orderstatus',"order.status","=","orderstatus.status_id")->whereRaw("order.id=".$id)->first();
        $order_subtotal = Order::whereRaw("id=".$id)->first();
        // die($order_subtotal);
       return view("admin.orderdetails.order_details",compact("pageTitle","orders","order_subtotal","orders_info"));

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
        
        $or = Order::whereRaw("id=".$id)->first();
        
        // die($or);
        $or->delete();
        
        Session()->flash("success", "Dữ liệu được xóa thành công!!!");

        return redirect()->back();
    }
}
