<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FreelanceWorkOrder;
use PDF; // Ensure barryvdh/laravel-dompdf is installed

class WorkOrderController extends Controller
{
    // Internal Work Orders Page
    public function internalIndex() {
        return view('admin.pages.work_orders.internal');
    }

    // Freelance Work Orders List Page
    public function freelanceIndex() {
        $orders = FreelanceWorkOrder::all();
        return view('admin.pages.work_orders.freelance.index', compact('orders'));
    }

    // Show Create Form
    public function freelanceCreate() {
        return view('admin.pages.work_orders.freelance.create');
    }

    // Success page after submit
    public function freelanceSuccess($id) {
        $order = FreelanceWorkOrder::findOrFail($id);
        return view('admin.pages.work_orders.freelance.success', compact('order'));
    }

    // Store Form Data
    public function freelanceStore(Request $request) {
        // Validate form inputs
        $request->validate([
            'project_ref_no' => 'required',
            'project_name_client' => 'required',
            'project_location' => 'required',
            'date_issued' => 'required|date',
            'project_datetime' => 'required|date',
            'freelancer_name' => 'required',
            'freelancer_designation' => 'required',
            'freelancer_nic_passport' => 'required',
            'freelancer_contact' => 'required',
            'project_scope' => 'required',
        ]);

        // Save to database
        $order = FreelanceWorkOrder::create([
            'project_ref_no' => $request->project_ref_no,
            'project_name_client' => $request->project_name_client,
            'project_location' => $request->project_location,
            'date_issued' => $request->date_issued,
            'project_date_time' => $request->project_datetime,
            'freelancer_name' => $request->freelancer_name,
            'freelancer_designation' => $request->freelancer_designation,
            'freelancer_nic_passport' => $request->freelancer_nic_passport,
            'freelancer_contact' => $request->freelancer_contact,
            'project_scope' => $request->project_scope,
            'project_size_exact' => $request->project_size_exact,
            'project_size_approx' => $request->project_size_approx,
            'project_price_exact' => $request->project_price_exact,
            'project_price_approx' => $request->project_price_approx, // fixed typo
            'price_basis' => $request->price_basis,
            'rate' => $request->rate,
            'total_price' => $request->total_price,
            'payment_advance' => $request->payment_advance,
            'payment_balance' => $request->payment_balance,
            'remarks' => $request->remarks,
            'special_conditions' => $request->special_conditions,
            'approvals_freelancer_name' => $request->approval_freelancer_name,
            'approvals_freelancer_signature' => $request->approval_freelancer_signature,
            'approvals_freelancer_date' => $request->approvals_freelancer_date,
            'approvals_finance' => $request->approval_finance,
            'approvals_finance_date' => $request->approvals_finance_date,
            'approvals_admin' => $request->approval_admin,
            'approvals_admin_date' => $request->approvals_admin_date,
            'approvals_ceo_signature' => $request->approvals_ceo_signature,
            'approvals_ceo_date' => $request->approvals_ceo_date,
        ]);

        // Redirect to success page
        return redirect()->route('admin.work-orders.freelance.success', $order->id);
    }

// Download Form as PDF (filled with submitted data)
public function freelanceDownloadForm($id)
{
    $order = FreelanceWorkOrder::findOrFail($id);

    $pdf = PDF::loadView('admin.pages.work_orders.freelance.pdf', compact('order'))
              ->setPaper('A4', 'portrait');

    return $pdf->download('freelance_work_order_'.$order->id.'.pdf');
}





    // View PDF in browser
    public function freelanceView($id) {
        $order = FreelanceWorkOrder::findOrFail($id);
        $pdf = PDF::loadView('admin.pages.work_orders.freelance.pdf', compact('order'));
        return $pdf->stream('freelance_work_order_'.$order->id.'.pdf');
    }

    // Edit Work Order
    public function freelanceEdit($id) {
        $order = FreelanceWorkOrder::findOrFail($id);
        return view('admin.pages.work_orders.freelance.edit', compact('order'));
    }

public function freelanceUpdate(Request $request, $id)
{
    $order = FreelanceWorkOrder::findOrFail($id);

    // Update fields
    $order->project_ref_no = $request->project_ref_no;
    $order->project_name_client = $request->project_name_client;
    $order->project_location = $request->project_location;
    $order->date_issued = $request->date_issued;
    $order->project_date_time = $request->project_datetime;
    $order->freelancer_name = $request->freelancer_name;
    $order->freelancer_designation = $request->freelancer_designation;
    $order->freelancer_nic_passport = $request->freelancer_nic_passport;
    $order->freelancer_contact = $request->freelancer_contact;
    $order->project_scope = $request->project_scope;
    $order->project_size_exact = $request->project_size_exact;
    $order->project_size_approx = $request->project_size_approx;
    $order->project_price_exact = $request->project_price_exact;
   $order->project_price_approx = $request->project_price_approx;

    $order->price_basis = $request->price_basis;
    $order->rate = $request->rate;
    $order->total_price = $request->total_price;
    $order->payment_advance = $request->payment_advance;
    $order->payment_balance = $request->payment_balance;
    $order->remarks = $request->remarks;
    $order->special_conditions = $request->special_conditions;
    $order->approvals_freelancer_name = $request->approval_freelancer_name;
    $order->approvals_freelancer_signature = $request->approval_freelancer_signature;
    $order->approvals_freelancer_date = $request->approvals_freelancer_date;
    $order->approvals_finance = $request->approval_finance;
    $order->approvals_finance_date = $request->approvals_finance_date;
    $order->approvals_admin = $request->approval_admin;
    $order->approvals_admin_date = $request->approvals_admin_date;
    $order->approvals_ceo_signature = $request->approvals_ceo_signature;
    $order->approvals_ceo_date = $request->approvals_ceo_date;

    $order->save();

    // Redirect to index or success page
    return redirect()->route('admin.work-orders.freelance.index')->with('success', 'Work Order updated successfully!');
}
public function freelanceDelete($id)
{
    $order = FreelanceWorkOrder::findOrFail($id);
    $order->delete();

    return redirect()->route('admin.work-orders.freelance.index')
                     ->with('success', 'Freelance Work Order deleted successfully.');
}



}