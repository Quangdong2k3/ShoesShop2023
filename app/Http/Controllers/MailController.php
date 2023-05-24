<?php

namespace App\Http\Controllers;

use App\Mail\HelloMail;
use App\Models\CustomerModel;
use App\Models\EmployeeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail()
    {
        $name = request()->cookie("namecustomer");
            $cid = request()->cookie('cusId');
            $cus = CustomerModel::find($cid);
            $email = $cus->email;
            Mail::to($email)->send(new HelloMail($name));
        return view("welcome");
    }
}
