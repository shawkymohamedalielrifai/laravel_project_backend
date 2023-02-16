@extends('layout')
@section('content')
<main>
    <div class="login-form">
        <div class="container">
            <div class="row justifay-content-center">
                <div class="col-md-4">
                   <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    @if(\Session::has('message'))
                    <div class="alert alert-info">
                        {{\Session::get('message')}}
                    </div>
                    @endif
                    <div class="card-body">

                       <form method="get" action="{{route('postlogin')}}">
                        @csrf
                         <div class="form-group mb-3">
                            <input type="text" placeholder="Email" id="email" class="form-control" name="email" autofocus>
                           @if($errors->has('email'))
                           <span class="text-danger">{{$errors->first('email')}}</span>
                           @endif
                        </div>
                         <div class="form-group mb-3">
                            <input type="text" placeholder="Password" id="password" class="form-control" name="password" autofocus>
                            @if($errors->has('password'))
                            <span class="text-danger">{{$errors->first('password')}}</span>
                            @endif
                        </div>
                         <div class="form-group mb-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" Remember Me>
                                </label>
                            </div>
                         </div>
                         <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark btn-block">Signin </button>
                             </div>
                       </form>
                    </div>

                   </div>

                  </div>
             </div>

        </div>
    </div>
</main>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
