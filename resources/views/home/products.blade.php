<div class="container-fluid pt-5 pb-3 d-flex align-items-start flex-column">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3" style="color:#0B0BEA;">Latest Products</span></h2>
        <div class="row px-xl-5 w-100 ">
            @foreach($product as $products)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1 w-75 h-75">
                <div class="product-item bg-light mb-4  border-primary">
                    <div class="product-img position-relative overflow-hidden" >
                        <img class="img-fluid w-100" src="products/{{$products->image}}" alt="">
                       
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">{{$products->title}}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>${{$products->price}}</h5><h6 class="text-muted ml-2"></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                        <a  class="btn btn-danger  p-2 m-1 mt-2 text-white change" href="{{url('products_detail',$products->id)}}" >Details</a>
                        <a class="btn btn-primary p-2 m-1 ml-5 mt-2 text-dark change"
                        href="{{url('add_cart',$products->id)}}"><i class="fa fa-shopping-cart mr-1"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>