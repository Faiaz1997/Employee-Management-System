@extends('admin.master')
@section('title')
Admin Dashboard
@endsection
@section('title')
Admin Dashboard
@endsection
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 mt-5">
            <h1>Admin Dashboard</h1>
            <div class="row">
                <div class="col-lg-12  mb-2">
                    <h6 class="page-title">Welcome, {{session('name')}}</h6>
                </div>
            </div>
            <a href="{{route('add.user')}}" class="btn btn-primary">Add User</a>
            <a href="{{route('employee.details')}}" class="btn btn-primary">Show Employees</a>
            <a href="{{route('attendance.details')}}" class="btn btn-primary">Attendance</a>
            <a href="{{route('user.logout')}}" class="btn btn-danger">Logout</a>
        </div>
    </div>
</div>

@endsection