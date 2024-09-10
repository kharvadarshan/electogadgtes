<!DOCTYPE html>
<html lang="en">
<head>   
 @include('home.css')
</head>

<body>
    <!-- Topbar Start -->
      @include('home.topbar')
    <!-- Topbar End -->

    <!-- Navbar Start -->
      @include('home.navbar')
    <!-- Navbar End -->

    <!-- Carousel Start -->
     
    <!-- Carousel End -->

    <!-- Featured Start -->
    
    <!-- Featured End -->

    <!-- Categories Start -->  <!-- Categories End -->

    <!-- Products Start -->
    
    <!-- Products End -->

    <!--- Offer start -->
     

    <!-- Vendor Start -->
       
    <!-- Vendor End -->
    <!-- Comment Form 1 - Bootstrap Brain Component -->
    <section class="bg-light py-3 py-md-5">
    <div class="container">
      <h1 style="color:#0B0BEA;">Contact Us</h1>
      <p class="text-dark">Get in touch and let us know how we can help</p>
      <div class="row w-100 d-flex flex-row">
        <div class="col-lg-6 d-flex flex-column">
          <div class="d-flex flex-column m-2">
            <h4><span style="font-size:35px; "><i class="fa-solid fa-location-dot text-info m-2 mr-5" ></i></span>OUR MAIN OFFICE</h4>
            <p class="ml-5" style="padding-left:34px; margin-top:-15px;">28 Jackson Blvd Ste 1020 Chicago IL 60604-2340</p>
            
          </div>
          <div class="d-flex flex-column m-2">
            <h4><span style="font-size:35px;"><i class="fas fa-phone-volume text-info m-2 mr-5"></i></span>PHONE NUMBER</h4>
            <P class="ml-5" style="padding-left:34px; margin-top:-15px;">234-9876-5400 OR 333-0123-4567 (toll free)</P>
            
          </div>
          <div class="d-flex flex-column m-2">
            <h4 ><span style="font-size:35px;"><i class="fa-solid fa-envelope text-info m-2 mr-5"></i></span>EMAIL</h4>
            <a href="" class="ml-5" style="padding-left:41px; margin-top:-15px; text-decoration-line: underline;text-decoration-color:blue; color:blue;">electo24@gmail.com</a>
            
          </div>
          <div class="d-flex flex-column m-2">
            <h4 class="ml-3 mt-4">FOLLOWS ON</h4>
            <div class="d-flex flex-row">
            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary rounded-pill m-2">
                          <a href="#" class="fa fa-facebook text-decoration-none m-1"></a>
                  </button>
      
                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary rounded-pill m-2">
                    <a href="#" class="fa fa-twitter text-decoration-none m-1"></a>
                  </button>
      
                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary rounded-pill m-2 ">
                    <a href="#" class="fa fa-linkedin text-decoration-none m-1"></a>
                  </button>
                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary rounded-pill m-2">
                    <a href="#" class="fa fa-google text-decoration-none m-1"></a>
                  </button>
                  
            </div>
            <p class="m-3" >@2018 privacy policy</p>
          </div>
        </div>
        <div class="col-lg-5  ml-3 border border-dark pt-4" style="margin-top:-20px;">
            <div>
            <p style="font-size:20px; ">Great vision without great people is irrelevant.</p>
            <p style="font-size:20px; margin-top:-20px;">Let's work together.</p>
            </div>
          <form class="d-flex flex-column m-3">
            
            <div class="d-flex flex-row m-2 ">
              <label for="name" 
              style="display:inline-block;
                     width:200px;
                    font-size: 20px!important;"
              >Name</label><br>
               <input type="text" style ="width:300px; height:40px;" name="name"  >
            </div>
            <div class="d-flex flex-row m-2">
              <label for="email"
              style="display:inline-block;
                     width:200px;
                    font-size: 20px!important;"
              >Email</label><br>
               <input type="text" style ="width:300px; height:40px;" name="email" >
            </div>

            <div class="d-flex flex-row m-2">
              <label for="message"
              style="display:inline-block;
                     width:200px;
                    font-size: 20px!important;"
              >Message</label><br>
              <textarea name="message"  style="width:300px; height:100px;"></textarea>
            </div>
            <div class="d-flex flex-row m-2 justify-content-center ">
             <input type="button" class="btn btn-primary text-dark mt-4" style="font-size:20px; width:150px;"value="Send">
            </div>

          </form>
        </div>
      </div>
    </div>
      
  </section>
    <!-- comment end -->
    <!-- Footer Start -->
        @include('home.footer')
    <!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-danger back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->
  @include('home.js')
    
</body>

</html>