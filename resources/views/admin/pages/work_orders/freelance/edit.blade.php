@extends('admin.layout.admin_front')

@section('title', 'Edit Freelance Work Order')
@section('page-title', 'Edit Freelance Work Order')

@section('content')
<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Edit WORK ORDER – FREELANCER</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Work Order</li>
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
              <h3 class="card-title">Edit Allocated Project Work Order – Freelancer</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

            <!-- Edit Form -->
            <form action="{{ route('admin.work-orders.freelance.update', $order->id) }}" method="POST">
                @csrf
                @method('PUT')

            <div class="card-body">

                <!-- 1. Project Allocation Details -->
                <h5>1. Project Allocation Details</h5>
                <div class="form-group">
                    <label>Allocated Project Ref. No.</label>
                    <input type="text" class="form-control" name="project_ref_no" value="{{ $order->project_ref_no }}" required>
                </div>
                <div class="form-group">
                    <label>Allocated Project Name / Client</label>
                    <input type="text" class="form-control" name="project_name_client" value="{{ $order->project_name_client }}" required>
                </div>
                <div class="form-group">
                    <label>Allocated Project Location</label>
                    <input type="text" class="form-control" name="project_location" value="{{ $order->project_location }}" required>
                </div>
                <div class="form-group">
                    <label>Date Issued</label>
                    <input type="date" class="form-control" name="date_issued" value="{{ $order->date_issued }}" required>
                </div>
                <div class="form-group">
                    <label>Project Date and Time</label>
                    <input type="datetime-local" class="form-control" name="project_datetime" value="{{ $order->project_date_time }}" required>
                </div>

                <!-- 2. Freelancer Details -->
                <h5>2. Freelancer Details</h5>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="freelancer_name" value="{{ $order->freelancer_name }}" required>
                </div>
                <div class="form-group">
                    <label>Designation / Role</label>
                    <input type="text" class="form-control" name="freelancer_designation" value="{{ $order->freelancer_designation }}" required>
                </div>
                <div class="form-group">
                    <label>NIC / Passport No.</label>
                    <input type="text" class="form-control" name="freelancer_nic_passport" value="{{ $order->freelancer_nic_passport }}" required>
                </div>
                <div class="form-group">
                    <label>Contact No.</label>
                    <input type="text" class="form-control" name="freelancer_contact" value="{{ $order->freelancer_contact }}" required>
                </div>

                <!-- 3. Allocated Project Scope -->
                <h5>3. Allocated Project Scope</h5>
                <div class="form-group">
                    <textarea class="form-control" name="project_scope" rows="5" required>{{ $order->project_scope }}</textarea>
                </div>

                <!-- 4. Allocated Project Size -->
                <h5>4. Allocated Project Size</h5>
                <div class="form-group">
                    <label>Exact</label>
                    <input type="text" class="form-control" name="project_size_exact" value="{{ $order->project_size_exact }}">
                    <label>Approx</label>
                    <input type="text" class="form-control" name="project_size_approx" value="{{ $order->project_size_approx }}">
                </div>

                <!-- 5. Allocated Project Price & Payment Terms -->
                <h5>5. Allocated Project Price</h5>
                <div class="form-group">
                    <label>Exact</label>
                    <input type="text" class="form-control" name="project_price_exact" value="{{ $order->project_price_exact }}">
                    <label>Approx</label>
                    <input type="text" class="form-control" name="project_ptrice_approx" value="{{ $order->project_ptrice_approx }}">
                </div>

                <h5>Payment Terms</h5>
                <div class="form-group">
                    <label>Basis</label>
                    <input type="text" class="form-control" name="price_basis" value="{{ $order->price_basis }}">
                </div>
                <div class="form-group">
                    <label>Rate</label>
                    <input type="text" class="form-control" name="rate" value="{{ $order->rate }}">
                </div>
                <div class="form-group">
                    <label>Total Price (LKR)</label>
                    <input type="text" class="form-control" name="total_price" value="{{ $order->total_price }}">
                </div>
                <div class="form-group">
                    <label>Payment Advance (LKR)</label>
                    <input type="text" class="form-control" name="payment_advance" value="{{ $order->payment_advance }}">
                </div>
                <div class="form-group">
                    <label>Payment Balance (LKR)</label>
                    <input type="text" class="form-control" name="payment_balance" value="{{ $order->payment_balance }}">
                </div>

                <div class="form-group">
                    <label>Remarks</label>
                    <textarea class="form-control" name="remarks" rows="3">{{ $order->remarks }}</textarea>
                </div>

                <!-- 6. Special Conditions -->
                <h5>6. Special Conditions</h5>
                <div class="form-group">
                    <textarea class="form-control" name="special_conditions" rows="3">{{ $order->special_conditions }}</textarea>
                </div>

                <!-- 7. Approvals & Signatures -->
                <h5>7. Approvals & Signatures</h5>
                <div class="form-group">
                    <label>Freelancer Acceptance</label>
                    <input type="text" class="form-control" name="approval_freelancer_name" value="{{ $order->approvals_freelancer_name }}" required>
                </div>
                <div class="form-group">
                    <label>Signature / Date</label>
                    <input type="text" class="form-control" name="approval_freelancer_signature" value="{{ $order->approvals_freelancer_signature }}">
                    <input type="date" class="form-control" name="approvals_freelancer_date" value="{{ $order->approvals_freelancer_date }}" required>
                </div>

                <div class="form-group">
                    <label>Finance Department Approval / Date</label>
                    <input type="text" class="form-control" name="approval_finance" value="{{ $order->approvals_finance }}">
                    <input type="date" class="form-control" name="approvals_finance_date" value="{{ $order->approvals_finance_date }}" required>
                </div>

                <div class="form-group">
                    <label>Administration Department Approval / Date</label>
                    <input type="text" class="form-control" name="approval_admin" value="{{ $order->approvals_admin }}">
                    <input type="date" class="form-control" name="approvals_admin_date" value="{{ $order->approvals_admin_date }}" required>
                </div>

                <div class="form-group">
                    <label>CEO / Managing Director Approval / Signature / Date</label>
                    <input type="text" class="form-control" name="approvals_ceo_signature" value="{{ $order->approvals_ceo_signature }}">
                    <input type="date" class="form-control" name="approvals_ceo_date" value="{{ $order->approvals_ceo_date }}" required>
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-success">Update Work Order</button>

                <a href="{{ route('admin.work-orders.freelance.index') }}" class="btn btn-secondary">Back to List</a>
            </div>

            </form>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection