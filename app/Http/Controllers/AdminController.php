<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Menu;
use App\Models\FoodOrder;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function customer(){
        $data =user::paginate(6);
        return view("admin.customer",compact("data"));
    }

    public function menu(){
        $data =menu::all();
        
        return view("admin.menu",compact("data"));
    }

    public function import(Request $request){
        $request->validate([
            'items' => ['required', 'string', 'max:255', 'alpha'],
            'category' => ['required', 'string', 'max:255', 'alpha'],
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'details' => 'required|max:255',
        ]);
        $data = new menu;
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        if ($image->isValid()) {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move('foodpicture', $imagename);

            $data->Image = $imagename;
            $data->Items = $request->items;
            $data->Category = $request->category;
            $data->Price = $request->price;
            $data->Details = $request->details;

            $data->save();
            return redirect()->back();
        } else {
            // Handle case if file is not valid
            return redirect()->back()->with('error', 'Invalid file');
        }
    } else {
        // Handle case if no file was uploaded
        return redirect()->back()->with('error', 'No file uploaded');
    }
}
 public function deletemenu($id){
    $data=menu::find($id);
    $data->delete();
    return redirect()->back();
 }

    public function deletecustomer($id){
        $data =user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatemenu($id){
        $data =menu::find($id);
        return view("admin.updatemenu",compact("data"));
    }
    public function updated(Request $request,$id){
        $data=menu::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($image->isValid()) {
                $imagename = time().'.'.$image->getClientOriginalExtension();
                $image->move('foodpicture', $imagename);
    
                $data->Image = $imagename;
                $data->Items = $request->items;
                $data->Category = $request->category;
                $data->Price = $request->price;
                $data->Details = $request->details;
    
                $data->save();
                return redirect()->back();
            } else {
                // Handle case if file is not valid
                return redirect()->back()->with('error', 'Invalid file');
            }
        } else {
            // Handle case if no file was uploaded
            return redirect()->back()->with('error', 'No file uploaded');
        }
    
}

        public function ordergiven(){
        $data =foodorder::paginate(6);
        return view('admin.ordergiven',compact('data'));
}


    public function search(Request $request){
        $search = $request->search;
        $data = foodorder::where('username', 'LIKE', '%'.$search.'%')
                    ->orWhere('foodname', 'LIKE', '%'.$search.'%')
                    ->orWhere('address', 'LIKE', '%'.$search.'%')
                    ->paginate(6); // Adjust the pagination limit as needed

    return view('admin.ordergiven', compact('data'));
}
}