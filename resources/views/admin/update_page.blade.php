<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
    label{
       display:inline-block;
       width:200px;
       font-size: 20px!important;
       color:white!important;
    }

    input[type='text']{
        width:300px;
        height:40px;
    }

    textarea{
        width:450px;
        height: 100px;
    }
    </style>
  </head>
  <body>
    <!-- header start -->
     @include('admin.header')
    <!-- header end -->

    
        @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
           <h1 class="">Update Product</h1>
           <div class="container-fluid d-flex justify-content-center align-items-center mt-4">
             <form action="{{url('edit_product',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-2">
                <label>Product Title</label>
                <input type="text" name="title" value="{{$data->title}}" required>
                </div>
                <div class="p-2">
                <label>Description</label>
                <textarea name="description"  required>{{$data->description}}</textarea>
                </div>
                <div class="p-2">
                <label>Current Image</label>
                <img src="/products/{{$data->image}}">
                </div>
                <div class="p-2">
                <label>New Image</label>
                <input type="file" name="image">
                </div>
                <div class="p-2">
                <label>Price</label>
                <input type="text" name="price" value="{{$data->price}}" required>
                </div>
                <div class="p-2">
                <label>Quantity</label>
                <input type="number" name="qty" value="{{$data->quantity}}" required>
                </div>
                <div class="p-2">
                       
                        <input class="btn btn-success" type="submit" value="Update Product">
                    </div>
             </form>
           </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>