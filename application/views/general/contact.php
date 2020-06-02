 <!-- Start Banner -->
        <div class="inner-banner contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="content text-center full-width">
                            <h1>Contact Us</h1>
                             <ul>
                        <li class="active"><a href="<?= site_url('home/index')?>">Home</a> <i class="fa fa-angle-right"></i> <a href="<?= site_url('home/contact')?>">Contact</a></li>
                    </ul>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        
     
 <!-- Start Contact Us -->
        <section class="form-wrapper padding-lg">
            <div class="container">
                <?=$this->session->flashdata('msg') ?>
                 <div class="row">
                    <form name="contact-form" id="ContactForm" method="post" action="<?= site_url('home/contact')?>">
                          <h4 class="text-danger">Send Message</h4><br/>
                          <div class="col-md-6">
                               <div class="form-group">
                                   <input type="text"required  name="name" class="form-control" placeholder="Name *.." >
                               </div>
                          </div>
                          <div class="col-md-6">
                               <div class="form-group">
                                   <input type="email" required name="email" class="form-control" placeholder="Email *.." >
                               </div>
                          </div>
                          <div class="col-md-12">
                               <div class="form-group">
                                   <textarea class="form-control" name="message" placeholder="Message..." rows="8" style="resize:none;"></textarea>
                               </div>
                          </div>
                          <div class="col-md-offset-6 col-md-2">
                               <div class="form-group">
                                  <button type="submit" class="btn btn-md btn-block">Submit</button>
                               </div>
                          </div>
                    </form>
                 </div>
            </div>
        </section>
        <!-- end Contact Us --> 

        <!-- Start Have Questions -->
        <section class="our-impotance adrs-info have-question padding-lg">
            <div class="container">
                <h2>Still have questions?</h2>
                <ul class="row">
                    <li class="col-sm-3 equal-hight">
                        <div class="inner"> <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h3>Central Office</h3>
                            <p>B-141/14, Amrit Puri B,Garhi,East of Kailash, Delhi-110065</p>
                        </div>
                    </li>
                    <li class="col-sm-3 equal-hight">
                        <div class="inner"> <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h3>Home</h3>
                            <p>Padra Bauliya , Post-Nakahara Dist- Mirzapur, Uttar Pradesh</p>
                        </div>
                    </li>
                    <li class="col-sm-3 equal-hight">
                        <div class="inner"> <i class="fa fa-map-marker" aria-hidden="true"></i>
                             <h3>Zonal office:</h3>
                            <p>Patharahiya Road, Inside of Vidhayak (Chhanbey) Awas, Near Vikash Bhawan Danghar Mirzapur 231001, Uttar Pradesh</p>
                        </div>
                    </li>
                    <li class="col-sm-3 equal-hight">
                        <div class="inner"> <i class="fa fa-mobile" aria-hidden="true"></i>

                            <h3>Call Us on</h3>
                            <p>+919795062905 / +919473636399</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Have Questions --> 
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7OIFvK1-udIFDgZwvY7FVTFHMHipNy6Y&callback=initMap"
    async defer></script>
    <script>
      var map;
      function initMap() {
          var myLatLng = {lat: 26.636990, lng: 85.579350};

          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 8,
            center: myLatLng
          });

          var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
          });
        }
    </script>
