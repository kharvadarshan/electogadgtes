<!DOCTYPE html>
<html lang="en">

<head>
   @include('home.css')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        input[type="radio"]{
            display:none;
        }
        .rating {
	direction: rtl;
	unicode-bidi: bidi-override;
	color: #ddd; /* Personal choice */
    font-size: 8px;
    margin-left: 15px;
}
.rating input {
	display: none;
}
.rating label:hover,
.rating label:hover ~ label,
.rating input:checked + label,
.rating input:checked + label ~ label {
	color: #ffc107; /* Personal color choice. Lifted from Bootstrap 4 */
    font-size: 8px;
}
    </style>
</head>

<body>
    <!-- Topbar Start -->
    @include('home.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('home.navbar')
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <!-- Breadcrumb End -->

    @include('home.message')
    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                            <img class="w-100 h-100" src="/products/{{$data->image}}" alt="Image">
                       
                    </div>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>{{$data->title}}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1">({{$count_ratings}} Reviews)</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">${{$data->price}}</h3>
                    <p class="mb-4">{{$data->description}}</p>
                    
                          
                    <form action="{{url('add_to_cart',$data->id)}}" method="POST" class="d-flex align-items-center mb-4 pt-2">
                        @csrf
                        <div class="quantity mr-3 d-flex flex-row" >
                            
                        <div class="pt-2 mr-2">Quantity : </div>

                            <input type="number" id="quantityInput" style ="width:80px;" name="qty" min="1" class="form-control bg-secondary border-0  justify-content-center" value="1">
                            
                        </div>
                        <button type="submit" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To
                            Cart</button>
                    </form>
                    <div class="d-flex pt-2">
                        <strong class="text-dark m-2 pt-2 mr-2">Share on:</strong>
                        <div class="d-inline-flex">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Description</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Information</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Reviews ({{$count_ratings}})</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Product Description</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <p>Dolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.</p>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                        </li>
                                        <li class="list-group-item px-0">
                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                        </li>
                                      </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-4">{{$data->title}}</h4>
                                    @foreach($rating as $ratings)
                                    <div class="media mb-4">
                                        <img src="/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>{{$ratings->username}}<small> -{{$ratings->formatted_created_at}} <i></i></small></h6>
                                            <div class="text-primary mb-2">
                                            @for ($i = 0; $i < 5; $i++)
                                                 @if ($i < $ratings->rating)
                                                     <i class="fas fa-star"></i>
                                                 @else
                                                     <i class="far fa-star"></i>
                                                 @endif
                                            @endfor
                                            </div>
                                            <p>{{$ratings->comment}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                   
                                    <form action="" id="productRatingForm" class="productRatingForm" method="">
                                        @csrf
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class=" rating">
                                            <input id="rating-5" type="radio" name="rating" value="5" /><label for="rating-5"><i class="fas fa-2x fa-star"></i></label>
                                            <input id="rating-4" type="radio" name="rating" value="4" /><label for="rating-4"><i class="fas fa-2x fa-star"></i></label>
                                            <input id="rating-3" type="radio" name="rating" value="3"/><label for="rating-3"><i class="fas fa-2x fa-star"></i></label>
                                            <input id="rating-2" type="radio" name="rating" value="2"/><label for="rating-2"><i class="fas fa-2x fa-star"></i></label>
                                            <input id="rating-1" type="radio" name="rating" value="1"/><label for="rating-1"><i class="fas fa-2x fa-star"></i></label>
                                       
                                        </div>
                                        <p class="product-rating-error text-danger ml-3"></p>
                                    </div>
                                    
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" name="comment" cols="30" rows="5" class="form-control" placeholder="How was your overall experience?"></textarea>
                                            <p></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" name="name" class="form-control" id="name">
                                            <p></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" name="email" class="form-control" id="email">
                                            <p></p>
                                        </div>
                                        <div class="form-group mb-0">
                                            <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Footer Start -->
     @include('home.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('home.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
    <script>
    function increaseValue() {
        var input = document.getElementById('quantityInput');
        var value = parseInt(input.value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        input.value = value;
    }

    function decreaseValue() {
        var input = document.getElementById('quantityInput');
        var value = parseInt(input.value, 10);
        value = isNaN(value) ? 0 : value;
        value = value > 1 ? value - 1 : 1; // Prevent value from going below 1
        input.value = value;
    }
     
    $("#productRatingForm").submit(function(event){
        event.preventDefault();
         $.ajax({
             url:'{{route("front.save_rating",$data->id)}}',
             type:'post',
             data:$(this).serializeArray(),
             dataType:'json',
             success:function(response){
                var errors = response.errors;
               if(response.status == false)
               {
                if(errors.name)
                {
                    $("#name").addClass('is-invalid')
                    .siblings("p")
                    .addClass('invalid-feedback')
                    .html(errors.name);
                }else{
                    $("#name").removeClass('is-invalid')
                    .siblings("p")
                    .removeClass('invalid-feedback')
                    .html('');
                }
                if(errors.email)
                {
                    $("#email").addClass('is-invalid')
                    .siblings("p")
                    .addClass('invalid-feedback')
                    .html(errors.email);
                }else{
                    $("#email").removeClass('is-invalid')
                    .siblings("p")
                    .removeClass('invalid-feedback')
                    .html('');
                }
                if(errors.comment)
                {
                    $("#comment").addClass('is-invalid')
                    .siblings("p")
                    .addClass('invalid-feedback')
                    .html(errors.comment);
                }else{
                    $("#comment").removeClass('is-invalid')
                    .siblings("p")
                    .removeClass('invalid-feedback')
                    .html('');
                }
                if(errors.rating)
                {
                  $(".product-rating-error").html(errors.rating);
                }else{
                    $(".product-rating-error").html('');
                }
               }
               else{
                window.location.href="{{route('front.prodDetail',$data->id)}}";
               }
             }
         });
    })

</script>
</body>

</html>