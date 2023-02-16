<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Employee</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/all.min.css" rel="stylesheet" />
</head>
<body>
  <div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-12">
<h2> Add Employee</h2>
   @if(Session::has('success'))
   <div class="alert alert-success" role="alert">
    {{Session::get('success')}}
   </div>
   @endif
<form method="post" action="{{url('update-employee')}}">
    @csrf
    <input type="hidden" name="id" value="{{$data->id}}">

    <div class="md-3">
      <label class="form-lebel">Name</label>
      <input type="text" class="form-control" name="name"
      placeholder="Employee Name" value="{{$data->name}}">
      @error('name')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
        @enderror
    </div>
    <div class="md-3">
        <label class="form-lebel">Age</label>
        <input type="text" class="form-control" name="age"
        placeholder="Employee Age" value="{{$data->age}}">
        @error('age')
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
          @enderror
      </div>
      <div class="md-3">
        <label class="form-lebel">Address</label>
        <input type="text" class="form-control" name="address"
        placeholder="Employee Address" value="{{$data->address}}">
        @error('address')
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
          @enderror
      </div>
      <div class="md-3">
        <label class="form-lebel">Phone</label>
        <input type="text" class="form-control" name="phone"
        placeholder="Employee Phone" value="{{$data->phone}}">
        @error('phone')
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
          @enderror
      </div>
      <div class="md-3">
        <label class="form-lebel">Salary</label>
        <input type="text" class="form-control" name="salary"
        placeholder="Employee Salary" value="{{$data->salary}}">
        @error('salary')
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
          @enderror
      </div><br>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{url('employee-list')}}" class="btn btn-danger">back</a>
</form>

        </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/all.min.js"></script>
</body>
</html>
