<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
         
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
        <h1>View Order</h1>
          <div class="container position-relative">
            <div class="row d-flex  justify-content-start w-100">
                <div class="col-lg-12 mt-4 mr-5">
                    <table class="table table-light table-borderless table-hover text-center mb-0 ">
                      <thead class="thead-dark">
                        <tr class="p-2 m-2">
                            <th class="p-1 m-1 ">Customer Name</th>
                            <th class="p-1 m-1 ">Address</th>
                            <th class="p-1 m-1 ">Phone</th>
                            <th class="p-1 m-1 ">Product Title</th>
                            <th class="p-1 m-1 ">Price</th>
                            <th class="p-1 m-1 ">Image</th>
                            <th class="p-1 m-1 ">Status</th>
                            <th class="p-1 m-1 ">Change Status</th>
                            <th class="p-1 m-1 ">Print PDF</th>
                        </tr>
                        </thead>
                        <tbody class="align-middle">
                        @foreach($data as $data)
                        <tr class="p-2 m-2">
                            <td class="align-middle">{{$data->name}}</td>
                            <td class="align-middle">{{$data->rec_address}}</td>
                            <td class="align-middle">{{$data->phone}}</td>
                            <td class="align-middle">{{$data->product->title}}</td>
                            <td class="align-middle">{{$data->product->price}}</td>
                            <td class="align-middle">
                                <img src="/products/{{$data->product->image}}" width="100px" alt="PHOTO">
                            </td>
                            <td class="align-middle">
                                @if($data->status == 'in progress')
                                <span style="color:red;">{{$data->status}}</span>
                                @elseif($data->status == 'On the way')
                                <span style="color:blue;">{{$data->status}}</span>
                                @else
                                <span style="color:yellow;">{{$data->status}}</span>
                                @endif
                            </td>
                            <td class="align-middle">
                                <a href="{{url('on_the_way',$data->id)}}" class="btn btn-danger">On the way</a>
                                <a href="{{url('delivered',$data->id)}}" class="btn btn-success mt-1">Delivered</a>
                            </td>
                            <td class="align-middle"> <a class="btn btn-secondary" href="{{url('print_pdf',$data->id)}}">Print PDF</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>