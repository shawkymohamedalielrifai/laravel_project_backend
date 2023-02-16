<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee List </title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/all.min.css" rel="stylesheet" />

</head>
<body>
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-12">
            <h2>Employee List</h2>

            <div style="margin-right: 10%">
            <a href="{{url('add-employee')}}" class="btn btn-primary">Add Employee</a>
            </div>
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
             {{Session::get('success')}}
            </div>
            @endif
            <table class="table">
                <thead><tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Salary</th>
                <th>Action</th>

                </tr></thead>
                <tbody>
                    @php
                    $i = 1;

                    @endphp
                    @foreach ($data as $stu )
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$stu->name}}</td>
                        <td>{{$stu->age}}</td>
                        <td>{{$stu->address}}</td>
                        <td>{{$stu->phone}}</td>
                        <td>{{$stu->salary}}</td>
                        <td>  <a href="{{url('edit-employee/'.$stu->id)}}" class="btn btn-primary">Edit</a>
                       <a href="{{url('delete-employee/'.$stu->id)}}" class="btn btn-danger">Delete</a></td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/all.min.js"></script>

</body>
</html>
