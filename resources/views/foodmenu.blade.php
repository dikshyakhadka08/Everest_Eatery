<link rel="stylesheet" type="text/css" href="/admin/assets/css/paginatefoodmenu.css">  

@extends('layout.homelayout')
<!-- ***** Menu Area Starts ***** -->
@section('foodmenu')
<section id="foodmenus" class="foodmenus">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Everest Eatery Menu 🍽</h1>
                    <p>Select dishes based on your preferences. 🤍</p>
                </div>
<!-- Search bar -->
<div class="search-bar"> <form action="{{url('/searchfood')}}" method="get">
    @csrf
    <input type="text" name ="searchfood" placeholder="Search Food Items" style="color:blue;">
    <!-- <button onclick="searchMenu()">Search</button> -->
<input type="submit" value="Search" class ="btn btn-sucess">
</form>
</div>

<div class="filter-dropdown">
    <form action="{{url('/filterfood')}}" method="get">
        @csrf
        <label for="filterSelect">Filter by:</label>
        <select id="filterSelect" name="filterOption">
            <option value="all">All</option>
            <option value="breakfast">Breakfast</option>
            <option value="lunch">Lunch</option>
            <option value="dinner">Dinner</option>
            <!-- Add more options if needed -->
        </select>
        <input type="submit" value="Apply" class="btn btn-primary">
    </form>
</div>

<form action="{{url('/sortMenu')}}" method="get">
    @csrf
    <label for="sortSelect">Sort by:</label>
    <select id="sortSelect" onchange="sortMenu()">
        <option value="default">Default</option>
        <option value="name_asc">Name (A-Z)</option>
        <option value="name_desc">Name (Z-A)</option>
        <option value="price_asc">Price (Low to High)</option>
        <option value="price_desc">Price (High to Low)</option>
        <!-- Add more options if needed -->
    </select>
    <input type="submit" value="Apply" class="btn btn-primary">
</div>



<div class="food-menu-items row">
            <!-- Loop through menu items and display content -->
                @foreach($data as $item)
                    <div class="col-lg-4 mb-4">
                    <br><br><br>     
                        <!-- Form for each menu item -->
                        <form action="{{ url('/addcart', $item->id) }}" method="post">
                            @csrf
                            <div class="foodmenus-item">
                                <div class="item-box">
                                    <!-- Item image -->
                                    <div class="item-image">
                                        <img src="/foodpicture/{{ $item->Image }}" alt="{{ $item->Items }}" class="food-image">
                                    </div>
                                    <!-- Item details -->
                                    <div class="item-details">
                                        <h4><b>{{ $item->Items }}</b></h4>
                                        <p>{{ $item->Category }}🛎️</p>
                                        <p>{{ $item->Details }}</p>
                                        
                                        <div class="foodprice">
                                            <span>Price: {{ $item->Price }}$</span>
                                        </div>
                                        <div class="foodprice">
                                            <input type="number" name="quantity" min="1" value="1">
                                            <input type="submit" value="Add to Cart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
               
                    </div>
                @endforeach
            </div> 
            
            </div>
            <div class="pagination">
                {{$data->links()}}
            </div>

        </div>
    </section>
    @endsection
