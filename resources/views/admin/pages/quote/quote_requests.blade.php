@extends('admin.layout.admin_front')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quotation Inquiries for {{$service}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">{{$service}} Quotation Inquiries</li>
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
                        <h3 class="card-title">{{$service}} Quotation Inquiries Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Ref No:</th>
                                        <th>Title</th>
                                        <th>Name</th>
                                        <th>Country Code</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        {{-- <th>Loan</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($quoteRequests as $quoteRequest)
                                        <tr>
                                            <td>LG/INQ/{{ $quoteRequest->created_at->format('Y') }}/{{ sprintf('%04d', $quoteRequest->id) }}</td>
                                            <td>{{$quoteRequest->title}}</td>
                                            <td>{{$quoteRequest->name}}</td>
                                            <td>{{$quoteRequest->country_code ?? 'Not Given'}}</td>
                                            <td>{{$quoteRequest->contact}}</td>
                                            <td>{{$quoteRequest->email ?? 'Not Given'}}</td>
                                            <td>{{$quoteRequest->address ?? 'Not Given'}}</td>
                                            {{-- <td>{{$quoteRequest->loan ?? 'Not Given'}}</td> --}}
                                            <td><a href="{{route('view_quote_request', ['service' => $originalService, 'quote' => $quoteRequest->id])}}"><button type="button" class="btn btn-primary">View</button></a></td>
                                        </tr>
                                    @endforeach                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{-- <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection