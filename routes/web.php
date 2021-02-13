<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
| Frontend route start
*/

Route::get('/', 'Frontend\PagesController@index')->name('index');
Route::get('/Contact', 'Frontend\PagesController@Contact')->name('Contact');
Route::get('/products', 'Frontend\PagesController@products')->name('Product');
Route::get('/about', 'Frontend\PagesController@about')->name('about');
Route::get('/services', 'Frontend\PagesController@services')->name('services');
Route::get('/blog', 'Frontend\PagesController@blog')->name('blog');
Route::get('/portfolio', 'Frontend\PagesController@portfolio')->name('portfolio');


// Product Details Route start
Route::get('/view_details/{slug}', 'Frontend\PagesController@products_details')->name('view_details');
Route::get('/blog_view/{slug}', 'Frontend\PagesController@blog_details')->name('blog_view');
Route::get('/category_wise_blog/{id}', 'Frontend\PagesController@category_wise_blog')->name('category_wise_blog');
Route::post('/comment/create', 'Frontend\PagesController@comment_store')->name('comment.store');


// Product Details Route End

// User route start
Route::get('user/token/{token}', 'Frontend\VerificationController@verify')->name('user.verification');
// User route end


// User Profile route Gard start
Route::get('user/dashboard/', 'Frontend\UserController@dashboard')->name('user.dashboard');
// new route
// User Profile route Gard end



// Category Details Route start
Route::get('/Category_details/','Frontend\PagesController@Category_details')->name('Cat_details');
// Category Details Route End

// Sub Category Details Route start
Route::get('/Sub_category_details/','Frontend\PagesController@Sub_category_details')->name('Sub_cat_details');
// Sub Category Details Route End

// Product Search Route start
Route::get('/Product_search/','Frontend\PagesController@Product_search')->name('Product_search');
// Product Search Route End

//Carts Start
Route::get('/carts', 'Frontend\CartsController@index')->name('carts');
Route::post('/carts/store', 'Frontend\CartsController@store')->name('carts.store');
//Carts End

/*
| Frontend route end
*/

/*
| Backend route start
*/

Route::get('/admin/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login/submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
Route::post('/admin/logout/submit', 'Auth\Admin\LoginController@logout')->name('admin.logout');


Route::get('/admin', 'Backend\AdminController@index')->name('admin.index');


// slider index,create,edit,update,delete start
Route::get('/admin/slider/create', 'Backend\SliderController@index')->name('admin.slider.create');
Route::post('/admin/slider/create', 'Backend\SliderController@store')->name('admin.slider.store');
Route::get('/admin/slider/edit/{id}', 'Backend\SliderController@edit')->name('admin.slider.edit');
Route::post('/admin/slider/edit/{id}', 'Backend\SliderController@update')->name('admin.slider.update');
Route::post('/admin/slider/delete/{id}', 'Backend\SliderController@delete')->name('admin.slider.delete');
// slider index,create,edit,update,delete end

// category index,create,edit,update,delete start
Route::get('/admin/category/create', 'Backend\CategoryController@index')->name('admin.category.create');
Route::post('/admin/category/create', 'Backend\CategoryController@store')->name('admin.category.store');
Route::get('/admin/category/edit/{id}', 'Backend\CategoryController@edit')->name('admin.category.edit');
Route::post('/admin/category/edit/{id}', 'Backend\CategoryController@update')->name('admin.category.update');
Route::post('/admin/category/delete/{id}', 'Backend\CategoryController@delete')->name('admin.category.delete');
// category index,create,edit,update,delete end

// Sub Category index,create,edit,update,delete start
Route::get('/admin/subcategory/create', 'Backend\SubCategoryController@index')->name('admin.subcategory.create');
Route::post('/admin/subcategory/create', 'Backend\SubCategoryController@store')->name('admin.subcategory.store');
Route::get('/admin/subcategory/edit/{id}', 'Backend\SubCategoryController@edit')->name('admin.subcategory.edit');
Route::post('/admin/subcategory/edit/{id}', 'Backend\SubCategoryController@update')->name('admin.subcategory.update');
Route::post('/admin/subcategory/delete/{id}', 'Backend\SubCategoryController@delete')->name('admin.subcategory.delete');
// Sub Category index,create,edit,update,delete end

// Brand index,create,edit,update,delete start
Route::get('/admin/brand/create', 'Backend\BrandController@index')->name('admin.brand.create');
Route::post('/admin/brand/create', 'Backend\BrandController@store')->name('admin.brand.store');
Route::get('/admin/brand/edit/{id}', 'Backend\BrandController@edit')->name('admin.brand.edit');
Route::post('/admin/brand/edit/{id}', 'Backend\BrandController@update')->name('admin.brand.update');
Route::post('/admin/brand/delete/{id}', 'Backend\BrandController@delete')->name('admin.brand.delete');
// Sub Category index,create,edit,update,delete end

// Product index,create,edit,update,delete start
Route::get('/admin/product/create', 'Backend\AdminproductController@index')->name('admin.product.create');
Route::get('/admin/product/edit/{id}', 'Backend\AdminproductController@edit')->name('admin.product.edit');
Route::post('/admin/product/create', 'Backend\AdminproductController@store')->name('admin.product.store');
Route::post('/admin/product/edit/{id}', 'Backend\AdminproductController@update')->name('admin.product.update');
Route::post('/admin/product/delete/{id}', 'Backend\AdminproductController@delete')->name('admin.product.delete');
// Product index,create,edit,update,delete end

// blogProduct index,create,edit,update,delete start
Route::get('/admin/blogproduct/create', 'Backend\AdminblogproductController@index')->name('admin.blogproduct.create');
Route::get('/admin/blogproduct/edit/{id}', 'Backend\AdminblogproductController@edit')->name('admin.blogproduct.edit');
Route::post('/admin/blogproduct/create', 'Backend\AdminblogproductController@store')->name('admin.blogproduct.store');
Route::post('/admin/blogproduct/edit/{id}', 'Backend\AdminblogproductController@update')->name('admin.blogproduct.update');
Route::post('/admin/blogproduct/delete/{id}', 'Backend\AdminblogproductController@delete')->name('admin.blogproduct.delete');
// blogProduct index,create,edit,update,delete end


// Blogcategory index,create,edit,update,delete start
Route::get('/admin/blogcategory/create', 'Backend\BlogcategoryController@index')->name('admin.blogcategory.create');
Route::post('/admin/blogcategory/create', 'Backend\BlogcategoryController@store')->name('admin.blogcategory.store');
Route::get('/admin/blogcategory/edit/{id}', 'Backend\BlogcategoryController@edit')->name('admin.blogcategory.edit');
Route::post('/admin/blogcategory/edit/{id}', 'Backend\BlogcategoryController@update')->name('admin.blogcategory.update');
Route::post('/admin/blogcategory/delete/{id}', 'Backend\BlogcategoryController@delete')->name('admin.blogcategory.delete');
// category index,create,edit,update,delete end


// our_team index,create,edit,update,delete start
Route::get('/admin/our_team/create', 'Backend\OurTeamController@index')->name('admin.our_team.create');
Route::get('/admin/our_team/edit/{id}', 'Backend\OurTeamController@edit')->name('admin.our_team.edit');
Route::post('/admin/our_team/create', 'Backend\OurTeamController@store')->name('admin.our_team.store');
Route::post('/admin/our_team/edit/{id}', 'Backend\OurTeamController@update')->name('admin.our_team.update');
Route::post('/admin/our_team/delete/{id}', 'Backend\OurTeamController@delete')->name('admin.our_team.delete');
// our_team index,create,edit,update,delete end


// client_reviews index,create,edit,update,delete start
Route::get('/admin/client_reviews/create', 'Backend\ClientReviewController@index')->name('admin.client_reviews.create');
Route::get('/admin/client_reviews/edit/{id}', 'Backend\ClientReviewController@edit')->name('admin.client_reviews.edit');
Route::post('/admin/client_reviews/create', 'Backend\ClientReviewController@store')->name('admin.client_reviews.store');
Route::post('/admin/client_reviews/edit/{id}', 'Backend\ClientReviewController@update')->name('admin.client_reviews.update');
Route::post('/admin/client_reviews/delete/{id}', 'Backend\ClientReviewController@delete')->name('admin.client_reviews.delete');
// client_reviews index,create,edit,update,delete end



//API Route category id Wise Sub category name show
Route::get('get-category/{id}', function($id){
  return json_encode(App\Sub_category::where('category_id', $id)->get());
});

/*
| Backend route End
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
