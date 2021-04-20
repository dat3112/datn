<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class GenneralController extends Controller
{
    public function __construct()
    {
       $category = Category::where('is_active',1)->orderBy('position', 'ASC')->orderBy('id', 'DESC')->limit(8)->get();
       $this->categories = $category;
       view()->share([
           'category'=>$category,
           
       ]);
           
       
    }
}
