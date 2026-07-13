@extends('admin.layout.admin_front')

@section('title', 'Freelance Work Orders')
@section('page-title', 'Freelance Work Orders')

@section('content')
<div class="content-wrapper">
  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Freelance Work Orders</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Freelance Work Orders</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <section class="content">
    <div class="container-fluid">
      @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
      @endif






  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">



                    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="card-title">Freelance Work Orders</h3>
          <a href="{{ route('admin.work-orders.freelance.create') }}" class="btn btn-primary">Create New Work Order</a>
        </div>
        <div class="card-body">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Project_Name</th>
                    <th>Freelancer Name</th>
                    <th>PDF</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($orders as $order)
                  <tr>
                                    <td>{{ $order->id }}</td>
                <td>{{ $order->project_name_client ?? 'N/A' }}</td>
                <td>{{ $order->freelancer_name }}</td>
                <td>
                  <a href="{{ route('admin.work-orders.freelance.pdf', $order->id) }}" class="btn btn-sm btn-info">Download PDF</a>
                </td>
                <td class="d-flex gap-1">
                  <a href="{{ route('admin.work-orders.freelance.edit', $order->id) }}" class="btn btn-sm btn-warning">Edit</a>
                  <form action="{{ route('admin.work-orders.freelance.delete', $order->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this work order?')">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
              @if($orders->isEmpty())
              <tr>
                <td colspan="5" class="text-center">No Freelance Work Orders Found</td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


@endsection