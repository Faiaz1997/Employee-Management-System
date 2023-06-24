@extends('admin.master')
@section('title')
Create User
@endsection
@section('content')
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
      <div class="row">
        <div class="col-lg-12 text-center mb-5">
          <h1 class="page-title">Add User</h1>
          <h6 class="page-title">{{session('message')}}</h6>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('user.added')}}">
            @csrf
            <div class="form-group row mb-3">
              <label for="userName" class="col-sm-2 col-form-label">User Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="userName" name="name">
              </div>
            </div>
            <div class="form-group row  mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email">
              </div>
            </div>
            <div class="form-group row  mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="password">
              </div>
            </div>
            <fieldset class="form-group  mb-3">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="role" id="gridRadios1" value="0" checked>
                    <label class="form-check-label" for="gridRadios1">
                      Employee
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="role" id="gridRadios2" value="1">
                    <label class="form-check-label" for="gridRadios2">
                      Owner
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="form-group row">
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection