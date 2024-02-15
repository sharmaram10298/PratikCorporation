<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/pratik.png') }}"type="image/x-icon">
    <link rel="icon" href="" width="20" type="image/png" /> 
  <link rel="preconnect" href="https://fonts.gstatic.com/">
    <!------------------ Fonts ------------------>
  <link
  href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
  rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Allura&amp;display=swap" rel="stylesheet">

<!--------------- Stylesheets --------------->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/swiper.min.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" type="text/css" />
 <!------------- Document Title -------------->
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

 <title>Pratik Corporation</title>
</head>
<body>
  @include('frontend.body.header')
  
  
  <main class="main">
    @yield('main')
</main>



   @include('frontend.body.footer')
    <!----------- External JavaScripts ---------->
    <script src="{{ asset('frontend/assets/js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/bootstrap-slider.min.js') }}"></script>
    <!-- <script src="{{ asset('frontend/assets/js/plugins/jquery.waypoints.min.js') }}"></script> -->
    <!-- <script src="{{ asset('frontend/assets/js/plugins/sticky.min.js') }}"></script> -->
    <script src="{{ asset('frontend/assets/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/countdown.js') }}"></script>

    <!-------------- Footer Scripts ------------->
    <script src="{{ asset('frontend/assets/js/theme.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;
        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;

        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;

        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break; 
    }
    @endif 
    </script>
</body>
</html>