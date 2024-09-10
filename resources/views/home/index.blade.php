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
      @include('home.carousel')
    <!-- Carousel End -->

    <!-- Featured Start -->
     @include('home.feature')
    <!-- Featured End -->

    <!-- Categories Start -->  <!-- Categories End -->

    <!-- Products Start -->
      @include('home.products')
    <!-- Products End -->

    <!-- Vendor Start -->
       @include('home.vendor')
    <!-- Vendor End -->
    <!-- Comment Form 1 - Bootstrap Brain Component -->
       
    <!-- comment end -->
    <!-- Footer Start -->
        @include('home.footer')
    <!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-danger back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset ('lib/easing/easing.min.js')}}"></script>
<script src="{{asset ('lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Contact Javascript File -->
<script src="{{asset ('mail/jqBootstrapValidation.min.js')}}"></script>
<script src="{{asset ('mail/contact.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset ('js/main.js')}}"></script>
<script>
   document.querySelectorAll('.dropdown-toggle').forEach(item => {
  item.addEventListener('click', event => {
 
    if(event.target.classList.contains('dropdown-toggle') ){
      event.target.classList.toggle('toggle-change');
    }
    else if(event.target.parentElement.classList.contains('dropdown-toggle')){
      event.target.parentElement.classList.toggle('toggle-change');
    }
  })
});
</script>
    
</body>

</html>