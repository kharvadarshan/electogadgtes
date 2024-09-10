<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
<!-- owel carousel-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/script.js"></script>


    <script>
      function confirmation(ev)
      {
        ev.preventDefault();
        var urlToRedirect=ev.currentTarget.getAttribute('href');
        swal({
          title:"Are you sure to Delete This",
          text:"This delete will be permanent",
          icon:"warning",
          buttons:{
            cancel: {
                        text: "Cancel",
                        value: null,
                        visible: true,
                        className: "btn btn-danger",
                        closeModal: true,
                    },
            
            confirm: {
                        text: "Yes, delete it!",
                        value: true,
                        visible: true,
                        className: "btn btn-primary",
                        closeModal: true
                    }
          },
          dangerMode:true,
        })
        .then((willCancel)=>{
          if(willCancel){
            window.location.href=urlToRedirect;
          }

        });
      }

     
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   