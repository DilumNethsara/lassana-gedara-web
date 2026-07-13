<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Freelance Work Order PDF</title>
    <style>
        @page {
            margin: 0; /* flush to edges */
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }

        /* Header flush to top */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 140px;
            text-align: center;
        }

        header img {
            width: 100%;
            height: 140px;
        }

        /* Footer flush to bottom */
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 120px;
            text-align: center;
            font-size: 10px;
            color: #666;
        }

        footer img {
            width: 100%;
            height: 120px;
        }

        footer .footer-text {
            margin-top: 5px;
        }

        /* Main content padding to avoid overlap */
        main {
            padding: 150px 30px 130px 75px; /* top = header height + margin, bottom = footer height + margin */
        }

        h3 {
            margin-top: 20px;
        }

        p {
            margin: 2px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        td, th {
            border: 1px solid #000;
            padding: 5px;
        }

        .page-break {
            page-break-before: always;
        }
    </style>
</head>
<body>

<header>
    <img src="{{ public_path('assets/images/lassana_header.png') }}" alt="Header">
</header>

<footer>
    <img src="{{ public_path('assets/images/lassana_footer.png') }}" alt="Footer">
    <div class="footer-text">
        Copyright © 2025 Keen Rabbits (Pvt.) Ltd. | Version 3.2.0
    </div>
</footer>

<main>
    <h3>1. Project Allocation Details</h3>
    <p><b>Ref No:</b> {{ $order->ref_no ?? 'N/A' }}</p>
    <p><b>Name / Client:</b> {{ $order->client_name ?? 'N/A' }}</p>
    <p><b>Location:</b> {{ $order->location ?? 'N/A' }}</p>
    <p><b>Date Issued:</b> {{ $order->date_issued ?? 'N/A' }}</p>
    <p><b>Project Date & Time:</b> {{ $order->project_datetime ?? 'N/A' }}</p>

    <h3>2. Freelancer Details</h3>
    <p><b>Name:</b> {{ $order->freelancer_name ?? 'N/A' }}</p>
    <p><b>Role:</b> {{ $order->freelancer_role ?? 'N/A' }}</p>
    <p><b>NIC / Passport:</b> {{ $order->freelancer_nic ?? 'N/A' }}</p>
    <p><b>Contact:</b> {{ $order->freelancer_contact ?? 'N/A' }}</p>

    <h3>3. Allocated Project Scope</h3>
    <p>{{ $order->project_scope ?? 'N/A' }}</p>

    <h3>4. Allocated Project Size</h3>
    <p><b>Exact:</b> {{ $order->size_exact ?? 'N/A' }}</p>
    <p><b>Approx:</b> {{ $order->size_approx ?? 'N/A' }}</p>

    <h3>5. Allocated Project Price</h3>
    <p><b>Exact:</b> {{ $order->price_exact ?? 'N/A' }}</p>
    <p><b>Approx:</b> {{ $order->price_approx ?? 'N/A' }}</p>

    <h3>6. Payment Terms</h3>
    <p><b>Basis:</b> {{ $order->payment_basis ?? 'N/A' }}</p>
    <p><b>Rate:</b> {{ $order->payment_rate ?? 'N/A' }}</p>
    <p><b>Total Price (LKR):</b> {{ $order->total_price ?? 'N/A' }}</p>
    <p><b>Advance (LKR):</b> {{ $order->advance ?? 'N/A' }}</p>
    <p><b>Balance (LKR):</b> {{ $order->balance ?? 'N/A' }}</p>
    <p><b>Remarks:</b> {{ $order->remarks ?? 'N/A' }}</p>

    <h3>7. Special Conditions</h3>
    <p>{{ $order->special_conditions ?? 'N/A' }}</p>

    <div class="page-break"></div> <!-- start approvals on a new page -->

    <h3>8. Approvals & Signatures</h3>
    <p><b>Freelancer:</b> {{ $order->freelancer_sign ?? 'N/A' }} | Date: {{ $order->freelancer_date ?? 'N/A' }}</p>
    <p><b>Finance:</b> {{ $order->finance_sign ?? 'N/A' }} | Date: {{ $order->finance_date ?? 'N/A' }}</p>
    <p><b>Admin:</b> {{ $order->admin_sign ?? 'N/A' }} | Date: {{ $order->admin_date ?? 'N/A' }}</p>
    <p><b>CEO:</b> {{ $order->ceo_sign ?? 'N/A' }} | Date: {{ $order->ceo_date ?? 'N/A' }}</p>
</main>

</body>
</html>