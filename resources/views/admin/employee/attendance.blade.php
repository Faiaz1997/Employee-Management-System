@extends('admin.master')
@section('title')
Attendance
@endsection
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex justify-content-between">
                            <h5 class="mb-0">Employee Details</h5>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <form method="post" action="{{route('date.search')}}">
                                        @csrf
                                        <div class="form-group row mb-3">
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="date" name="date" value="{{ date('Y-m-d') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>sl</th>
                                        <th>Emp Name</th>
                                        <th>Check IN</th>
                                        <th>Check Out</th>
                                        <th>Work Hour</th>
                                    </tr>
                                </thead>
                                @php $i=1 @endphp
                                @foreach($items as $item)
                                <tbody>
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td><a href="{{route('attendance.report',['id'=>$item->userId])}}">{{$item->name}}</a> </td>
                                        <td>{{$item->checkin}}</td>
                                        <td>{{$item->checkout}}</td>
                                        <td>{{$item->workhour}}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection