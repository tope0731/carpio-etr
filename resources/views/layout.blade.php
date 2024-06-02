<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSU ADMISSION SYSTEM</title>
    @include('libraries.styles')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container-top {
            background-color: #f4f4f4;
            color: white;
            position: fixed;
            width: 100%;
            top: 0;
            height: 200px;
            z-index: 9999;
        }
        .navbar{
            top: 130;
            
        }
        .navbar-nav .nav-link.active {
            color: #007bff; /* Change this color to your desired active link color */
            font-weight: bold; /* Optional: Makes the active link bold */
        }

        .navbar-brand {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: white;
        }

        .navbar-nav .nav-link:hover {
            color: #ccc;
        }

        .container {
            padding-top: 120px; /* Adjust padding-top to give space for the navbar */
        }

        .text-center {
            position: fixed;
            width: 100%;
            top: 0;
            text-align: center;
            z-index: 9999;
        }

        h3 {
            margin: 0;
            padding: 0;
        }

        .admission{
            top:125 ;
        }
        h2 {
            color: #0323d9;
        }
    </style>
</head>
<body>
<div class="container-top">
    <div class="text-center">
        <img src="{{ asset('storage/photos/PSU-LABEL-LOGO.png') }}" alt="PSU Admission Banner" class="img-fluid" style="width: 600px; height: auto;" />
    </div>
    <p style="color: blue; font-size: 30px; font-weight: bold;" class="text-center admission">ADMISSION SYSTEM</p><br>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid ">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('requirements') }}">Requirements</a>
                <a class="nav-link {{ Request::is('selection') ? 'active' : '' }}" href="{{ route('selection') }}">Selection Process</a>
                <a class="nav-link {{ Request::is('application') ? 'active' : '' }}" href="{{ route('application') }}">Application Status</a>
                <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
            </div>
        </div>
    </div>
</nav>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>
</div>

@include('libraries.scripts')
</body>
</html>
