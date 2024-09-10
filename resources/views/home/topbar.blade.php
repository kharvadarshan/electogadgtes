<div class="container-fluid">
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Electo</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Gadget</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="" class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
            @if (Route::has('login'))

            @auth

         <div class="d-inline-flex align-items-center p-1">
          
            <a href="{{URL('myorders')}}" class="btn btn-secondary p-2 font-weight-bold mr-4" style="font-size:20px;">My Orders</a>
            <a href="{{URL('mycart')}}" class="btn btn-secondary p-2 font-weight-bold mr-4" style="font-size:20px;">
            <i class="fa-solid fa-cart-shopping p-1  pr-2" aria-hidden="true"></i>My Cart
            <span class="position-absolute top-0 start-100  badge rounded-pill bg-danger">{{$count}}</span>
            </a>
 
            <form class="" method="POST" action="{{ route('logout') }}">
            @csrf
           <input  class="btn btn-success p-2 m-1 font-weight-bold" type="submit" value="Logout">
           </form>
         </div>
            @else
              <div class="d-inline-flex align-items-center mr-2" >  
                <a href="{{url('/login')}}" class="text-decoration-none">
                 <i class="fa fa-user" aria-hidden="true"></i>
                 <span>Login</span>
                </a>
              </div> 
              <div class="d-inline-flex align-items-center p-1" > 
               <a href="{{url('/register')}}" class="text-decoration-none">
                 <i class="fa fa-address-card-o" aria-hidden="true"></i>
                 <span>Register</span>
               </a>
              </div>
              </div>
           @endauth
           @endif 
        </div>
</div>