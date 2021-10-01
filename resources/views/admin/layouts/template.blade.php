<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL::asset('/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->

    {{ URL::asset('') }}
    <link href="{{ URL::asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href=" {{ URL::asset('assets/plugins/simplebar/css/simplebar.css') }} " rel="stylesheet" />
    <link href="    {{ URL::asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }} " rel="stylesheet" />
    <link href=" {{ URL::asset('assets/plugins/metismenu/css/metisMenu.min.css') }} " rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Bootstrap CSS -->
    <link href="http://localhost/sell-phone/public/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="http://localhost/sell-phone/public/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="http://localhost/sell-phone/public/assets/css/style.css" rel="stylesheet" />
    <link href="http://localhost/sell-phone/public/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <!-- loader-->
  

    <title>Onedash - Bootstrap 5 Admin Template</title>
</head>

<body>

    <div class="wrapper">
        @include('admin/layouts/header')
        @include('admin/layouts/aside')
        @yield('body')
        e
    </div>


    <script src="http://localhost/sell-phone/public/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->

    <script src="http://localhost/sell-phone/public/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="http://localhost/sell-phone/public/assets/plugins/metismenu/js/metisMenu.min.js"></script>

    <script src="http://localhost/sell-phone/public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="http://localhost/sell-phone/public/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="http://localhost/sell-phone/public/assets/js/pace.min.js"></script>


 
    <!--app-->
    <script src="http://localhost/sell-phone/public/assets/js/app.js"></script>
   
 
</body>

</html>
