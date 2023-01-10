<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\item;
use App\Models\foodCategory;
use App\Models\cart;
use Auth;
use Session;

class CartController extends Controller
{
    public  function _construct()
    {
        $this->middleware('auth');

    }

    public function add(){
        $r = request();
        $add = cart::create([
            'quantity'=>$r->quantity,
            'orderID'=>'',
            'itemId' => $r -> id,
            'userID' => Auth::id(),
        ]);
        Session::flash('success',"Item added to your cart!");
        return redirect()->route('itemPage');
    }

    public function showMyCart(){
        $cart = DB::table('carts') -> leftjoin('items','items.id','=','carts.itemId') -> select('carts.quantity as cartQty', 'carts.id as cid', 'items.*') -> where('carts.orderID', '=', '') -> where('carts.userID', '=', Auth::id()) -> get();
        // SQL: select my_carts.quantity as cartQty,my_cart.id as cid ,products.* from my_carts left join products on products.id=my_carts.id where my_carts.orderID='' and my_carts.userID='Auth::id()'

        return view('cart') -> with('carts', $cart);
    }

    public function cartItem(){
        $cartItem=0;
        $noItem=DB::table('carts')
        ->leftjoin('items','items.id','=','carts.itemID')
        ->select(DB::raw('COUNT(*) as count_item'))
        ->where('carts.orderID','=','')
        ->where('carts.userID','=',Auth::id())
        ->groupBy('carts.userID')
        ->first();
        if($noItem){
            $cartItem=$noItem->count_item;
        }
        Session()->put('cartItem',$cartItem);
    }

    public function delete($id){
        $deleteItem=cart::where('itemID',$id)->delete();
        Session::flash('success','Item was remove successfully!');
        return redirect()->route('cart');
    }

    public function view(){

        $todayDate = now();
        
        $view = cart::whereDate('created_at',$todayDate)->paginate(100);
        return view('prepareList') -> with('carts',$view);
    }
}
