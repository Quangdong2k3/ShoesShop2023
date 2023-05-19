<?php

namespace App\Http\Controllers;

use App\Models\ShoeSizeModel;
use App\Models\ShoesModel;
use Illuminate\Http\Request;

class WomenController extends Controller
{
    public function index()
    {
        $shoes = ShoesModel::where("gender", "=", "0")->get();
        $brand = $this->brand_relate();
        $size = $this->size_filter();
        return view("client.womenone", compact("shoes", "brand", "size"));
    }
    public function WomenBrandShoes(string $id)
    {
        $gen = 0;
        $brand = $this->brand_relate();
        $size = $this->size_filter();

        $shoes = ShoesModel::whereRaw("gender = " . $gen)->whereRaw("brand_id=" . $id)->get();
        return view("client.womenone", compact("shoes", "brand", "size"));
    }
    public function WomenSizeFilter(string $id)
    {
        $gen = 0;
        $brand = $this->brand_relate();
        $size = $this->size_filter();

        $shoes = ShoesModel::join('shoes_size', "shoes.id", "=", "shoes_size.shoes_id")->whereRaw("gender = " . $gen)->whereRaw("size=" . $id)->get();
        return view("client.womenone", compact("shoes", "brand", "size"));
    }
    public function brand_relate()
    {
        return ShoesModel::join('brand', "shoes.brand_id", "=", "brand.brand_id")->where("gender", "=", "0")->get();
    }
    public function size_filter()
    {
        return ShoesModel::join('shoes_size', "shoes.id", "=", "shoes_size.shoes_id")->where("shoes.gender", "=", "0")->orderBy("size","asc")->distinct("size")->get(["size"]);
    }
}
