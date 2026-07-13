@extends('admin.layout.admin_front')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Inquiries</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Contact Inquiries</li>
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
                        <h3 class="card-title">Contact Inquiry Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Company</th>
                                        <th>Email</th>
                                        {{-- <th>Status</th> --}}
                                        {{-- <th>Action</th> --}}
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contactRequests as $contactRequest)
                                        <tr>
                                            <td>{{$contactRequest->id}}</td>
                                            <td>{{$contactRequest->username}}</td>
                                            <td>{{$contactRequest->phone}}</td>
                                            <td>{{$contactRequest->company ?? 'Not Given'}}</td>
                                            <td>{{$contactRequest->email}}</td>
                                            {{-- <td>Test</td> --}}
                                            {{-- <td><a href=""><button type="button" class="btn btn-primary">View</button></a></td> --}}
                                            <td>{{$contactRequest->message ?? 'Not Given'}}</td>
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