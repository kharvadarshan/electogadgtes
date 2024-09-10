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
        height: 60px;
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
            <h1 class="text-white">Add Product</h1>
            <div class="container-fluid d-flex justify-content-center align-items-center mt-4">
                <form action="{{url('upload_product')}}" method="POST" enctype="multipart/form-data">
                   @csrf
                    <div class="p-2">
                        <label>Product Title</label>
                        <input type="text" name="title" required>
                    </div>
                    <div class="p-2">
                        <label>Description</label>
                        <textarea name="description" required></textarea>
                    </div>
                    <div class="p-2">
                        <label>Product Image</label>
                        <input type="file" name="image">
                    </div>
                    <div class="p-2">
                        <label>Price</label>
                        <input type="text" name="price">
                    </div>
                    <div class="p-2">
                        <label>Quantity</label>
                        <input type="number" name="qty">
                    </div>

                    <div class="p-2">
                       
                        <input class="btn btn-success" type="submit" value="Add Product">
                    </div>
                </form>
            </div>
      </div>
    </div>
    <!-- JavaScript files-->
   @include('admin.js')
  </body>
</html>