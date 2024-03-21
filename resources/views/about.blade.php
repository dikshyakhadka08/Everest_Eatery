@extends('layout.homelayout')

@section('about')
    <!-- ***** About Us Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h2 style ="color: orange;">About Us</h2>
                            <span>Get to Know Us</span>
                        </div>
                        <div style="font-family: Arial, sans-serif; line-height: 1.6;">
    <p style="font-size: 18px; color: #333;">
        Welcome to Everest Eatery, nestled in the heart of Bhaktapur, Nepal. We are a haven for food enthusiasts, dedicated to serving delightful meals made with love, using the finest ingredients and recipes that tell a story.
    </p>
    <p style="font-size: 18px; color: #333;">
        Our aim is to provide more than just a meal; we strive to create an experience worth cherishing. Step into our cozy ambiance and let our hospitable staff ensure a memorable dining journey for you. Join us and embark on a culinary adventure like no other, surrounded by the rich culture and heritage of Bhaktapur.
    </p>
</div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p align ="center"><b>Check our Everest Eatery location here 📍</b></p>
                    <!-- Embedding Google Map -->
                    <div id="map" style="height: 400px;"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area Ends ***** -->

    <!-- Google Maps API  -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMf5OtYXqQPFsYjQc2XFajx_XVwitfNVA&callback=initMap" async defer></script>
    <script>
    function initMap() {
        // Replace the coordinates with Bhaktapur's coordinates
        var myLatLng = { lat: 27.6710, lng: 85.4296 };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Bhaktapur, Nepal'
        });
    }
</script>

@endsection
