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

        .navbar {
            background-color: #003366;
            color: white;
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
            padding: 20px;
        }

        h3 {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/requirements">PSU ADMISSION SYSTEM</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="/">Requirements</a>
                                <a class="nav-link active" aria-current="page" href="/selection">Selection Process</a>
                                <a class="nav-link active" aria-current="page" href="/application">Application</a>
                                <a class="nav-link active" aria-current="page" href="/contact">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div>
                @yield('content')
            </div>
        </div>
    </div>
    @include('libraries.scripts')
</body>
</html>
