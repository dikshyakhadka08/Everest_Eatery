<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\User;
use App\Models\Menu;
use App\Models\Chef;
use App\Models\FoodOrder;
use Illuminate\Support\Facades\Gate;
use Newsletter;


class HomeController extends Controller
{
    public function index()
    {
        $count = 0;
        if(Auth::id()){
            $count = auth()->user() ? Cart::where('customerId', auth()->user()->id)->count() : 0;
            return redirect('redirects');
        }
        else
        $data = Menu::all();
        $chefdata = Chef::all();
       
      
        return view("home", compact("data", "chefdata", "count"));
    }

    public function about()
    {
        $data = Menu::all();
        $count = Auth::user() ? Cart::where('customerId', Auth::user()->id)->count() : 0;

        return view('about', compact('data', 'count'));
    }
           


    public function foodmenu()
    {
        if (Gate::allows('access-foodmenu')) {
            $data = Menu::paginate(6);
            $count = auth()->user() ? Cart::where('customerId', auth()->user()->id)->count() : 0;
            
            return view("foodmenu", compact("data", "count"));
        } else {
            return redirect('/login');
        }
    }
    

    public function redirects()
    {
        $data = Menu::all();
        $chefdata = Chef::all();
        $count = 0;

        if (Auth::check()) {
            $usertype = Auth::user()->usertype;
            if ($usertype == "1") {
                $customercount = count(User::where("usertype","==","0")->get());
                $chefcount = count(Chef::all());
                $foodcount = count(Menu::all());
              
                return view("admin.adminsHome",["foodcount"=>$foodcount,"usertype"=>"1","customercount"=>$customercount,"chefcount"=>$chefcount]);
            } 
             else if
             ($usertype == "2") {
                     $customercount = count(User::where("usertype","==","0")->get());
                     $chefcount = count(Chef::all());
                     $foodcount = count(Menu::all());

                     return view("admin.adminsHome",["foodcount"=>$foodcount,"usertype"=>"2","customercount"=>$customercount,"chefcount"=>$chefcount]);
                 } 

               else {
                $customerId = Auth::id();
                $count = auth()->user() ? Cart::where('customerId', auth()->user()->id)->count() : 0;
                $count = Cart::where('customerId', $customerId)->count();
            }
         //   dd($count);
           return view("home", ['data' => $data, 'chefdata' => $chefdata, 'count' => $count]);
        }
    }



public function confirmorder(Request $request) 
{
   
    $request->validate([
        'name' => ['required', 'string', 'max:255', 'alpha'],
        'phone' => ['required', 'max:10'],
        'address' => ['required', 'string', 'max:255']
    ]);
    
         try {
        DB::beginTransaction();

        foreach($request->foodname as $key => $foodname) {
            $data = new foodorder;
            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->username = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->save();
        }

        // Delete items from the cart
        $userId = Auth::id();
        Cart::where('customerId', $userId)->delete();

        DB::commit();

        return redirect()->back()->with('success', 'Order confirmed successfully!');
    } catch (\Exception $e) {
        DB::rollback();

        // Handle the exception as needed
        return redirect()->back()->with('error', 'Error confirming the order. Please try again.');
    }
}

        public function subscribe(Request $request) 
        {

        return redirect()->back()->with('success', 'You have successfully subscribed!');
   
    
        }
    
}
    
