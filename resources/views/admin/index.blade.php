<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
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
            @include('admin.body')
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>