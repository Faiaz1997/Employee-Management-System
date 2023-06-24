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
                            @foreach($items as $key => $item)
                            <tbody>
                                <tr>
                                    @if($key === 0)
                                    <td>User Name: {{$item->name}}</td>
                                    @else
                                    <td></td>
                                    @endif
                                </tr>
                            </tbody>
                            @endforeach

                        </div>
                        <hr />
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>sl</th>
                                        <th>Date</th>
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
                                        <td>{{ \Carbon\Carbon::parse($item->checkin)->format('Y-m-d') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->checkin)->format('H:i:s') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->checkout)->format('H:i:s') }}</td>

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