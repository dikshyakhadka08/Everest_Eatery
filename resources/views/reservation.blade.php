<section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Booking Reservation Or Just walking to our Resturant</h2>
                        </div>
                        <p>Have any questions or special requests? Feel free to get in touch with us.<br>
<small>Please use the given contact numbers or mail us for further moe details.</small></p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">+977-9837468792</a><br><a href="#">+977-9862409992</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">eateryeverest8@gmail.com</a><br><a href="#">dikshya152207@gmail.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action=" {{url('tablereserve')}}" method="post">
                        @csrf  
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Table Reservation</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                            <input type="number" name="guestuser" placeholder="Number of Guests" min="0" style="width: 100%;">
                            </div>
                            <div class="col-lg-6">
                                <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>
                            <div class="col-md-6 col-sm-12">
                            <input type ="time" name ="time">
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <script>
               document.getElementById('phone').addEventListener('input', function (e) {
            if (isNaN(this.value) || this.value.length > 10) {
               this.value = this.value.slice(0, -1);
             }
               });
        </script>


<!-- Add this script at the end of your HTML file -->
<script>
  document.getElementById('contact').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting normally


<!-- Add this script at the end of your HTML file -->
<script>
  document.getElementById('contact').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting normally

//for pop up text at top
    fetch('{{url('tablereserve')}}', {
      method: 'POST',
      body: new FormData(this),
    })
    .then(response => {
      // Check if the response is successful 
      if (response.ok) {
        // Show a success message here 
        alert('🥳 You have successfully booked a table! 🥳');

        // Reset the form after showing the success message 
        document.getElementById('contact').reset();
      } else {
        throw new Error('Network response was not ok.');
      }
    })
    .catch(error => {
      console.error('There was a problem with the fetch operation:', error);
      // Handle errors here if needed
    });
  });
</script>
