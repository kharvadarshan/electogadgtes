<!DOCTYPE html>
<html lang="en">
<head>   
 @include('home.css')
 <style>
        
        th{
        color:black;
        background-color:darkgray;
        text-align: center;
        
    }
    td{
        color:black;
        background-color:#DCDAE5;
         text-align: center;
         font-size: 20px;
         /* border:1px solid blue; */
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



    <div class="container">
        <h1>My Orders</h1>
        <div class="row">
            <table  class="table table-light table-borderless table-hover text-center mb-0" >
            <thead class="thead-dark">
                     <tr class="p-2 m-2">
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Delivery Status</th>
                        <th>Image</th>
                     </tr>
            </thead>
            <tbody class="align-middle">
                     @foreach($order as $order)
                     <tr class="p-2 m-2">
                        <td class="align-middle">{{$order->product->title}}</td>
                        <td class="align-middle">{{$order->product->price}}</td>
                        <td class="align-middle">{{$order->quantity}}</td>
                        <td class="align-middle">{{$order->status}}</td>
                        <td class="align-middle">
                            <img src="products/{{$order->product->image}}" width="100" height="100"alt="PHOTO">
                        </td>
                     </tr>
                     @endforeach
            </tbody>
            </table>
        </div>
    </div>








    <!-- Carousel Start -->
    
    <!-- Carousel End -->

    <!-- Featured Start -->
     
    <!-- Featured End -->

    <!-- Categories Start -->  <!-- Categories End -->

    <!-- Products Start -->
     
    <!-- Products End -->

    <!--- Offer start -->
     
    <!-- Offer End -->

    <!-- Vendor Start -->
      
    <!-- Vendor End -->
    <!-- Comment Form 1 - Bootstrap Brain Component -->
       
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