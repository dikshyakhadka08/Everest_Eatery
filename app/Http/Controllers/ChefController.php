<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\Chef;



class ChefController extends Controller
{
    public function displaychef()
    {
        if(Auth::id()){

        $data=chef::all();
        return view("admin.adminchef",compact("data"));
    } else{
        return redirect('login');
    }
    }


    public function uploadchef(Request $request)
    {

    $request->validate([
        'name' => ['required', 'string', 'max:255', 'alpha'], // Only alphabetic characters allowed
        'chefskill' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
        'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif'],
    ]);

    // dd($request->validate());
    $data = new Chef;

    if ($request->hasFile('image')) {
        $image = $request->file('image');

        if ($image->isValid()) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('chefpicture', $imagename);

            $data->image = $imagename;
            $data->name = $request->name;
            $data->chefskill = $request->chefskill;

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


    public function updatechef($id){
    $data=chef::find($id);
    return view("admin.updatechef",compact("data"));
    } 

    public function updatedadminchef(Request $request,$id){
        $data=chef::find($id);
           if ($request->hasFile('image')) {
               $image = $request->file('image');
               if ($image->isValid()) {
                   $imagename = time().'.'.$image->getClientOriginalExtension();
                   $image->move('chefpicture', $imagename);
            
                   $data->image = $imagename;
                   $data->name = $request->name;
                   $data->chefskill = $request->chefskill;
                  
            
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

            
    public function  deletechef($id){
        $data=chef::find($id);
        $data-> delete();
        return redirect()->back();
    }
    }
       
 
