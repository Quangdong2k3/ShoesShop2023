<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class DiscountController extends Controller
{
    public function index()
    {
        $pageTitle = "Quản lý giảm giá";
        return view("admin.discount.index", compact("pageTitle"));
    }
    public function fetchDiscount()
    {
        $d = Discount::get();
        return response()->json(["discount" => $d]);
    }
    public function edit($id)
    {
        $d = Discount::FindOrFail($id);
        return response()->json(["discount" => $d]);
    }
    public function storeAndUpdate(Request $request)
    {
        if ($request->id === "" || $request->id === null) {
            $validator = Validator::make($request->all(), [
                "discount_rate" => "required",
                "description" => "required|string",
                "fromdate" => 'required|before:todate',
                "todate" => "required|after:fromdate"
            ], [
                "discount_rate.required" => "Mã giảm giá không được để trống",
                "description.required" => "description isn't empty",
                "fromdate.required" => "Ngày bắt đầu không được để trống",
                "todate.required" => "Ngày kết thúc không được để trống",
                "fromdate.before" => "Ngày bắt đầu phải trước ngày hết hạn: " . Carbon::parse($request->todate)->format("d-m-Y"),
                "todate.after" => "Ngày hết hạn phải sau ngày hết hạn: " . Carbon::parse($request->fromdate)->format("d-m-Y"),



            ]);
            if (!$validator->passes()) {

                return response()->json(['code' => 0, "error" => $validator->errors()->toArray()]);
            } else {
                $discount = new Discount();
                $discount->discount_rate = $request->discount_rate;
                $discount->description = $request->description;
                $discount->fromdate = Carbon::parse($request->fromdate)->format("Y-m-d");
                $discount->todate = Carbon::parse($request->todate)->format("Y-m-d");
                $discount->save();
                return response()->json(['code' => 1, 'success' => '<p class="alert alert-success">Thêm thành công mã giảm giá</p>']);
            }
        } else {
            $validator = Validator::make($request->all(), [
                "discount_rate" => "required",
                "description" => "required|string",
                "fromdate" => 'required|before:todate',
                "todate" => "required|after:fromdate"
            ], [
                "discount_rate.required" => "Mã giảm giá không được để trống",
                "description.required" => "description isn't empty",
                "fromdate.required" => "Ngày bắt đầu không được để trống",
                "todate.required" => "Ngày kết thúc không được để trống",
                "fromdate.before" => "Ngày bắt đầu phải trước ngày hết hạn: " . Carbon::parse($request->todate)->format("d-m-Y"),
                "todate.after" => "Ngày hết hạn phải sau ngày hết hạn: " . Carbon::parse($request->fromdate)->format("d-m-Y"),



            ]);
            if (!$validator->passes()) {

                return response()->json(['code' => 0, "error" => $validator->errors()->toArray()]);
            } else {
                $discount = Discount::findOrFail($request->id);
                $discount->discount_rate = $request->discount_rate;
                $discount->description = $request->description;
                $discount->fromdate = Carbon::parse($request->fromdate)->format("Y-m-d");
                $discount->todate = Carbon::parse($request->todate)->format("Y-m-d");
                $discount->update();
                return response()->json(['success' => '<p class="alert alert-success">Cập nhật thành công mã giảm giá</p>']);
            }
        }
    }
    public function destroy($id)
    {
        $discount = Discount::findOrFail($id);
        $discount->delete();
        return response()->json(["success" => '<p class="alert alert-success">Cập nhật thành công mã giảm giá</p>']);
    }
}
