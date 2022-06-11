<html>
<head>
    <meta charset="utf-8">
    <title>Idk</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,700;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="/registration.css">
    <link rel="stylesheet" title="theme" href="#">

    <script src="https://kit.fontawesome.com/95dda36ed8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</head>
<body>
<section id="section">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <!-- Nav Bar -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html"><i class="fas fa-user-graduate"></i>GO-help</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/ddd">Main menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Information.html">Information</a>
                        </li>
                        <li class="nav-item">
                            <a class= "nav-link" href="{{route('auth.login')}}">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacts.html">Contacts</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6" id="card">
                        <div class="card" style="border-radius: 15px; height:35rem;">
                            <div class="card-body p-5">
                                <div class="container_login">
                                    <h4 class="text-uppercase text-center mb-5">Register</h4>
                                    <form action="{{ route('auth.save') }}" method="post">

                                        @if(Session::get('success'))
                                            <div class="alert alert-success">
                                                {{Session::get('success')}}
                                            </div>
                                        @endif

                                        @if(Session::get('fail'))
                                            <div class="alert alert-danger">
                                                {{Session::get('fail')}}
                                            </div>
                                            @endif


                                        @csrf
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="fname" placeholder="Enter first name" value="{{old('fname')}}">
                                            <span class="text-danger">@error('fname'){{$message}} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="lname" placeholder="Enter last name" value="{{old('lname')}}">
                                            <span class="text-danger">@error('lname'){{$message}} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{old('email')}}">
                                            <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter password">
                                            <span class="text-danger">@error('password'){{$message}} @enderror</span>
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary">Sign In</button>
                                        <br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
