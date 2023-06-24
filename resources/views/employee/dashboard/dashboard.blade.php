@extends('employee.master')
@section('title')
Employee Dashboard
@endsection
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center text-center mt-5">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <h1></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12  mb-2 d-flex justify-content-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="page-title">Welcome, {{session('name')}}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="page-title">{{session('message')}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="Watch">
                        <div class="MyWatch">
                            <span class="Time"></span>
                            <span class="Meridiem"></span>
                        </div>
                        <div class="date">
                            <span class="Day"></span>
                            <span class="Month"></span>
                            <span class="Year"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('working.dashboard')}}" class="btn btn-success mb-5 w-100 text-center">Check In</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('user.logout')}}" class="btn btn-danger">Logout</a>
                </div>
            </div>

            <script>
                function MyTime() {
                    var mydate = new Date
                    var hour = (mydate.getHours() < 10) ? "0" + mydate.getHours() : mydate.getHours(),
                        minute = (mydate.getMinutes() < 10) ? "0" + mydate.getMinutes() : mydate.getMinutes(),
                        second = (mydate.getSeconds() < 10) ? "0" + mydate.getSeconds() : mydate.getSeconds(),
                        meridiem = (mydate.getHours() >= 12) ? "PM" : "AM";
                    currentDate = mydate.getDay(),
                        year = mydate.getFullYear();
                    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                    var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];


                    if (mydate.getHours() == 0) {
                        hour = 12;
                    } else if (mydate.getHours() > 12) {
                        hour = mydate.getHours() - 12;
                    } else {
                        hour = mydate.getHours();
                    }

                    var currentTime = hour + ":" + minute + ":" + second;

                    document.getElementsByClassName("Time")[0].innerHTML = currentTime;
                    document.getElementsByClassName("Meridiem")[0].innerHTML = meridiem;
                    document.getElementsByClassName("Day")[0].innerHTML = days[currentDate] + ",";
                    document.getElementsByClassName("Month")[0].innerHTML = months[currentDate] + ",";
                    document.getElementsByClassName("Year")[0].innerHTML = year;
                }


                setInterval(function() {
                    MyTime();
                }, 1000)
            </script>
        </div>
    </div>
</div>

@endsection