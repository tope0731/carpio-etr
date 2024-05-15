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
        }
        .navbar {
            background-color: #003366;
            color: white;
        }
        .navbar-brand {
            font-size: 24px;
        }
        .navbar-nav .nav-link {
            color: white;
            margin-right: 10px;
        }
        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/requirements"><h3>PSU ADMISSION SYSTEM</h3></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="/admin/admissions">All Applicants</a>
                                <a class="nav-link active" aria-current="page" href="/admin/accepted-admissions">Accepted</a>
                                <a class="nav-link active" aria-current="page" href="/admin/rejected-admissions">Rejected</a>
                                <a class="nav-link active" aria-current="page" href="/admin/waitlisted-admissions">Waitlisted</a>
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
