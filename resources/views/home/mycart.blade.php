<!DOCTYPE html>
<html lang="en">
<head>   
 @include('home.css')
 <style>
    /* table{
       
       border:2px solid black;
    } */
    th{
        color:black;
        background-color:darkgray;
        text-align: center;
        border:2px solid black;
    }
    td{
        color:black;
        background-color:#DCDAE5;
         text-align: center;
         font-size: 20px;
         /* border:1px solid blue; */
    }

    label{
       display:inline-block;
       width:200px;
       font-size: 20px!important;
       
    }
    input[type='text']{
        width:300px;
        height:40px;
    }
    textarea{
        width:400px;
        height: 60px;
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
  <div class="row  mw-100 d-flex flex-row w-100  ">
    <div class="col-lg-12 mb-5 ">
    <h2 class="m-2">My Cart</h2>
       <table   class="table table-light table-borderless table-hover text-center mb-0 " >
       <thead class="thead-dark">
       <tr class="p-2 m-2">
            <th class="p-1 m-1 " style="font-size:20px;">Product Title</th>
            <th class="p-1 m-1 " style="font-size:20px;">Price</th>
            <th class="p-1 m-1 " style="font-size:20px;">Quantity</th>
            <th class="p-1 m-1 " style="font-size:20px;">Image</th>
            <th class="p-1 m-1 " style="font-size:20px;">Remove</th>
        </tr>
       </thead>
       <tbody class="align-middle">
        <?php
        $value=0;
        ?>
          @foreach($cart as $cart)
            <tr class="p-2 m-2">
                <td class="align-middle">{{$cart->product->title}}</td>
                <td class="align-middle">${{$cart->product->price}}</td>
                <td class="align-middle">{{$cart->quantity}}</td>
                <td class="align-middle" >
                    <img src="/products/{{$cart->product->image}}" alt="{{$cart->product->title}} photo" width="100px;" height="100px"> 
                </td>
                <td class="align-middle">
                  <a href="{{url('delete_cart',$cart->id)}}" onClick="confirmation(event)" class="btn btn-danger">Remove</a>
                </td>
            </tr>

            <?php 
            $value = $value + $cart->product->price*$cart->quantity;
            ?>
          @endforeach
       </tbody>
       </table>
    </div>
    <div class="row bg-white text-dark m-3 p-2 w-50 pt-4 mt-5">
          <div class="col d-flex flex-column h-40">
             <h1 class="mt-5">Cart Summery<span><hr/></span></h1>
            <div class="d-flex flex-row justify-content-between w-40">
                 <h4 class=" m-2">Subtotal</h4>
                 <h4 class=" m-2 ">${{$value}}</h4>
             </div>

             <div class="d-flex flex-row justify-content-between w-40">
                 <h4 class=" m-2">Shipping</h4>
                  <h4 class=" m-2 ">$10</h4> 
             </div>
              <div><hr/></div>
             <div class="d-flex flex-row justify-content-between w-40">
                 <h2 class="m-1">Total</h2>
               <h2 class="m-1">${{$value+10}}</h2>
              </div>
          </div>
    </div>
    <div class="col-lg-5 container-fluid d-flex flex-column justify-content-center align-items-center mt-5  ">
    
        <form class="" action="{{url('stripe')}}" method="get">
          @csrf
          <h2 class="ml-2">Place Order</h2>
          <div class="p-2">
            <label>Receiver Name</label>
            <input type="text" name="name" value="{{Auth::user()->name}}" required>
          </div>
          <div class="p-2">
            <label>Receiver Address</label>
            <textarea name="address"  required>{{Auth::user()->address}}</textarea>
          </div>
          <div class="p-2">
            <label>Receiver Phone</label>
            <input type="text" name="phone" value="{{Auth::user()->phone}}"  required>
          </div>
          <div class="p-2">
            
            <input type="checkbox" name="pmode" class="mr-2"  ><label>Cash on Delivery</label>
          </div>
          <div class="p-2">
            <input type="submit" class="btn btn-primary font-weight-bold" style="font-size:20px;" value="Place Order">
          </div>
        </form>
       
        
    </div>
   
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