<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as ValidationValidator;

class CategoryController extends Controller
{
    public function showListCategory()
    {
        $category = CategoryModel::all();
        $pageTitle = "Danh sách Category";
        return view("admin.categories.category", compact("category", "pageTitle"));
    }
    public function editCategory(string $id)
    {
        // $category = DB::table('category')->where("category_id", "=", $id)->select("*")->first();
        // $des = html_entity_decode($category->description);
        // $pageTitle = "Cập nhật Category";
        // return view("admin.categories.editcategory", compact("category", "pageTitle", "des"));
        $cate = CategoryModel::FindOrFail($id);
        return response()->json($cate);
    }
    public function updateCategory(string $id, Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";
        // $mess = [
        //     "name.required" => "Tên category không được để trống",
        //     "description.required" => "Description không được để trống",
        // ];
        // $valid = $request->validate([
        //     "name" => "required",
        //     "description" => "required",
        //     "avatar" => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000"
        // ]);
        $cate = CategoryModel::find($id);
        $cate->category_name = $request->name;
        $cate->description = $request->description;
        if ($request->hasFile('avatar')) {

            $destination = "public/image" . $cate->c_avatar;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/image/', $filename);
            $cate->c_avatar = $filename;
        }
        Session()->flash("success", "Cập nhật category thành công");

        $cate->save();
        return redirect()->action([CategoryController::class, "showListCategory"]);
    }
    public function addCategory(Request $request)
    {
        $pageTitle = "Thêm Category";
        return view("admin.categories.addcategory")->with("pageTitle", $pageTitle);
    }
    public function saveCategory(Request $request)
    {
        
        if ($request->id === "" || $request->id === null) {
            $validator = Validator::make($request->all(), [
                "name" => "required",
                "description" => "required",
                "c_avatar" => "nullable|image|mimes:jpg,png,jpeg,gif,svg"
            ],[
                "name.required"=>"Ten the loai khong duoc de trong",
                "description.required"=>"description isn't empty",
                "c_avatar.image"=>"Avatar is a file img",

            ]);
            if (!$validator->passes()) {
                
                return response()->json(['code' => 0, "error" => $validator->errors()->toArray()]);
            } else {
                $cate = new CategoryModel();
                $cate->category_name = $request->name;
                $cate->description = $request->description;
                $cate->c_avatar = $request->c_avatar;
                if ($request->hasFile('c_avatar')) {
                    $file = $request->file('c_avatar');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                    $file->move('public/image/', $filename);
                    $cate->c_avatar = $filename;
                }
                $cate->save();
                return response()->json(['code'=>1,'success' => '<p class="alert alert-success">Them thanh cong</p>']);
            }
        } else {
            $cate = CategoryModel::findOrFail($request->id);
            $cate->category_name = $request->name;
            $cate->description = $request->description;
            $cate->c_avatar = $request->c_avatar;

            if ($request->hasFile('c_avatar')) {

                $destination = "public/image" . $cate->c_avatar;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('c_avatar');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/image/', $filename);
                $cate->c_avatar = $filename;
            }
            $cate->update();
            return response()->json(['success' => '<p class="alert alert-success">Cap nhat thanh cong</p>']);
        }
    }

    public function deleteCategory(string $id)
    {
        // $cate = new CategoryModel();
        try {
            $cate = CategoryModel::findOrFail($id);
            $cate->delete();
            return response()->json(['success' => '<p class="alert alert-success">Xoa thanh cong</p>']);
        } catch (\Throwable $th) {
            return response()->json(['success' => $th]);
        }

        // Session()->flash("success", "Dữ liệu được xóa thành công!!!");
        // return redirect()->action([CategoryController::class, "showListCategory"]);


    }
    public function fetchCategory()
    {
        $o = CategoryModel::all();
        
        return response()->json(["category" => $o]);
    }
}
