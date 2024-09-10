<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <!-- Latest compiled and minified CSS -->

    <style>
        table{
            border:2px solid gray;
            
        }
        th{
            color:white;
            background-color:blue; 
            padding:10px;
            font-size: 20px;
        }
        td{
            border:2px solid gray;
            text-align: center;
            color:white;
            font-size:20px;
            padding:5px 5px;

        }
        input[type="search"]
        {
            width:300px;
            height:39px;
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
            <h1>View Product</h1>
            <form class="d-flex justify-content-center align-items-center align-content-center mt-5"
                action="{{url('product_search')}}" method="GET">
                @csrf
                <input type="search"  name="search">
                <input type="submit" class="btn btn-success font-semibold p-2 m-2" value="Search">  
            </form>
            <div class="d-flex justify-content-center align-items-center align-content-center mt-5">
                     <table>
                        <tr>
                            <th>Product Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{!!Str::limit($product->description,20)!!}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>
                                <img width="100px" height="100px"src="products/{{$product->image}}">
                            </td>
                            <td>
                                <a  class="btn btn-success"
                                href="{{url('update_product',$product->id)}}">Edit</a>
                            </td>
                            <td>
                               <a class="btn btn-danger" onClick="confirmation(event)"
                               href="{{url('delete_product',$product->id)}}">Delete</a>
                             </td>
                        </tr>
                        @endforeach
                     </table>
                     
            </div>
            <div class="d-flex justify-content-center align-items-center align-content-center mt-3">
            {{$products->onEachSide(1)->links()}}
            </div>
      </div>
    </div>
    <!-- JavaScript files-->

      @include('admin.js')
  </body>
</html>