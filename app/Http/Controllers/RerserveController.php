<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Models\Reservation;
 Use App\Models\User;
 use Illuminate\Support\Facades\Auth;

 class RerserveController extends Controller
 { 
  
    public function tablereserve(Request $request)
    {
        $data = new Reservation;
        
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guestuser;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        

        $data->save();
        return redirect()->back();
    }
     public function displayreservation(){
        if(Auth::id()){
         $data = reservation::paginate(6);
         return view("admin.adminreservation",compact("data"));
     }
     else{
         return redirect('login');
         }

      
        }
 }
