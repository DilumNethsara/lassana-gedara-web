@extends('admin.layout.admin_front')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  @if(session('success'))
    <div id="success-message" class="alert alert-success" style="text-align: center; font-size: 18px;">
        {{ session('success') }}
    </div>    
  @endif
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">User Details</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form action="{{ route('update_profile', ['user' => auth()->user()->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                      <label for="inputName">User ID</label>
                      <input type="text" id="inputName" class="form-control" value="{{ $user->id }}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="inputName">User Type</label>
                      <input type="text" id="inputName" class="form-control" value="{{ $user->user_type }}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="inputName">User Name</label>
                      <input type="text" id="inputName" class="form-control" value="{{ $user->name }}" name="user_name">
                    </div>
                    @error('user_name')
                        <span class="text-danger">{{ $message }}</span>                      
                    @enderror                   
                    <div class="form-group">
                      <label for="inputName">Email</label>
                      <input type="text" id="inputName" class="form-control" value="{{ $user->email }}" readonly>
                    </div> 
                    <div class="col-12">
                        {{-- <a href="#" class="btn btn-secondary">Cancel</a> --}}
                        <input type="submit" value="Update" class="btn btn-success float-right">
                    </div>                   
                </div>
            </form>
            
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Change Password</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form action="{{ route('change_password', ['user' => auth()->user()->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                      <label for="inputEstimatedBudget">Current Password</label>
                      <input type="text" name="current_password" id="inputEstimatedBudget" class="form-control">
                    </div>
                    @error('current_password')
                        <span class="text-danger">{{ $message }}</span>                      
                    @enderror 
                    <div class="form-group">
                      <label for="inputSpentBudget">New Password</label>
                      <input type="text" name="password" id="inputSpentBudget" class="form-control">
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>                      
                    @enderror 
                    <div class="form-group">
                      <label for="inputEstimatedDuration">Confirm New Password</label>
                      <input type="text" name="password_confirmation" id="inputEstimatedDuration" class="form-control">
                    </div>
                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>                      
                    @enderror 
                    <div class="col-12">
                      {{-- <a href="#" class="btn btn-secondary">Cancel</a> --}}
                      <input type="submit" value="Change Password" class="btn btn-success float-right">
                    </div> 
                </div>
            </form>
            
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      {{-- <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new Project" class="btn btn-success float-right">
        </div>
      </div> --}}
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    setTimeout(function() {
        document.getElementById('success-message').style.display = 'none';
    }, 5000); // Hides after 5 seconds
  </script>

  @endsection