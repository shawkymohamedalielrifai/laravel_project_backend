@extends('layout')
@section('content')
    <main class="signup-form">
        <div class="container">
            <div class="row justifay-content-center">
                <div class="col-md-4">
                   <div class="card">
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">

                       <form method="get" action="{{route('postsignup')}}">
                        @csrf
                         <div class="form-group mb-3">
                            <input type="text" placeholder="Name" id="name" class="form-control" name="name" autofocus>
                           @if($errors->has('name'))
                           <span class="text-danger">{{$errors->first('name')}}</span>
                           @endif
                        </div>
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
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                         </div>
                         <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark btn-block">Sign up </button>
                             </div>
                       </form>

                    </div>
                   </div>
                </div>
            </div>
        </div>
</main>
@endsection
