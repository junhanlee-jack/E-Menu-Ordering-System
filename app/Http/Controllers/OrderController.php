<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\item;
use App\Models\foodCategory;
use App\Models\order;
use Auth;
use Session;

class OrderController extends Controller
{
    public function view(){

        $todayDate = now();
        
        $view = order::whereDate('created_at',$todayDate)->paginate(100);
        return view('orderList') -> with('orders',$view);
    }

    public function delete($id){
        $deleteItem=cart::where('id',$id)->delete();
        return redirect()->route('corderList');
    }
}
