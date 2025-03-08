<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learn Laravel- @yield('page-title', 'website')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    
    <style>
        .nav-link {
            color: white;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid bg-success text-light">


            <div class="row">
                <div class="col-12">
                    <header> @yield ('header') </header>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <!-- A grey horizontal navbar that becomes vertical on small screens -->
                    <nav class="navbar navbar-expand-sm ">

                        <div class="container-fluid">
                            
                            <!-- Links -->
                            <ul class="navbar-nav" style="color:white">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link 3</a>
                                </li>
                            </ul>
                           
                        </div>

                    </nav>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-9">
                    <main>
                        <article>
                            @hasSection('content')
                            @yield('content')
                            @else
                            <h2>No content found.</h2>
                            @endif

                        </article>
                    </main>
                </div>
                <div class="col-3 bg-info">
                    <aside>
                    @section('sidebar-right')
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About us</a></li>
                        </ul>
                        @show
                    </aside>
                </div>
            </div>
        </div>




        <div class="container-fluid bg-danger">
            <div class="row">
                <div class="col-12">
                    <footer>
                        this is footer
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                        <script src="main.js"></script>
                    </footer>
                </div>
            </div>
        </div>


    </div>
    @stack('script')
    @stack('style');
</body>

</html>