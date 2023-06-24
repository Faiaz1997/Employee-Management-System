@extends('user.master')
@section('title')
Login
@endsection
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 text-center mb-5 mt-5">
                    <h1>Login</h1>
                    <h6 class="page-title">{{session('message')}}</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{route('check.login')}}">
                        @csrf
                        <div class="form-group row mb-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" name="email">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection