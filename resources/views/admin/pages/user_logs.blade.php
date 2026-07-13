@extends('admin.layout.admin_front')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Logs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">User Logs</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">User Logs Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Quote ID</th>
                                        <th>Event</th>
                                        <th>Date</th>
                                        {{-- <th>Action</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($userLogs as $userLog)
                                        <tr>
                                            <td>{{$userLog->id}}</td>
                                            <td onclick="window.location.href='{{ route('get_user_logs_single', ['id' => $userLog->user_id]) }}'" 
                                                style="cursor: pointer;">{{$userLog->user->name}}</td>
                                            <td>{{$userLog->user->user_type}}</td>
                                            <td onclick="window.location.href='{{ route('get_user_logs_quote', ['id' => $userLog->quote_id]) }}'" 
                                                style="cursor: pointer;">LG/INQ/{{ $userLog->quote->created_at->format('Y') }}/{{ sprintf('%04d', $userLog->quote_id) }}</td>
                                            <td>{{$userLog->event}}</td>                                            
                                            <td>{{ $userLog->created_at->format('Y-m-d') }}</td>
                                            <td><a href="{{ route('get_user_logs_details', ['userLog' => $userLog->id]) }}"><button type="button" class="btn btn-primary">View</button></a></td>
                                            {{-- <td>{{$contactRequest->message ?? 'Not Given'}}</td> --}}
                                        </tr>
                                    @endforeach                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{-- <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection