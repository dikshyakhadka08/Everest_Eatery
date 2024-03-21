<!DOCTYPE html>
<html lang="en">

  <head>
  <base href ="/public">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                        <a href="{{url('/')}}" class="logo">
                           <img src="assets/images/everestlogo.png" align="everest logo">
                        </a>
                        <a class="menu-trigger">
                        <span>Menu</span>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('/')}}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="about">About</a></li>
                            <li class="scroll-to-section"><a href="foodmenu" class="active">Menu</a></li>
                           
                            <li class="scroll-to-section"><a href="{{url('/')}}#chefs">Chefs</a></li>

                         
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="{{url('/')}}#reservation" class="active">Contact Us</a></li> 
                 
 

                   @auth
  <li class="scroll-to-section" style="background-color:orange;height: 40px; width: 120px;">
    <a href="{{ url('/displaycart', Auth::user()->id) }}" style="white-space: nowrap;"> 
      🛒 Cart[{{ $count }}] 
    </a>
  </li>
@endauth
@guest
  <li class="cart-section" style="background-color:orange; height: 40px; width: 120px; white-space: nowrap;" >
    🛒 Cart[0]
    <!-- @isset($count) 🛒 Cart[{{ $count }}] @endisset -->
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
                    <li>    <a href="{{ route('login') }}"  class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>
                        
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
@yield('home')
@yield('foodmenu')
@yield('about')

    <!-- ***** Footer Start ***** -->
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
        <div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="subscription-form text-center">
            <h4>Subscribe to our newsletter</h4>

            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @elseif(session('info'))
                <div class="alert alert-info" role="alert">
                    {{ session('info') }}
                </div>
            @elseif(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('subscribe') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="email" class="form-control" name="emailsubscribe" placeholder="Enter your email" required="Enter your valid email address for subscription">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Subscribe</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



    </div>
</footer>

    <!-- jQuery -->
   <!--  <script src="{{ asset('js/subscription.js') }}"></script>-->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- subscription.js -->

 <!--<script src="{{ asset('js/subscription.js') }}"></script>-->

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

<script>
    function sortMenu() {
        var sortOption = document.getElementById("sortSelect").value;
        var sortValue = '';

        switch (sortOption) {
            case 'name_asc':
                sortValue = 'name_asc';
                break;
            case 'name_desc':
                sortValue = 'name_desc';
                break;
            case 'price_asc':
                sortValue = 'price_asc';
                break;
            case 'price_desc':
                sortValue = 'price_desc';
                break;
            default:
                sortValue = 'default';
                break;
        }

        window.location.href = '/sortmenu?sortOption=' + sortValue;
    }
</script>


  </body>
</html>
