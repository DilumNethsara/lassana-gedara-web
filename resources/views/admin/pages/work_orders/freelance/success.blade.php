@extends('admin.layout.admin_front')

@section('content')
<div class="content-wrapper">
    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid mt-5">

            <!-- Success Alert -->
            <div class="alert alert-success d-flex align-items-center justify-content-center text-center">
                <span class="me-2">✅</span>
                <span>Work Order Submitted Successfully!</span>
            </div>

            <!-- Buttons Section -->
            <div class="d-flex justify-content-center flex-wrap mt-4" style="gap: 20px;">
                <!-- Download Form PDF -->
                <a href="{{ route('admin.work-orders.freelance.downloadForm', $order->id) }}" 
                   class="btn btn-success px-4 py-2">
                   Download Form as PDF
                </a>

                <!-- Edit Work Order -->
                <a href="{{ route('admin.work-orders.freelance.edit', $order->id) }}" 
                   class="btn btn-warning px-4 py-2">
                   Edit Work Order
                </a>

                <!-- Back to List -->
                <a href="{{ route('admin.work-orders.freelance.index') }}" 
                   class="btn btn-secondary px-4 py-2">
                   Back to List
                </a>
            </div>

        </div>
    </section>
</div>
@endsection