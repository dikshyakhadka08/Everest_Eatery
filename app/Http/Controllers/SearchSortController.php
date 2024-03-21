<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\User;
use App\Models\Menu;
use App\Models\Chef;
use App\Models\FoodOrder;

class SearchSortController extends Controller
{
    public function searchfood(Request $request){
    $count = auth()->user() ? Cart::where('customerId', auth()->user()->id)->count() : 0;
    $searchfood = $request->searchfood;
    $data = menu::where('Items', 'LIKE', '%' . $searchfood . '%')->paginate(6); // Paginate the results, 3 items per page

    return view('foodmenu', compact('data', 'count'));
}

public function sortMenu(Request $request){
    $count = auth()->user() ? Cart::where('customerId', auth()->user()->id)->count() : 0;
    $sortOption = $request->input('sortOption');

    // Fetching data for available products only
    $query = Menu::whereNotNull('Items');

    switch($sortOption){
        case 'name_asc':
            $query->orderBy('Items', 'asc');
            break;
        case 'name_desc':
            $query->orderBy('Items', 'desc');
            break;
        case 'price_asc':
            $query->orderByRaw('CAST(price AS DECIMAL(10, 2)) ASC');
            break;
        case 'price_desc':
            $query->orderByRaw('CAST(price AS DECIMAL(10, 2)) DESC');
            break;
        default:
            $query->orderBy('id', 'asc');
            break;
    }

    $data = $query->paginate(10); // Paginate the sorted results, 3 items per page

    return view('foodmenu', compact('data', 'count'));
}


public function filterFood(Request $request){
    $count = auth()->user() ? Cart::where('customerId', auth()->user()->id)->count() : 0;
    $filterOption = $request->input('filterOption');

    // Fetching data based on filter option
    $query = Menu::whereNotNull('Items');

    if ($filterOption === 'breakfast') {
        $query->where('Category', 'Breakfast');
    } elseif ($filterOption === 'lunch') {
        $query->where('Category', 'Lunch');
    }
    elseif ($filterOption === 'dinner') {
        $query->where('Category', 'Dinner');
    }


    $data = $query->paginate(10); // Paginate the filtered results, 3 items per page

    return view('foodmenu', compact('data', 'count'));
}


}


