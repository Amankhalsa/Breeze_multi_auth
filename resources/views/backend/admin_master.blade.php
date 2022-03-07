<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title') - Dashboard</title>
    <meta name="twitter:description" content="description ">
        <!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>
<meta name="twitter:image" content="{{asset('backend/assets/img/avatars/avatar2.jpeg')}}">
<meta property="og:image" content="{{asset('backend/assets/img/avatars/avatar4.jpeg')}}">
<meta name="description" content="admin panel is for admi">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="twitter title">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.min.css')}}">

<link rel="apple-touch-icon" sizes="512x512" href="{{asset('frontend/assets/img/favicon/android-chrome-512x512.png')}}">
<link rel="apple-touch-icon" sizes="192x192" href="{{asset('frontend/assets/img/favicon/android-chrome-192x192.png')}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('frontend/assets/img/favicon/apple-touch-icon.png')}}">
<link rel="apple-touch-icon" sizes="150x150" href="{{asset('frontend/assets/img/favicon/mstile-150x150.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontend/assets/img/favicon/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontend/assets/img/favicon/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('frontend/assets/img/favicon/site.webmanifest')}}">
<link rel="mask-icon" href="{{asset('frontend/assets/img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="{{asset('backend/assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/bootstrap/css/style.css')}}">
<!--data table -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
</head>

<body id="page-top">

    <div id="wrapper">
                      
               <!-- navbar  -->
            @include('backend.body.navbar')
            <!-- navbar end  -->
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <!-- top navbar  -->
            @include('backend.body.topnavbar')

            <!-- top navbar end  -->
         
            <div class="container-fluid">
               
               <!-- 1st row start  -->
               @yield('content')
            
            <!-- 3rd row end  -->
            <!-- end chart row  -->
        </div>
    </div>
<!-- footer  -->

@include('backend.body.footer')

<!-- end footer  -->
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="{{asset('backend/assets/js/script.min.js')}}"></script>


<script src="{{asset('frontend/assets/js/script.min.js')}}" ></script>


    <!--datatable -->
           <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js" ></script>

    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
    <!-- sweet alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
$(function(){
  $(document).on('click','#delete',function(e){
    e.preventDefault();
    var link = $(this).attr("href");

Swal.fire({
  title: 'Are you sure?',
  text: "Delete This Data!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = link
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})


  });
});
</script>
</body>

</html>