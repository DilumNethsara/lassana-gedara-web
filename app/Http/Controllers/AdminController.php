<?php

namespace App\Http\Controllers;

use view;
use App\Models\User;
use App\Mail\OTPMail;
use App\Models\Quote;
use App\Models\Contact;
use App\Models\UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function getUserLogsQuote ($id){
        $user = Auth::user();

        if ($user->user_type != 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $userLogs = UserLog::orderBy('created_at', 'desc')->where('quote_id', $id)->get();

        return view('admin.pages.user_logs', compact('userLogs'));
    }
    public function getSingleUserLogs ($id){
        $user = Auth::user();

        if ($user->user_type != 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $userLogs = UserLog::orderBy('created_at', 'desc')->where('user_id', $id)->get();

        return view('admin.pages.user_logs', compact('userLogs'));
    }
    public function getUserLogsDetails(UserLog $userLog) {

        $user = Auth::user();

        if ($user->user_type != 'admin') {
            abort(403, 'Unauthorized action.');
        }

        if ($userLog->changes === null) {
            $formattedChanges = [];
        }else{
            // Process the changes array using our helper function
        $formattedChanges = $this->formatChanges($userLog->changes);
        }       
        
        // Pass both the userLog and the formatted changes to the view
        return view('admin.pages.user_logs_details', compact('userLog', 'formattedChanges'));
    }

    private function formatChanges(array $changes): array {
        $formatted = [];
        
        foreach ($changes as $field => $change) {
            // If we have both 'old' and 'new', assume it's a leaf node.
            if (isset($change['old']) && isset($change['new'])) {
                // If the values are arrays, join them into a comma-separated string.
                $oldValue = is_array($change['old']) ? implode(', ', $change['old']) : $change['old'];
                $newValue = is_array($change['new']) ? implode(', ', $change['new']) : $change['new'];
                
                $formatted[$field] = "{$oldValue} → {$newValue}";
            } else {
                // Otherwise, it's a nested array (for example, additional_details)
                $formatted[$field] = $this->formatChanges($change);
            }
        }
        
        return $formatted;
    }
    public function getUserLogs (){
        $user = Auth::user();

        if ($user->user_type != 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $userLogs = UserLog::orderBy('created_at', 'desc')->get();

        return view('admin.pages.user_logs', compact('userLogs'));
    }
    public function changePassword (User $user, Request $request){

        $request->validate([
            'current_password' => 'required|current_password',
            'password' => 'required|confirmed|different:current_password',

        ]);

        $user->update([
            'password' => bcrypt($request->password),
        ]);

        Auth::logout();
        return redirect()->route('get_login')->with('success', 'Password changed successfully!');
    }
    public function updateProfile (User $user, Request $request){
        // return $request;

       $request->validate([
           'user_name' => 'required',
       ]);

       $user->update([
           'name' => $request->user_name,
       ]);

        return back()->with('success', 'Profile updated successfully!');
    }
    public function verifyEmail(Request $request){

        $request->validate([
            'otp' => 'required|alpha_num|size:8',
        ]);

        $email = Session::get('otp_email');
        if (!$email) {
            return redirect()->route('get_login')->with('error', 'Session expired. Please login again.');
        }

        $user = User::where('email', $email)->where('otp', $request->otp)->where('otp_expires_at', '>', now())->first();

        if ($user) {
            // Clear OTP after successful login
            User::where('email', $email)->update(['otp' => null, 'otp_expires_at' => null]);
    
            // Log in user
            Auth::loginUsingId($user->id);
    
            // Forget session email
            Session::forget('otp_email');
    
            return redirect()->route('dashboard')->with('success', 'Login successful!');
        }

        return back()->with('error', 'Invalid or expired OTP. Login again.');

    }

    public function getVerifyEmail(){
        return view('admin.pages.otpVerification');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('get_login')->with('success', 'Logout successful!');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::validate(['email' => $request->email, 'password' => $request->password])) {

            $email = $request->email;
           
            $otp = strtoupper(bin2hex(random_bytes(4)));

            User::where('email', $request->email)->update(['otp' => $otp, 'otp_expires_at' => now()->addMinutes(5),]);

            // $email1 = "dinethra@keenrabbits.biz";
           
            Mail::to($email)->send(new OTPMail($request->email, $otp));

            Session::put('otp_email', $email);

            // dd(session()->all());

            return redirect()->route('get_verify_email')->with('success', 'OTP sent to your email.');
        }

        return redirect()->route('get_login')->with('error', 'Login failed!');
    }
    public function getLogin(){
        return view('admin.pages.login');
    }

    public function register(Request $request){
        // return $request;
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:lg_users',
            'role' => 'required',
            'password' => 'required|confirmed',
        ]); 
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'user_type' => $request->role,
        ]);
        return redirect()->route('dashboard')->with('success', 'Registration successful!');
    }

    public function getRegister(){

        $user = Auth::user();
        
        if ($user->user_type != 'admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.pages.register');
    }

    public function viewQuoteRequest($service, Quote $quote){

        // return $quote;

        $service = str_replace('-', ' ', $service);

        $additionalDetails = $quote->additional_details;

        if ($service == 'Domestic House') {
            return view('admin.pages.quote.domestic_house_quote_details', compact('quote', 'service', 'additionalDetails'));
        }elseif ($service == 'Commercial Building'){
            return view('admin.pages.quote.commercial_building_quote_details', compact('quote', 'service', 'additionalDetails'));
        }elseif ($service == 'Interior Designing & Fabrication'){
            // return $additionalDetails;
            return view('admin.pages.quote.interior_designing_&_fabrication_quote_details', compact('quote', 'service', 'additionalDetails'));
        }elseif ($service == 'Housing Plan Drawing'){
            // return $additionalDetails;
            return view('admin.pages.quote.housing_plan_drawing_quote_details', compact('quote', 'service', 'additionalDetails'));
        }elseif ($service == 'BOQ'){
            // return $additionalDetails;
            return view('admin.pages.quote.boq_quote_details', compact('quote', 'service', 'additionalDetails'));
        }

    }

    public function getQuoteRequests($service){

        $originalService = $service;

        $service = str_replace('-', ' ', $service);

        $quoteRequests = Quote::where('service', $service)->orderBy('created_at', 'desc')->get();

        return view('admin.pages.quote.quote_requests', compact('quoteRequests', 'service', 'originalService'));
    }
    public function getDashboard(){
        $quoteCounts = DB::table('quote')
                        ->select('service', DB::raw('count(*) as total'))
                        ->groupBy('service')
                        ->get();

        $services = $quoteCounts->map(fn($quote) => $quote->service);
        $counts = $quoteCounts->pluck('total');

        return view('admin.pages.dashboard', compact('quoteCounts', 'services', 'counts'));
    }
    public function getContactRequests(){

        $contactRequests = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.pages.contact_requests', compact('contactRequests'));
    }

    public function getProfile(User $user){

        if (auth()->id() != $user->id) {
            abort(403, 'Unauthorized action.');
        }
        // $user = Auth::user();
        return view('admin.pages.profile', compact('user'));
    }



}
