<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Everest Eatery Menu 🍽</h6>
                        <h2>Our Everest Dishes with Quality taste 🤍</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                 
            @foreach($data as $data)

            <form action="{{url('/addcart',$data->id)}}" method="post" style="background-color:orange;">
                @csrf
                <div class="item">
                         <div style="width: 300px; height: 300px; background-image:url('/foodpicture/{{ $data->Image }}');" class='card'>

                            <div class="price"><h6>{{$data->Price}}$</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$data->Items}}</h1>
                              <p class='description'>{{$data->Category}}</p><br>
                              <p class='description'>{{$data->Details}}</p>
                              <div class="main-text-button">
                                   <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                        <span style="margin-right: 20px;"></span>
                        <input type="number" name="quantity" min="1" style="width: 80px;" value="1">
<span style="margin-right: 20px;"></span>
<input type="submit" value="Add Cart" style="color: black; background-color: #ffffff; border: 0.5px solid #000000; padding: 8px 8px;">

                    </div>
                    </form>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    