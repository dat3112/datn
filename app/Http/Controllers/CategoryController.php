<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::latest()->paginate(10);
        $data->links();
        return view('admin.Category.index',['dat'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        return view('admin.Category.create',['dat'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // khoi tao model
        $category = new Category();
        $category->name = $request->input('name');
        $category->parent_id = $request->input('parent_id');
        $category->position = $request->input('position');
        $is_active = 0;
        if ($request->has('is_active')) {   //ktr is_active có ton tai ko?
            $is_active = $request->input('is_active');
        }
        $category->is_active = $is_active;

        

        $category->save();

        return redirect()->route('category.index');
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
        $data = Category::all();
        $category = Category::findorFail($id);   //lấy dữ liệu từ 1 id
        return view('admin.category.edit',[
            'dat'=>$category,
            'category'=>$data
        ]);
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
        $category = Category::findorFail($id);
        $category->name = $request->input('name');
        $category->parent_id = $request->input('parent_id');

        $is_active = 0;
        if ($request->has('is_active')) {   //ktr is_active có ton tai ko?
            $is_active = $request->input('is_active');
        }
        $category->is_active = $is_active;

        $position=0;
        if ($request->has('position')){
            $position = $request->input('position');
        }
        $category->position = $position;

        $category->save();

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request){

        $keyword = $request -> input('tu-khoa');
        $slug = str::slug($keyword);
        $category = Category::where([
            ['name', 'like', '%' . $keyword . '%'],
            ['is_active','=',1]
        ])->paginate(5);

        return view('admin.category.search',[
            'category' => $category,
            'keyword' => $keyword ? $keyword : ''
        ]);

    }

    public function destroy($id)
    {
        $deleteData = category::destroy($id);
        return  redirect()->route('category.index')->with('msg','Du lieu xoa thanh cong');
    }
}
