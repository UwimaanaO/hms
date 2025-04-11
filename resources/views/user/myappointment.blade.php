<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health - Medical Center HTML5 Template</title>

    <link rel="stylesheet" href="../user/assets/css/maicons.css">

    <link rel="stylesheet" href="../user/assets/css/bootstrap.css">

    <link rel="stylesheet" href="../user/assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../user/assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../user/assets/css/theme.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

                <form action="#">
                    <div class="input-group input-navbar">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                            aria-describedby="icon-addon1">
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctors.html">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        @if(Route::has('login'))
                            @auth
                                <li class="nav-item" style="padding-right: 10px">
                                    <a class="nav-link" href="{{url('myappointment')}}" style="background-color: greenyellow;">My Appointments</a>
                                </li>
                                <li class="nav-item" style="padding-right: 10px">
                                    <a class="btn btn-primary" href="{{ route('profile.show') }}">{{ Auth::user()->name }}</a>
                                </li>

                            @else
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                                </li>
                            @endauth
                        @endif
                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>
    <div align="center" style="padding: 70px" class="table-responsive">
        <table class="table">
            <tr style="background-color: black">
                <th style="padding: 10px; font-size: 20px; color: white;">Doctor Name</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Date</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Message</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Status</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Actions</th>
            </tr>

            @foreach ($appointment as $appoint)
            <tr>
                <td>{{$appoint->doctor}}</td>
                <td>{{$appoint->date}}</td>
                <td>{{$appoint->message}}</td>
                <td>{{$appoint->status}}</td>
                <td>
                    <a href="" title="Edit Student"><button class="btn btn-primary btn btn-sm"><i class="fas fa-pencil-alt" aria-hidden="true"></i>Edit</button></a>

                    <form action="" method="POST"
                        accept-charset="UTF-8" style="display: inline">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash-alt" aria-hidden="true"></i>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <script src="../user/assets/js/jquery-3.5.1.min.js"></script>

    <script src="../user/assets/js/bootstrap.bundle.min.js"></script>

    <script src="../user/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../user/assets/vendor/wow/wow.min.js"></script>

    <script src="../user/assets/js/theme.js"></script>

</body>

</html>