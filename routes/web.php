<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\ContactMaliController;
use App\Http\Controllers\ExportQuoteController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WorkOrderController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\QuickProjectCheckController;


//Main Page Routes
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about-us', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/our-team', function () {
    return view('pages.our_team');
})->name('our_team');

Route::get('/quote', function () {
    return view('quote.quote');
})->name('mainQuote');

Route::get('/quick-project-check', [QuickProjectCheckController::class, 'create'])->name('quick_project_check.create');
Route::post('/quick-project-check', [QuickProjectCheckController::class, 'store'])->name('quick_project_check.store');
Route::get('/quick-project-check/thank-you/{quickProjectCheck}', [QuickProjectCheckController::class, 'thankYou'])->name('quick_project_check.thank_you');
Route::post('/quick-project-check/whatsapp/{quickProjectCheck}', [QuickProjectCheckController::class, 'redirectToWhatsapp'])->name('quick_project_check.whatsapp');
Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/architectural-1', function () {
    return view('projects.architectural_1');
})->name('architectural_1');
 
Route::get('/architectural-2', function () {
    return view('projects.architectural_2');
})->name('architectural_2');
 


Route::get('/projectsX', [ProjectController::class, 'projects'])->name('projects');
Route::get('/projects/domestic', [ProjectController::class, 'domestic'])->name('Domestic');
Route::get('/projects/commercial', [ProjectController::class, 'commercial'])->name('Commercial');
Route::get('/projects/interior', [ProjectController::class, 'interior'])->name('Interior');
Route::get('/projects/industrial', [ProjectController::class, 'industrial'])->name('Industrial');


Route::get('/projects/architectural-more', [ProjectController::class, 'architectural_more'])->name('ArchitecturalMore');
Route::get('/projects/coatings', [ProjectController::class, 'coatings'])->name('Coatings');

//Single Services Routes
Route::get('/services/Luxury-&-Affordable-Housing-Development', function () {
    return view('services.service_01');
})->name('Luxury_&_Affordable_Housing_Development');
Route::get('/services/Commercial-&-Industrial-Construction', function () {
    return view('services.service_02');
})->name('Commercial_&_Industrial_Construction');
Route::get('/services/Renovation-&-Restoration-Services', function () {
    return view('services.service_03');
})->name('Renovation_&_Restoration_Services');
Route::get('/services/Interior-&-Exterior-Designing', function () {
    return view('services.service_04');
})->name('Interior_&_Exterior_Designing');
Route::get('/services/Sustainable-&-Eco-Friendly-Construction', function () {
    return view('services.service_05');
})->name('Sustainable_&_Eco_Friendly_Construction');
Route::get('/services/Civil-Engineering-&-MEP-Services', function () {
    return view('services.service_06');
})->name('Civil_Engineering_&_MEP_Services');
Route::get('/services/Vaasthu-Consulting-&-Traditional-Architecture', function () {
    return view('services.service_07');
})->name('Vaasthu_Consulting_&_Traditional_Architecture');
Route::get('/services/Real-Estate-Investment-&-Property-Development', function () {
    return view('services.service_08');
})->name('Real_Estate_Investment_&_Property_Development');
Route::get('/services/Prefabricated-&-Modular-Construction', function () {
    return view('services.service_09');
})->name('Prefabricated_&_Modular_Construction');
Route::get('/services/Estimates-Design-Approvals-&-Financing-Services', function () {
    return view('services.service_10');
})->name('Estimates_Design_Approvals_&_Financing_Services');
Route::get('/services/Exporting-Construction-Services-&-Expertise', function () {
    return view('services.service_11');
})->name('Exporting_Construction_Services_&_Expertise');

//Contact Mail Routes
Route::post('/contact/send-mail', [ContactMaliController::class,'sendMail'])->name('send_mail');

//Quote Routes
Route::post('quote/quote-client-details', [QuoteController::class, 'quote'])->name('quote');
Route::post('/get-quote', [QuoteController::class, 'getQuote'])->name('getQuote');


//Admin Side Routes

Route::middleware('guest')->group(function () {

Route::get('/login', [AdminController::class, 'getLogin'])->name('get_login');

Route::post('/login', [AdminController::class, 'login'])->name('login');

});


Route::middleware('auth')->group(function () {

    Route::get('/register', [AdminController::class, 'getRegister'])->name('get_register');

    Route::post('/register', [AdminController::class, 'register'])->name('register');
        
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [AdminController::class, 'getDashboard'])->name('dashboard');

    Route::get('/contact-requests', [AdminController::class, 'getContactRequests'])->name('contact_requests');

    Route::get('/profile/{user}', [AdminController::class, 'getProfile'])->name('get_profile');

    Route::get('/quote-requests/{service}', [AdminController::class, 'getQuoteRequests'])->name('quote_requests');

    Route::get('/quote-requests/{service}/view/{quote}', [AdminController::class, 'viewQuoteRequest'])->name('view_quote_request');

    Route::put('/update-profile/{user}', [AdminController::class, 'updateProfile'])->name('update_profile');

    Route::put('/change-password/{user}', [AdminController::class, 'changePassword'])->name('change_password');
    
    Route::get('/export-pdf/{quote}', [PDFController::class, 'generatePDF'])->name('generate_pdf');

    Route::get('/export-quote/{id}', [ExportQuoteController::class, 'exportQuote'])->name('export_quote');

    Route::put('/update-quote/{id}', [QuoteController::class, 'updateQuote'])->name('update_quote');

});



Route::get('/user-logs', [AdminController::class, 'getUserLogs'])->name('get_user_logs');

Route::get('/user-logs/{userLog}', [AdminController::class, 'getUserLogsDetails'])->name('get_user_logs_details');

Route::get('/user-logs/single/{id}', [AdminController::class, 'getSingleUserLogs'])->name('get_user_logs_single');

Route::get('/user-logs-quote/{id}', [AdminController::class, 'getUserLogsQuote'])->name('get_user_logs_quote');

Route::get('/verify-email', [AdminController::class, 'getVerifyEmail'])->name('get_verify_email');

Route::post('/verify-email', [AdminController::class,'verifyEmail'])->name('verify_email');

//Site Map Route
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Admin Work Orders Routes
Route::prefix('admin/work-orders')->name('admin.work-orders.')->group(function () {

    // Internal Work Orders
    Route::get('internal', [WorkOrderController::class, 'internalIndex'])->name('internal.index');

    // Freelance Work Orders
    Route::get('freelance', [WorkOrderController::class, 'freelanceIndex'])->name('freelance.index');
    Route::get('freelance/create', [WorkOrderController::class, 'freelanceCreate'])->name('freelance.create');
    Route::post('freelance/store', [WorkOrderController::class, 'freelanceStore'])->name('freelance.store');

    // Success Page
    Route::get('freelance/success/{id}', [WorkOrderController::class, 'freelanceSuccess'])->name('freelance.success');
 // Create Form
    Route::get('freelance/create', [WorkOrderController::class, 'freelanceCreate'])->name('freelance.create');
    Route::post('freelance/store', [WorkOrderController::class, 'freelanceStore'])->name('freelance.store');

    // Edit Form
    Route::get('freelance/{id}/edit', [WorkOrderController::class, 'freelanceEdit'])->name('freelance.edit');
    Route::put('freelance/{id}/update', [WorkOrderController::class, 'freelanceUpdate'])->name('freelance.update');

    // View PDF
    Route::get('freelance/{id}/view', [WorkOrderController::class, 'freelanceView'])->name('freelance.view');

    // Download PDF
    Route::get('freelance/{id}/download-form', [WorkOrderController::class, 'freelanceDownloadForm'])->name('freelance.downloadForm');

    // Download PDF for Freelance Work Orders
Route::get('freelance/{id}/pdf', [WorkOrderController::class, 'freelanceDownloadForm'])
     ->name('freelance.pdf');

  // Delete Freelance Work Order
    Route::delete('freelance/{id}', [WorkOrderController::class, 'freelanceDelete'])
         ->name('freelance.delete');
});
// =========================================================================
//  NEW ADDITION: KEEN RABBITS CUSTOM EMAIL + OTP ADMIN DASHBOARD SYSTEM
// =========================================================================

// =========================================================================
//  LASSANA GEDARA - ADMIN SYSTEM ROUTES
// =========================================================================

// LOGIN FLOW 
Route::get('/admin-login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin-login', [AdminAuthController::class, 'sendOtp'])->name('admin.login.submit');
Route::get('/admin-otp', [AdminAuthController::class, 'showOtp'])->name('admin.otp.view');
Route::post('/admin-otp', [AdminAuthController::class, 'verifyOtp'])->name('admin.otp.submit');
Route::get('/admin-logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// PROTECTED DASHBOARD ROUTES 
Route::middleware(['web'])->group(function () {
    Route::get('/admin-dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin-dashboard/project', [AdminDashboardController::class, 'store'])->name('admin.project.store');
    Route::delete('/admin-dashboard/project/{id}', [AdminDashboardController::class, 'destroy'])->name('admin.project.delete');
});


// Admin Routes
Route::get('/admin/projects', [ProjectController::class, 'adminIndex'])->name('admin.projects.index');
Route::post('/admin/projects/store', [ProjectController::class, 'store'])->name('admin.projects.store');

// Front-End Routes 
Route::get('/projects/architectural', [ProjectController::class, 'architectural'])->name('Architectural');
Route::get('/projects/architectural_1', [ProjectController::class, 'architectural_one'])->name('architectural_1');
Route::get('/projects/architectural_2', [ProjectController::class, 'architectural_more'])->name('ArchitecturalMore');
Route::get('/projects/architectural_2', [ProjectController::class, 'architectural_more'])->name('architectural_2');
