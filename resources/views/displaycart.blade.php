<!DOCTYPE html>
<html lang="en">

  <head>
    <base href ="/public">
  <title>Everest Eatery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Everest Eatery - Food made with love.</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    

    <link rel="stylesheet" href="assets/css/everesteatery.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                           <img src="assets/images/everestlogo.png" align="everest logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('/')}}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{url('/')}}">About</a></li>
                            <li class="scroll-to-section"><a href="foodmenu">Menu</a></li>
                            <li class="scroll-to-section"><a href="foodchef">Chefs</a></li> 
                           <li class="scroll-to-section"><a href="{{url('/')}}">Contact Us</a></li> 
                       <li>

                       @auth
                   <li class="scroll-to-section" style="background-color:orange;height: 40px; width: 120px;">
                   <a href="{{ url('/displaycart', Auth::user()->id) }}"style="white-space: nowrap;"> 
                   🛒 Cart[{{ $count }}] 
                   </a>
</li>
                   @endauth
                   @guest
                   <li class="cart-section" style="background-color:orange; height: 40px; width: 120px; white-space: nowrap;" >
                   🛒 Cart[0]
</li>
                   @endguest

                       <li>
                       @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
</li>
                <li>  @auth 
                    <x-app-layout>
                    </x-app-layout> </li>
 
                    @else
                    <li>    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                        @if (Route::has('register'))
                        <li>   <a href="{{ route('register')}}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
</li>
                        </ul>        
                        <a class='menu-trigger'>
                            <!-- <span>Menu</span> -->
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div id="top">
    <br>

    <table align="center" bgcolor="grey" style="border-collapse: collapse; width: 80%; margin-top: 20px;">
    <tr align="center" style="background-color: #333; color: white;">
        <th style ="padding:30px; border: 1px solid white;">Food Name</th>
        <th style ="padding:30px; border: 1px solid white;">Food Price</th>
        <th style ="padding:30px; border: 1px solid white;">Quantity</th> 
        <th style ="padding:30px; border: 1px solid white;">Image</th>  
        <th style ="padding:40px; border: 1px solid white;">Action</th>
        

    </tr>
    <form action="{{url('/confirmorder')}}" method="POST">
    
        @csrf
        
@foreach($data as $key=>$data)

<tr align="center" style="border-bottom: 1px solid #ddd;">
        
        <td style="border: 1px solid #ddd; padding: 10px;">

     <b>   <input type ="text" name ="foodname[]" value ="{{$data->Items}}" hidden ="">
            {{$data->Items}}</td> </b>
           <td style="border: 1px solid #ddd; padding: 10px;"> 
           <b> <input type ="text" name ="price[]" value ="{{$data->Price}}" hidden ="">
          {{$data->Price}}</td> </b>
           <td style="border: 1px solid #ddd; padding: 10px;"> 
          <b> <input type ="text" name ="quantity[]" value ="{{$data->quantity}}" hidden ="">
           
            {{$data->quantity}}</td> </b>
        <td style="border: 1px solid #ddd; padding: 10px;"><img src="/foodpicture/{{$data->Image}} "width="100" height="100"></td> 
        
          <td style="border: 1px solid #ddd; padding: 10px;"><a href="{{url('/remove',$cartdata[$key]->id)}}" class ="btn btn-warning">Remove</a></td>
   

@endforeach
</table>

<div align="center" style="margin-top: 20px;">
        <button class="btn btn-primary" type="button" id="order" style="color: black; border-radius: 8px; padding: 12px 24px;">Order Now</button>
    </div>

    <!-- Form for user details (Initially hidden) -->
    <div id="display" align="center" style="display: none; margin-top: 20px; border: 1px solid #ccc; border-radius: 8px; padding: 20px; background-color: #f9f9f9;">
        <div style="padding: 10px;">
            <label style="font-weight: bold;">Name</label>
            <input type="text" name="name" placeholder="Enter Your Name" required="" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ddd;" >
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div style="padding: 10px;">
            <label style="font-weight: bold;">Phone</label>
            <input type="number" name="phone" id="phoneInput" required="" placeholder="Phone Number" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ddd;">
         @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                @enderror 
        </div>

        <div style="padding: 10px;">
            <label style="font-weight: bold;">Address</label>
            <input type="text" name="address" placeholder="Address" required="" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ddd;">
            @error('address')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div style="padding: 10px;">
            <input class="btn btn-success" type="submit" value="Order Confirm" required="" style="color: black; padding: 12px 24px; border-radius: 8px;">
            <button id="close" type="button" class="btn btn-danger" style="color: black; padding: 12px 24px; border-radius: 8px; margin-left: 10px;">Not Ready</button>
        </div>
    </div>
</form>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="right-text-content">
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="logo">
                    <a href="#"><img src="assets/images/white-logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12">
                <div class="left-text-content">
                    <p>Copyright Everest Eatery ©2023<br>-by Dikshya Khadka</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript">
    $("#order").click(
        function()
        {
            $("#display").show();
        }
    );

    
    $("#close").click(
        function()
        {
            $("#display").hide();
        }
    );

    </script>

<script>
    document.getElementById('phoneInput').addEventListener('input', function() {
        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10); // Limits input to 10 characters
        }
    });
</script>


    <!-- jQuery -->
    <!-- <script src="assets/js/jquery-2.1.0.min.js"></script> -->
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>