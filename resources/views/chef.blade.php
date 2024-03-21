<section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Chefs</h6>
                        <h2>We offer best nepali food here</h2>
                    </div>
                </div>
            </div>


            <div class="row">
            @foreach($chefdata as $chefdata)
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" target="_blank"></i></a></li>
                               
                               
                                <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img height ="300" width ="200" src="chefpicture/{{$chefdata->image}}" alt="Chef 1">
                        </div>
                        <div class="down-content">
                            <h4>{{$chefdata->name}}</h4>
                            <span>{{$chefdata->chefskill}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
</div>
        </div>
    </section>