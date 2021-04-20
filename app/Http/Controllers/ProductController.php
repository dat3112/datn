<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Product_images;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Product::latest()->paginate(10);
        $data->links();
        return view('admin.Product.index',['dat'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Product::all();
        $category= Category::all();
        return view('frontend.profile',['dat'=>$data, 'category' =>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            // khoi tao model
            $product = new Product();
            $product->user_id = $request->input('user_id');
            $product->category_id = $request->input('category_id');
            $product->name = $request->input('name');

            if($request->hasFile('image')) {   //kiem tra xem file imagecos được chọn hay ko

                // get file
                $file = $request->file('image');
                //get ten
                $filename = time().'_'.$file->getClientOriginalName();
                // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
                //duong dan upload
                $path_upload = 'upload/product/';
                //upload file
                $request->file('image')->move($path_upload,$filename);

                $product->image = $path_upload.$filename;
            }

            $product->price = $request->input('price');
            $product->amount = $request->input('amount');
            $product->position = $request->input('position');

            $product->description = $request->input('description');

            $is_active = 0;
            if ($request->has('is_active')) {   //ktr is_active có ton tai ko?
                $is_active = $request->input('is_active');
            }
            $product->is_active = $is_active;


            $product->save();

            if($request->hasFile('images')) {   //kiem tra xem file imagecos được chọn hay ko
                foreach ($request->images as $singleImage) {
                    $productImages = new Product_images();
                    $productImages->position = 1;
                    $productImages->is_active = 1;

                    // get file
                    $file = $singleImage;
                    //get ten
                    $filename = time() . '_' . $file->getClientOriginalName();
                    // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
                    //duong dan upload
                    $path_upload = 'upload/productImages/';
                    //upload file
                    $file->move($path_upload, $filename);
                    $productImages->image = $path_upload . $filename;
                    $productImages->product_id = $product->id;
                    $productImages->save();
                }
            }

            return redirect()->route('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category= Category::all();
        $data = Product::all();
        $product = Product::findorFail($id);   //lấy dữ liệu từ 1 id
        return view('admin.product.edit',['dat'=>$product,
            'product' =>$data,
            'category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findorFail($id);
        $product->user_id = $request->input('user_id');
        $product->category_id = $request->input('category_id');
        $product->name = $request->input('name');
       

        if($request->hasFile('new_image')) {   //kiem tra xem file imagecos được chọn hay ko
            // xoa file cu
            @unlink(public_path($product->image));
            // get file moi
            $file = $request->file('new_image');
            //get ten
            $filename = time().'_'.$file->getClientOriginalName();
            // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
            //duong dan upload
            $path_upload = 'upload/product/';
            //upload file
            $request->file('new_image')->move($path_upload,$filename);

            $product->image = $path_upload.$filename;
        }

        $product->price = $request->input('price');

        $product->amount = $request->input('amount');
        $product->position = $request->input('position');
        $product->description = $request->input('description');

        $is_active = 0;
        if ($request->has('is_active')) {   //ktr is_active có ton tai ko?
            $is_active = $request->input('is_active');
        }
        $product->is_active = $is_active;

        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function CPost(Request $request)
    {
        {
            // khoi tao model
            $product = new Product();
            $product->user_id = $request->input('user_id');
            $product->category_id = $request->input('category_id');
            $product->name = $request->input('name');

            if($request->hasFile('image')) {   //kiem tra xem file imagecos được chọn hay ko

                // get file
                $file = $request->file('image');
                //get ten
                $filename = time().'_'.$file->getClientOriginalName();
                // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
                //duong dan upload
                $path_upload = 'upload/product/';
                //upload file
                $request->file('image')->move($path_upload,$filename);

                $product->image = $path_upload.$filename;
            }

            $product->price = $request->input('price');
            $product->amount = $request->input('amount');
            $product->position = $request->input('position');

            $product->description = $request->input('description');

            $is_active = 0;
            if ($request->has('is_active')) {   //ktr is_active có ton tai ko?
                $is_active = $request->input('is_active');
            }
            $product->is_active = $is_active;


            $product->save();

            if($request->hasFile('images')) {   //kiem tra xem file imagecos được chọn hay ko
                foreach ($request->images as $singleImage) {
                    $productImages = new Product_images();
                    $productImages->position = 1;
                    $productImages->is_active = 1;

                    // get file
                    $file = $singleImage;
                    //get ten
                    $filename = time() . '_' . $file->getClientOriginalName();
                    // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
                    //duong dan upload
                    $path_upload = 'upload/productImages/';
                    //upload file
                    $file->move($path_upload, $filename);
                    $productImages->image = $path_upload . $filename;
                    $productImages->product_id = $product->id;
                    $productImages->save();
                }
            }

            return redirect()->route('/');
        }
    }
}
