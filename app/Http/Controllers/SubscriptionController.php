<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription; 
use App\Models\Menu;
use App\Models\Chef;

use Spatie\Newsletter\Facades\Newsletter;   

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'emailsubscribe' => 'required|email'
        ]);

        try {
            $email = $request->emailsubscribe;

            if (Newsletter::isSubscribed($email)) {
                return redirect()->back()->with('info', 'Error: This email is already subscribed.');
            } else {
                Newsletter::subscribe($email);
                return redirect()->back()->with('success', 'You have successfully subscribed.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
