<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use DB;
use Auth;
use App\Models\cart;
use App\Models\order;
use Session;

class MakePaymentController extends Controller
{
    public function paymentPost(Request $request)
    { 
	Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->sub*100,
                "currency" => "MYR",
                "source" => $request->stripeToken,
                "description" => "This payment is testing purpose of southern online",
        ]);
        
        $newOrder = order::create([
            'paymentStatus' => 'Done',
            'userID' => Auth::id(),
            'amount' => $request -> sub,
        ]);

        //get latest orderId
        $orderID=DB::table('orders')->where('userID','=',Auth::id())->orderBy('created_at','desc')->first();
        $items=$request->input('cid');
        foreach($items as $item=>$value){
            $cart=cart::find($value);
                $cart->orderID=$orderID->id;
                $cart->save();
        }
        (new CartController)->cartItem();
        return back();
    }
}
