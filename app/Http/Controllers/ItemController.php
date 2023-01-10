<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\File;
use DB;
use App\Models\item;
use App\Models\foodCategory;

class ItemController extends Controller
{
    public function add(){
        $r = request();
        $image=$r->image;
        if($r->image!=''){
        $r->image->move(public_path('images'), $image->getClientOriginalName());
        //$image->move('images', $image->getClientOriginalName());
        $imageName=$r->image->getClientOriginalName();
    }

    else{
        $imageName = "empty.jpg"; 
    }

        
        

        $insertNewItem = item::create([
            'name' =>$r-> itemName,
            'description' =>$r-> description,
            'price' =>$r-> price,
            'quantity' =>$r-> quantity,
            'image' => $imageName,
            'categoryID' =>$r-> categoryID,
        ]);

        return redirect()->route('viewItemList');
    }

    public function view(){
        $viewAll = item::all();
        return view('viewItemList') -> with('items',$viewAll);
    }

    public function show(){
        $viewAll = item::all();
        return view('itemPage')->with('items',$viewAll);
    }

    public function showDetail($id){
        $viewAll = item::all()->where('id',$id);
        return view('itemInformation')->with('items',$viewAll);
    }

    public function delete($id){
        $deleteItem=item::find($id);
        $deleteItem->delete();
        return redirect()->route('viewItemList');
    }

    public function edit($id){
        $item=item::all()->where('id',$id);
        return view('editItem')->with('items',$item);
    }

    public function update(){
        $r = request();// get input value form editaCategory
        $item = item::find($r->catID);//retrieve record from MYSQL
        $item->name = $r->itemName;//binding data record from MYSQL
        $item->save();
        return redirect()->route('viewCategory');
    }
    public function searchItem(){
        $r = request();
        $keyword = $r -> keyword;
        $item = DB::table('items') -> where('name', 'like', '%'.$keyword.'%') -> get();
        return view('itemPage') -> with('items', $item);
        //select * fromm products where name like '%$keyword%'
    }

}
