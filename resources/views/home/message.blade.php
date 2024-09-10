
@if (Session::has('success'))
<div class="alert alert-success alert-dismissible fade show">
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
  <h4><i class="icon fa fa-check"></i>Success</h4>
  {{Session::get('success')}}
</div>
@endif