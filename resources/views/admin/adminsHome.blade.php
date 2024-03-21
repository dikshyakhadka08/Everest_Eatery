<title>Everest Eatery</title>
<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    
        @include("admin.adminCSS")
    </head>
    <body>
    <link rel="stylesheet" type="text/css" href="/admin/assets/css/homeadmin.css">  
        <div class="container-scroller">
            
            @include("admin.navbar")
            <div class="content" style="margin-left: 250px;">
            <div class="content-container" style="margin-left: 250px;">
    <h1>Welcome to {{$usertype == '1' ? "Admin" : "SuperAdmin"}}'s Home 🛡️</h1>
    
    <div class="statistics-section">
        
        <div class="statistic">
            <h2>Total No of Chefs</h2>
            <h3>{{$chefcount}}</h3>
        </div>

        <div class="statistic">
            <h2>Total Food Items</h2>
            <h3>{{$foodcount}}</h3>
        </div>
    </div>
</div>

        

    </div>

<!-- End Content Area -->

</div>
@include("admin.adminScript")
</body>
</html>
</x-app-layout>
