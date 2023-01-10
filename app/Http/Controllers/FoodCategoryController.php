<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\foodCategory;

class FoodCategoryController extends Controller
{
    public function add(){
        $r=request();
        $insertNewCategory = foodCategory::create([
            'CategoryName' => $r -> CategoryName,
        ]);
        return view('insertNewCategory');
    }

    public function view(){
        $viewAll = foodCategory::all();
        return view('foodCategoryList') -> with('foodCategories',$viewAll);
    }

    public function delete($id){
        $deleteFoodCategory = foodCategory::find($id);
        $deleteFoodCategory -> delete();
        return redirect() -> route('foodCategoryList');
    }
}
