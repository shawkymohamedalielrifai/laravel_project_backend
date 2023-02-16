<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/all.min.css" rel="stylesheet" />
    <style>
    a{
        font-size: 20px;
      padding: 80px;
      margin-right: 50px;
    }
   
    a:hover{
      font-size: 25px
    }
    </style>
</head>
<body>


    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #0dcaf0;">
        <div class="container">
          <a class="navbar-brand mr-auto" href="#">Cairocoders</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('signout')}}">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add-employee">Add Employee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="employee-list"> Employee List</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="">List Employee</a>
                </li> --}}
            </ul>

        </div>
        </div>
    </nav>
    <div class="container"><br><br>
        <div class="row">
            <p><h3> Hello : {{Auth::user()->name}}</h3></p>
        </div>
    </div>

@yield('content')


    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>

</body>
</html>
