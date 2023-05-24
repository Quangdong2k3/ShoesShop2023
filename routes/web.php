<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\Cart;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShoesCategoryController;
use App\Http\Controllers\ShoesImagesController;
use App\Http\Controllers\WomenController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, "index"])->name('home');
Route::group(['middleware' => ['AdminLogin']], function () {
    Route::get('/dashboard',    [AdminController::class, "dashboard"])->name('dashboard');
    Route::get('/admin',    [AdminController::class, "index"]);
    Route::get('/logoutAdmin',    [AdminController::class, "logoutAdmin"])->name('logout');
    Route::get('/admin/orderdetails/showOrderdetail', [OrderController::class, "index"])->name('Order');
    Route::get('/admin/order_detail/{id}',    [OrderController::class, "show"]);
    Route::post('/order_status/{id}', [CheckoutController::class, "Order_status"])->name('Order_status');

    //discount
    Route::get('/admin/discount
    ', [DiscountController::class, "index"])->name('discount_show');
    Route::post('/admin/discount/saveDiscount
    ', [DiscountController::class, "storeAndUpdate"])->name('discount.addUpdate');

    Route::get('/admin/discount_list
    ', [DiscountController::class, "fetchDiscount"])->name('discount.list');
    Route::get('/admin/discount/edit/{id}
    ', [DiscountController::class, "edit"])->name('discount.edit');
    Route::delete('/admin/discount/deleteDiscount/{id}', [DiscountController::class, "destroy"])->name('discount.delete');
    //statistic
    Route::get('/statistic/filter', [AdminController::class, "statisticFilter"]);
   
});
Route::group(['middleware' => ['AdminLogedIn']], function () {
    Route::get('/AdminLogin',    [AdminController::class, "Beforelogin"])->name("login");
});
Route::post('/afterLogin',    [AdminController::class, "login"]);





//category
Route::get('/admin/categories/showCategory',    [CategoryController::class, "showListCategory"])->name('Category');
Route::get('/editCategory/{id}',    [CategoryController::class, "editCategory"]);
Route::get('/fetchCategory',    [CategoryController::class, "fetchCategory"]);

Route::get('/admin/categories/addcategory',    [CategoryController::class, "addCategory"])->name("addCategory");

Route::post('/admin/categories/saveCategory',    [CategoryController::class, "saveCategory"]);
Route::patch('/admin/categories/updateCategory/{id}',    [CategoryController::class, "updateCategory"])->name("category.update");
Route::delete('/admin/categories/deleteCategory/{id}',    [CategoryController::class, "deleteCategory"]);


//brand
Route::get('/admin/brands/showBrand',    [BrandController::class, "index"])->name("Brand");
Route::get('/admin/brands/editBrand/{id}',    [BrandController::class, "edit"]);
Route::get('/admin/brands/addBrand',    [BrandController::class, "create"])->name("addBrand");

Route::post('/admin/brands/saveBrand',    [BrandController::class, "store"]);
Route::patch('/admin/brands/updateBrand/{id}',    [BrandController::class, "update"]);
Route::delete('/admin/brands/deleteBrand/{id}',    [BrandController::class, "destroy"]);

//shoes

Route::get('/admin/shoes/showShoes',    [ShoesCategoryController::class, "index"]);
Route::get('/admin/shoes/editShoes/{id}',    [ShoesCategoryController::class, "edit"]);
Route::get('/admin/shoes/addShoes',    [ShoesCategoryController::class, "create"]);

Route::post('/admin/shoes/saveShoes',    [ShoesCategoryController::class, "store"]);
Route::patch('/admin/shoes/updateShoes/{id}',    [ShoesCategoryController::class, "update"]);
Route::delete('/admin/shoes/deleteShoes/{id}',    [ShoesCategoryController::class, "destroy"]);


//shoespic
Route::get('/admin/shoes/shoespic',    [ShoesImagesController::class, "index"]);
Route::get('/admin/shoes/addshoespic/{id}',    [ShoesImagesController::class, "create"]);
Route::get('/admin/shoes/addshoespicOne',    [ShoesImagesController::class, "createOne"])->name("addPicture");

Route::post('/admin/shoes/saveShoespic',    [ShoesImagesController::class, "SaveImage"]);

Route::get('/admin/shoes/editShoespic/{id}',    [ShoesImagesController::class, "edit"]);
Route::patch('/admin/shoes/updateShoespic/{id}',    [ShoesImagesController::class, "update"]);
Route::delete('/admin/shoes/deleteShoespic/{id}',    [ShoesImagesController::class, "destroy"]);


//shoesSize
Route::get('/admin/shoes/SizeShoes',    [ShoesCategoryController::class, "shoesSize"])->name("size");

Route::get('/admin/shoes/addSizeShoes',    [ShoesCategoryController::class, "createSizeShoes"])->name("addsize");
Route::post('/admin/shoes/saveShoesSize',    [ShoesCategoryController::class, "saveSizeShoes"]);

Route::get('/admin/shoes/editShoesSize/{id}',    [ShoesCategoryController::class, "editSizeShoes"]);
Route::post('/admin/shoes/updateShoesSize/{id}',    [ShoesCategoryController::class, "updateSizeShoes"]);



//employees
Route::group(["middleware" => ['AdminRole']], function () {
    Route::get('/admin/employees/showEmployees',    [EmployeeController::class, "index"]);
    Route::get('/admin/employees/editEmployee/{id}',    [EmployeeController::class, "edit"]);
    Route::get('/admin/employees/addEmployee',    [EmployeeController::class, "create"]);

    Route::post('/admin/employees/saveEmployee',    [EmployeeController::class, "store"]);
    Route::patch('/admin/employees/updateEmployee/{id}',    [EmployeeController::class, "update"]);
    Route::delete('/admin/employees/deleteEmployee/{id}',    [EmployeeController::class, "destroy"]);

    //role
    Route::post("/admin/employees/update_roles/{id}", [AdminController::class, "updateRole"]);
});






//Customer

Route::get('/admin/customers/showCustomers',    [CustomerController::class, "index"])->name('Customers');

Route::delete('/admin/customers/deleteCustomer/{id}',    [CustomerController::class, "destroy"]);

Route::get('/mail/sendMail',    [MailController::class, "sendMail"]);




//order 






// <<<<<<< HEAD:routes/web.php
Route::delete('/admin/orderdetails/deleteOrderdetail/{id}',    [OrderController::class, "destroy"]);
// =======

//Men Page
Route::get('/men', [HomeController::class, "MenShoes"])->name('men');

//Product Detail Page
Route::get('/product_detail', function () {
    return view('client.product_detail');
})->name('product_detail');

//Women Page
Route::get('/women', [WomenController::class, "index"])->name('women');
Route::get('/women/women_brand/{id}', [WomenController::class, "WomenBrandShoes"]);
Route::get('/women/size_filter/{id}', [WomenController::class, "WomenSizeFilter"]);


//About Page
Route::get('/about', function () {
    return view('client.about');
})->name('about');





//Contact Page
Route::get('/contact', function () {
    return view('client.contact');
})->name('contact');

//detail_product
Route::get('/detail-product/{id}', [HomeController::class, "ProductDetai"]);





//Home Page
Route::get('/welcome', [HomeController::class, "index"]);
Route::get('/home/all_product', [HomeController::class, "all_product"]);


// >>>>>>> 1b91cd5de4c098db1d90469263b80cee649e8b7f:Đông/routes/web.php

//search

Route::get('/search', [HomeController::class, "search"])->name('search');

//Login Client
Route::group(["middleware" => ["CustomerLogedIn"]], function () {
    Route::get('/Customer/Login', [HomeController::class, "login"]);
    Route::get('/customers/RegisterCustomers',    [CustomerController::class, "create"])->name('RegisterCustomers');
});

Route::post('/customers/Register',    [CustomerController::class, "store"])->name('customers.add');

Route::group(["middleware" => ["CustomerLogin"]], function () {
    Route::get('/Customer/Logout', [HomeController::class, "logout"]);
    // Add to wishlist Page
    Route::get('/add_to_wishlist', function () {
        return view('client.add_to_wishlist');
    })->name('add_to_wishlist');

    //Register Client
    //countCartOrder

    Route::get('/countCartOrder', [HomeController::class, "countCartOrder"]);

    //discount




    Route::get('/Customer/editProfile', [CustomerController::class, "edit"]);
    //discount_rate
    Route::post('/discount_rate', [Cart::class, "discount_rate"]);

    // profile
    Route::get('/profile/customer/{id}', [ProfileController::class, "profile"]);
    Route::get('/profile/edit/{id}', [ProfileController::class, "edit"]);
    Route::post('/profile/customer/update/{id}', [ProfileController::class, "update"]);

    // /profile/edit/{{request()->cookie('cusId')
    //upload_image_profile
    Route::PATCH('/profile/customer/upload/avatar/{id}', [ProfileController::class, "uploadImageProfile"]);
    //Order Complete Page
    Route::get('/order_complete', [CheckoutController::class, "Done"])->name('order_complete');

    //Order client Page
    Route::get('/my_order', [CheckoutController::class, "myOrder"])->name('My_Order');

    //Checkout Page
    Route::get('/checkout', [CheckoutController::class, "index"])->name('checkout');
    Route::post('/checkout/order', [CheckoutController::class, "checkoutTwo"]);
    Route::post('/checkout/orderdetail/{id}', [CheckoutController::class, "checkoutThree"]);

    //Cart Page
    Route::get('/cart', [Cart::class, "index"])->name('cart');
    // Route::get('/countCartOrder', [HomeController::class, "countCartOrder"])->name("countCartOrder");

    Route::post('/cart/addCart', [Cart::class, "addCart"])->name("cart.add");
    Route::patch('/Cart/UpdateCart/{id}', [Cart::class, "UpdateCart"]);
    Route::delete('/Cart/DeleteCart/{id}', [Cart::class, "DeleteCart"]);

    
});

Route::post('/Customer/SignIn', [HomeController::class, "SignIn"]);
