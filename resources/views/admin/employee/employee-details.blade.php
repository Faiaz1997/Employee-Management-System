@extends('admin.master')
@section('title')
Employee Details
@endsection
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Employee Details</h5>
                        </div>
                        <hr />
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>sl</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                @php $i=1 @endphp
                                @foreach($emps as $emp)
                                <tbody>
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$emp->name}}</td>
                                        <td>{{$emp->email}}</td>
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