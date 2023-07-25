<!-- resources/views/log_activity.blade.php -->
@extends('layout.layout')
@section('content')

    <head>
        <title>Log Activity Lists</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    </head>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">History Login</h4>
                <div class="table-responsive ">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User</th>
                                <th>Activity</th>
                                <th>Login Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($logs->count())
                                @foreach ($logs as $key => $log)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $log->user ? $log->user->name : 'Guest' }}</td>
                                        <td>{{ $log->activity }}</td>
                                        <td>{{ $log->login_at }}</td>
                                    </tr>
                        </tbody>
                    </table>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">No log activity found.</td>
                    </tr>
                    @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
