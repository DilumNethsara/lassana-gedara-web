@extends('admin.layout.admin_front')

@section('title', 'Create Freelance Work Order')
@section('page-title', 'Create Freelance Work Order')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  @if(session('success'))
    <div id="success-message" class="alert alert-success text-center fs-5">
        {{ session('success') }}
    </div>    
  @endif

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1>WORK ORDER – FREELANCER</h1>
        </div>
        <div class="col-sm-12">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">ALLOCATED PROJECT WORK ORDER – FREELANCER</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>

          <form action="{{ route('admin.work-orders.freelance.store') }}" method="POST">
            @csrf
            <div class="card-body">

              <!-- 1. Project Allocation Details -->
              <h5>1. Project Allocation Details</h5>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Project Ref. No.</label>
                      <input type="text" class="form-control" name="project_ref_no" placeholder="LG-2_- _____" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Project Name / Client</label>
                      <input type="text" class="form-control" name="project_name_client" required>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Project Location</label>
                      <input type="text" class="form-control" name="project_location" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                      <label>Date Issued</label>
                      <input type="date" class="form-control" name="date_issued" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                      <label>Project Date & Time</label>
                      <input type="datetime-local" class="form-control" name="project_datetime" required>
                  </div>
                </div>
              </div>

              <!-- 2. Freelancer Details -->
              <h5>2. Freelancer Details</h5>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="freelancer_name" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Designation / Role</label>
                      <input type="text" class="form-control" name="freelancer_designation" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>NIC / Passport No.</label>
                      <input type="text" class="form-control" name="freelancer_nic_passport" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Contact No.</label>
                      <input type="text" class="form-control" name="freelancer_contact" required>
                  </div>
                </div>
              </div>

              <!-- 3. Allocated Project Scope -->
              <h5>3. Project Scope</h5>
              <div class="form-group">
                  <textarea class="form-control" name="project_scope" rows="5" placeholder="Describe project scope..." required></textarea>
              </div>

              <!-- 4. Allocated Project Size -->
              <h5>4. Project Size</h5>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Exact</label>
                      <input type="text" class="form-control" name="project_size_exact">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Approx</label>
                      <input type="text" class="form-control" name="project_size_approx">
                  </div>
                </div>
              </div>

              <!-- 5. Project Price & Payment Terms -->
              <h5>5. Project Price & Payment Terms</h5>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Exact Price (LKR)</label>
                      <input type="text" class="form-control" name="project_price_exact">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Approx Price (LKR)</label>
                      <input type="text" class="form-control" name="project_ptrice_approx">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                      <label>Payment Basis</label>
                      <input type="text" class="form-control" name="price_basis">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <label>Rate</label>
                      <input type="text" class="form-control" name="rate">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <label>Total Price (LKR)</label>
                      <input type="text" class="form-control" name="total_price">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Payment Advance (LKR)</label>
                      <input type="text" class="form-control" name="payment_advance">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Payment Balance (LKR)</label>
                      <input type="text" class="form-control" name="payment_balance">
                  </div>
                </div>
              </div>

              <div class="form-group">
                  <label>Remarks</label>
                  <textarea class="form-control" name="remarks" rows="3" placeholder="Remarks..."></textarea>
              </div>

              <!-- 6. Special Conditions -->
              <h5>6. Special Conditions</h5>
              <div class="form-group">
                  <textarea class="form-control" name="special_conditions" rows="3"></textarea>
              </div>

              <!-- 7. Approvals & Signatures -->
              <h5>7. Approvals & Signatures</h5>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                      <label>Freelancer Name</label>
                      <input type="text" class="form-control" name="approval_freelancer_name" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <label>Signature</label>
                      <input type="text" class="form-control" name="approval_freelancer_signature" placeholder="Signature">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <label>Date</label>
                      <input type="date" class="form-control" name="approvals_freelancer_date" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                      <label>Finance Dept Approval</label>
                      <input type="text" class="form-control" name="approval_finance">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                      <label>Date</label>
                      <input type="date" class="form-control" name="approvals_finance_date" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <label>Admin Dept Approval</label>
                      <input type="text" class="form-control" name="approval_admin">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                      <label>Date</label>
                      <input type="date" class="form-control" name="approvals_admin_date" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                      <label>CEO/MD Approval</label>
                      <input type="text" class="form-control" name="approvals_ceo_signature" placeholder="Signature">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                      <label>Date</label>
                      <input type="date" class="form-control" name="approvals_ceo_date" required>
                  </div>
                </div>
              </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Submit Work Order</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
  setTimeout(function() {
      document.getElementById('success-message').style.display = 'none';
  }, 5000); // Hides after 5 seconds
</script>

@endsection