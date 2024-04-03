<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light " >
        <a class="navbar-brand" href="/">Demo Systems - Maron</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/purchase-test">Purchase</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/workrate">WorkRate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sanchez_course">SanchezCourse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">SanchezProduct</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">SanchezCategories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/suppliers">SanchezSuppliers</a>
                </li>

            </ul>
        </div>
    </nav>


    <div class="container">
        @yield('content')
    </div>

    </body>
</html>