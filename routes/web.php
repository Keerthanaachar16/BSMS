<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;

Route::get('/home', function () {
    return view('home');
});

Route::view('/login','login');

Route::view('/register','register');

Route::view('/forgot-password','forgot-password');

Route::get('/otp', function () {
    return view('otp');
});

Route::get('/reset', function () {
    return view('reset');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::view('/profile_edit','profile_edit');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/official_dashboard', function () {
    return view('official_dashboard');
});

Route::view('/logout','logout');

Route::view('/add_complaints','add_complaints');

Route::view('/complaints_details1','complaints_details1');

Route::view('/complaint_list','complaint_list');

Route::view('/complaint_details','complaint_details');

Route::view('/check_status','check_status');

Route::view('/card_details','card_details');

Route::view('/admin_login','admin_login');

Route::view('/admin_forgot_password','admin_forgot_password');

Route::view('/admin_otp','admin_otp');

Route::view('/admin_reset','admin_reset');

Route::view('/admin','admin');

Route::view('/admin_dashboard','admin_dashboard');

Route::view('/admin1_dashboard','admin1_dashboard');

Route::view('/admin_complaint_list','admin_complaint_list');

Route::view('/zone','zone');

Route::view('/add_zone','add_zone');

Route::view('/division','division');

Route::view('/add_division','add_division');

Route::view('/ward','ward');

Route::view('/add_ward','add_ward');

Route::view('/role','role');

Route::view('/role1','role1');

Route::view('/add_role','add_role');

Route::view('/edit_zone','edit_zone');

Route::view('/edit_zone1','edit_zone1');

Route::view('/edit_division','edit_division');

Route::view('/edit_ward','edit_ward');

Route::view('/edit_role','edit_role');

Route::view('/officials','officials');

Route::view('/officials1','officials1');

Route::view('/add_user','add_user');

Route::view('/view_user','view_user');

Route::view('/admin_comlist','admin_comlist');

Route::view('/admin_comlist_view','admin_comlist_view');

Route::view('/officials_login','officials_login');

Route::view('/officials_forgot_password','officials_forgot_password');

Route::view('/officials_otp','officials_otp');

// Route::view('/officials_verify_otp','officials_verify_otp');

Route::view('/officials_reset','officials_reset');

Route::view('/official_dashboard','official_dashboard');

Route::view('/official_complaints','official_complaints');

Route::view('/official_complaints_view','official_complaints_view');

Route::view('/history','history');

Route::view('/history_view','history_view');

Route::view('/index','index');

Route::view('/app_officials','app_officials');

Route::view('/app_users','app_users');



use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/app_users', [AuthController::class, 'app_users']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

use App\Http\Controllers\ForgotPasswordController;

Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotForm']);
Route::post('/send-otp', [ForgotPasswordController::class, 'sendOtp']);
Route::post('/verify-otp', [ForgotPasswordController::class, 'verifyOtp']);
Route::post('/reset', [ForgotPasswordController::class, 'resetPassword']);


use App\Http\Controllers\ProfileController;

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile_edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

use App\Http\Controllers\ComplaintController;
Route::match(['get','post'], 'complaints', [ComplaintController::class, 'store'])->middleware('auth');
Route::post('/complaints/assign', [ComplaintController::class, 'assignOfficials'])->name('complaints.assign');
Route::get('/get-officials/{ward}', [ComplaintController::class, 'getOfficials']);
Route::get('/officials/available', [ComplaintController::class, 'getAvailableOfficials'])->name('officials.available');
// Get free officials for reassign
Route::get('/get-free-officials', [ComplaintController::class, 'getFreeOfficials'])->name('officials.free');

// Reassign complaint to official
Route::post('/complaints/reassign', [ComplaintController::class, 'reassignOfficial'])->name('complaints.reassign');

// Show complaints table
Route::get('/admin_comlist', [ComplaintController::class, 'index'])->name('admin_comlist');

// Route::get('/complaints/add', [ComplaintController::class, 'create'])->name('complaints.create');
// Route::post('/complaints', [ComplaintController::class, 'store'])->name('complaints.store');
// Update status
Route::post('/complaints/{id}/status', [ComplaintController::class, 'updateStatus'])->name('complaints.updateStatus');
// Assign and View actions
// Route::get('/complaints/{id}/assign', [ComplaintController::class, 'assign'])->name('complaints.assign');
Route::get('/complaints/{id}/view', [ComplaintController::class, 'view'])->name('complaints.view');
Route::get('/check_status', [ComplaintController::class, 'checkStatus'])->name('check_status');
Route::get('/complaint_list', [ComplaintController::class, 'complaintList'])->name('complaint.list');
Route::get('/complaints_details1/{id}', [ComplaintController::class, 'show'])->name('complaint.show');
Route::get('/complaint_details/{id}', [ComplaintController::class, 'shows'])->name('complaints.shows');
Route::get('/history_view/{id}', [ComplaintController::class, 'shows'])->name('complaints.shows');
Route::get('/view_complaints/{id}', [ComplaintController::class, 'viewcom'])->name('view_complaints');


use App\Http\Controllers\ReportController;

Route::get('/reports', [ReportController::class, 'index'])->name('reports');





use App\Http\Controllers\AdminAuthController;

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);

Route::get('/admin/forgot-password', [AdminAuthController::class, 'showForgot'])->name('admin.forgot');
Route::post('/admin/forgot-password', [AdminAuthController::class, 'sendOtp']);

Route::get('/admin/otp', [AdminAuthController::class, 'showOtp'])->name('admin.otp');
Route::post('/admin/otp', [AdminAuthController::class, 'verifyOtp']);

Route::get('/admin/reset-password', [AdminAuthController::class, 'showReset'])->name('admin.reset');
Route::post('/admin/reset-password', [AdminAuthController::class, 'resetPassword']);

Route::get('/admin/dashboard', function () {
    return "Welcome Admin!";
})->middleware('admin.auth');


use App\Http\Controllers\ZoneController;

// Route::get('/add_zone', [ZoneController::class, 'create'])->name('zones.create');   // Add Zone form
// Route::post('/add_zone', [ZoneController::class, 'store'])->name('zones.store');    // Save zone

// Route::get('/zones', [ZoneController::class, 'index'])->name('zones.index');       // List zones


Route::get('/zones', [ZoneController::class, 'index'])->name('zones.index'); // list zones
Route::get('/zones/add', [ZoneController::class, 'create'])->name('zones.create'); // add form
Route::post('/zones/store', [ZoneController::class, 'store'])->name('zones.store'); // store zone

Route::get('/zones/edit/{id}', [ZoneController::class, 'edit'])->name('zones.edit');  // Edit form
Route::put('/zones/update/{id}', [ZoneController::class, 'update'])->name('zones.update');  // Update zone

// AJAX for fetching coordinates
Route::post('/zones/add/fetch-coordinates', [ZoneController::class, 'fetchCoordinates'])->name('zones.fetchCoordinates');



use App\Http\Controllers\AdminDashboardController;

Route::get('/admin_dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');


use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

use App\Http\Controllers\OfficialDashboardController;

Route::get('/official_dashboard', [OfficialDashboardController::class, 'index'])->name('official.dashboard');
Route::get('/official/check-complaint', [OfficialController::class, 'checkNewComplaint'])
->name('official.check.complaint');


use App\Http\Controllers\CheckComplaintsController;
Route::get('/check_complaints', [CheckComplaintsController::class, 'checkComplaints'])->name('check_complaints');



use App\Http\Controllers\OfficialsController;

Route::get('/add_user', [OfficialsController::class, 'create'])->name('officials.create');
Route::post('/officials/store', [OfficialsController::class, 'store'])->name('officials.store');
Route::get('/officials', [OfficialsController::class, 'index'])->name('officials.index');
Route::get('/view_user/{id}', [OfficialsController::class, 'show'])->name('officials.show');
// Show edit form
Route::get('/edit_user/{id}', [OfficialsController::class, 'edit'])->name('officials.edit');
// Handle update request
Route::put('/edit_user/{id}', [OfficialsController::class, 'update'])->name('officials.update');
Route::delete('/delete_user/{id}', [OfficialsController::class, 'destroy'])->name('officials.destroy');

// For dependent dropdown AJAX
Route::post('/get-divisions', [OfficialsController::class, 'getDivisions'])->name('get.divisions');
Route::post('/get-wards', [OfficialsController::class, 'getWards'])->name('get.wards');
Route::get('/app_officials', [OfficialsController::class, 'app_officials']);
Route::get('/officials/{id}/complaints/{status}', [OfficialsController::class, 'getComplaints'])->name('officials.complaints');
Route::get('/officials/{id}/complaints/{status}/pdf', [OfficialsController::class, 'downloadComplaintsPdf'])->name('officials.complaints.pdf');


use App\Http\Controllers\OfficialAuthController;

// Officials Login Routes
Route::get('/officials_login', [OfficialAuthController::class, 'showLogin'])->name('officials.login');
Route::post('/officials_login', [OfficialAuthController::class, 'login'])->name('officials_login');
Route::get('/officials/logout', [OfficialAuthController::class, 'logout'])->name('officials.logout');
Route::get('/history', [OfficialAuthController::class, 'history'])->name('official.history');


Route::get('/official_complaints', [OfficialAuthController::class, 'myComplaints'])->name('official.complaints');
Route::get('/official_complaints/{id}', [App\Http\Controllers\OfficialAuthController::class, 'showComplaint'])->name('official_complaints.show');


use App\Http\Controllers\OfficialsForgotPasswordController;

// Forgot Password
Route::get('/officials-forgot-password', [OfficialsForgotPasswordController::class, 'showForgotForm'])->name('officials.forgot');
Route::post('/send-otp', [OfficialsForgotPasswordController::class, 'sendOtp'])->name('officials.sendOtp');

// OTP verification
Route::get('/officials-otp', [OfficialsForgotPasswordController::class, 'showOtpForm'])->name('officials.otp');
Route::post('/officials_verify_otp', [OfficialsForgotPasswordController::class, 'verifyOtp'])->name('officials.verifyOtp');

// Reset Password
Route::get('/officials-reset-password', [OfficialsForgotPasswordController::class, 'showResetForm'])->name('officials.reset');
Route::post('/officials_reset', [OfficialsForgotPasswordController::class, 'resetPassword'])->name('officials.resetPassword');

Route::get('/official_dashboard', function () {
    return view('official_dashboard');
})->middleware('auth')->name('official_dashboard');

Route::get('/officials/fetch-complaints', [OfficialAuthController::class, 'fetchAssignedComplaints'])->name('officials.fetchComplaints');
Route::put('/officials/complaints/{id}/update', [OfficialAuthController::class, 'updateComplaint'])->name('complaints.update');
Route::get('/history', [OfficialAuthController::class, 'history'])->name('official.history');

// use App\Http\Controllers\DivisionController;

// Route::resource('divisions', DivisionController::class);
// Route::get('/divisions/{id}/edit', [DivisionController::class, 'edit'])->name('divisions.edit');
// Route::put('/divisions/{id}', [DivisionController::class, 'update'])->name('divisions.update');

use App\Http\Controllers\DivisionController;

Route::get('/divisions', [DivisionController::class, 'index'])->name('divisions.index');
Route::get('/divisions/create', [DivisionController::class, 'create'])->name('divisions.create');
Route::post('/divisions', [DivisionController::class, 'store'])->name('divisions.store');
Route::get('/divisions/{id}/edit', [DivisionController::class, 'edit'])->name('divisions.edit');
Route::put('/divisions/{id}', [DivisionController::class, 'update'])->name('divisions.update');

use App\Http\Controllers\WardController;
// Ward Routes
Route::get('/wards', [WardController::class, 'index'])->name('wards.index');
Route::get('/wards/create', [WardController::class, 'create'])->name('wards.create');
Route::post('/wards', [WardController::class, 'store'])->name('wards.store');
Route::get('/wards/{id}/edit', [WardController::class, 'edit'])->name('wards.edit');
Route::put('/wards/{id}', [WardController::class, 'update'])->name('wards.update');
Route::delete('/wards/{id}', [WardController::class, 'destroy'])->name('wards.destroy');
Route::resource('wards', WardController::class);
Route::get('/wards/get-wards/{division}', [WardController::class, 'getWards']);    

use App\Http\Controllers\OfficialsProfileController;

// Show profile page
Route::get('/officials_profile', [OfficialsProfileController::class, 'show'])->name('officials_profile.show');

// Show edit profile page
Route::get('/officials_profile_edit', [OfficialsProfileController::class, 'edit'])->name('officials_profile.edit');

// Update profile
Route::post('/officials_profile_update', [OfficialsProfileController::class, 'update'])->name('officials_profile.update');