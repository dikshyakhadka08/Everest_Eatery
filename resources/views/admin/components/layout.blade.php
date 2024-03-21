<title>Everest Eatery</title>
<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    
        @include("admin.adminCSS")
    </head>
    <body>
        <div class="container-scroller">
            @include("admin.navbar")
            <div class="content" style="margin-left: 250px;">



    </div>

<!-- End Content Area -->

</div>
@include("admin.adminScript")
</body>
</html>
</x-app-layout>
<style>
/* Reset default margins and padding */
body, h1, h2, h3, h4, h5, h6, p {
margin: 0;
padding: 0;
}

/* Global font styles */
body {
font-family: Arial, sans-serif;
font-size: 16px;
color:black;
}

/* Container styles */
.container-scroller {

height: 100vh; /* Adjust as needed */
overflow-x: hidden;
}

/* Admin Navbar styles */
.admin-navbar {
/* Define styles for your admin navigation bar */
}

/* Content Wrapper styles */
.content-wrapper {
padding: 50px; /* Adjust padding as needed */
background: #000000;
padding: 1.875rem 1.75rem;
width: 0%;
-webkit-flex-grow: 1;
flex-grow: 1;
}

/* Content styles */
.content {
background-color: #fff;
border: 1px solid #ddd;
border-radius: 5px;
padding: 20px;
margin-top: 20px; /* Adjust margin as needed */
}

/* Add more specific styles for various elements as per your design */
</style>