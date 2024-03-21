<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Cart;


class AddCartController extends Controller
{
    public function addcart(Request $request,$id){
        if(Auth::id()){
            $customerId=Auth::id();
            $foodId =$id;
            $quantity=$request->quantity;
            $cart =new cart;
            $cart->customerId=$customerId;
            $cart->foodId=$foodId;
            $cart->quantity=$quantity;
            $cart->save();
          return redirect()->back();  
        }
        else{
            return redirect('/login');
        }
    }

    public function displaycart(Request $request, $id) {
        $count = cart::where('customerId', $id)->count();
        if(Auth::id()==$id)
        {
    
        $cartdata = cart::select('*')->where('customerId', '=', $id)->get();
        $data = cart::where('customerId', $id)->join('menus', 'carts.foodId', '=', 'menus.id')->get();
    
        return view('displaycart', ['count' => $count, 'data' => $data, 'cartdata' => $cartdata]);
    }
    else{
        return redirect()->back();
    }
    
    }
    public function confirmOrder(Request $request) {
        // Save order details to the database
        // Assuming you remove items from the cart table after successfully confirming the order
        Cart::where('customerId', $request->customerId)->delete();
    
        return redirect()->back()->with('success', 'Order confirmed successfully!');
    }
    
    public function remove($id){
    $data=cart::find($id);
    $data->delete();
    return redirect()->back();

}
}

 