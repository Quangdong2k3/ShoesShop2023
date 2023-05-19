<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    public function profile(string $id)
    {
        $customer = CustomerModel::FindOrFail($id);
        $pageTitle = "Thông Tin Khách Hàng: " . $customer->name;
        return view("client.profile", compact('customer', 'pageTitle'));
    }
    public function uploadImageProfile(string $id,Request $request)
    {
        $customer = CustomerModel::FindOrFail($id);

        echo "<pre>";
        print_r($request->all());
        echo "</pre>";
        $request->validate([
            "avatar" => "nullable|image|mimes:jpg,png,jpeg,gif,svg",
        ]);
        if ($request->hasFile('avatar')) {

            $destination = "public/image" . $customer->avatar;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/image/', $filename);
            $customer->avatar = $filename;
        }
        session()->flash("message", "Cap nhat thanh cong");
        $customer->update();
        Cookie::queue("cusAvatar", $customer->avatar, 365*60*60*24);

        return redirect()->back();
    }
    public function edit(string $id)
    {
        $cus = CustomerModel::FindOrFail($id);
        $date = Carbon::parse($cus->dob)->format('d-m-Y');
        return view("client.profileEdit",compact("cus","date"));
    }
    public function update(string $id,Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        echo "</pre>";
        $request->validate([
            "username" => ["nullable",Rule::unique("customer")->ignore($id)],
            "email" => ["nullable","email",Rule::unique("customer")->ignore($id)],

            "phone" => ["nullable","regex:/^(84|0[3|5|7|8|9])+([0-9]{8})$/"],

        ]);
        $cus = CustomerModel::FindOrFail($id);
        $cus->username = $request->username;
        $cus->fullname = $request->fullname;
        $cus->dob = Carbon::parse($request->dob)->format("Y-m-d");
        $cus->gender = $request->gen;
        $cus->address = $request->address;
        $cus->identity_number = $request->identity_number;

        $cus->city = $request->city;



        $cus->phone = $request->phone;

        $cus->update();
        session()->flash("message", "Cap nhat thanh cong");

        return redirect()->to("/profile/customer/".request()->cookie("cusId"));
    }
}
