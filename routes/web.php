<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\APCOController;
use App\Http\Controllers\BuyerLinkageController;
use App\Http\Controllers\CSOAccreditationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ELinkageController;
use App\Http\Controllers\ERequestController;
use App\Http\Controllers\FCAProfileController;
use App\Http\Controllers\InterventionsController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RCEFAccreditationController;
use App\Http\Controllers\RsbsaController;
use App\Http\Controllers\RTDMFController;
use App\Http\Controllers\UserTypeController;
use App\Models\Commodities;
use App\Models\District;
use App\Models\Municipality;
use App\Models\Province;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/fields');
Route::get('/fields', function () {
    return view('welcome');
});

Route::get('/fields', [DashboardController::class, 'view']);

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/home', [UserTypeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Group for FCA Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/fca-profile', [ProvinceController::class, 'getAddressOptions']);
    Route::post('/fca-profile', [FCAProfileController::class, 'store'])->name('fca.create');
    Route::get('/fca-profile-create', [FCAProfileController::class, 'show'])->name('fca.view');
    Route::get('/fca-profile-edit', [FCAProfileController::class, 'edit'])->name('fca.edit');
    Route::post('/fca-profile-update', [FCAProfileController::class, 'update'])->name('fca.update');
});

Route::get('/provinces/{province}', function (Province $province) {
    return response()->json($province->municipalities);
});
Route::get('/municipalities/{municipality}', function (Municipality $municipality) {
    return response()->json($municipality->districts);
});
Route::get('/districts/{district}', function (District $district) {
    return response()->json($district->barangays);
});

// Group for E-Request routes
Route::middleware('auth')->group(function () {
    Route::get('/e-request', [ERequestController::class, 'show'])->name('e-request');
    Route::post('/e-request', [ERequestController::class, 'store'])->name('e-request.create');
    Route::get('/e-request-list', [ERequestController::class, 'list'])->name('e-request-list');
    Route::get('/e-request-view/{referenceNumber}', [ERequestController::class, 'view'])->name('e-request.view');
    Route::get('/e-request-edit/{referenceNumber}', [ERequestController::class, 'edit'])->name('e-request.edit');
    Route::post('/e-request-update/{referenceNumber}', [ERequestController::class, 'update'])->name('e-request.update');
});

//Group for CSO Accreditations routes
Route::middleware('auth')->group(function () {
    Route::get('/cso-accreditation', [CSOAccreditationController::class, 'view'])->name('cso-accreditation');
    Route::post('/cso-accreditation-create', [CSOAccreditationController::class, 'store'])->name('cso-accreditation.create');
    Route::get('/cso-accreditation-edit', [CSOAccreditationController::class, 'edit'])->name('cso-accreditation.edit');
    Route::post('/cso-accreditation-update', [CSOAccreditationController::class, 'update'])->name('cso-accreditation.update');
});

//Group for RCEF Accreditations routes
Route::middleware('auth')->group(function () {
    Route::get('/rcef-accreditation', [RCEFAccreditationController::class, 'view'])->name('rcef-accreditation');
    Route::post('/rcef-accreditation-create', [RCEFAccreditationController::class, 'store'])->name('rcef-accreditation.create');
    Route::get('/rcef-accreditation-edit', [RCEFAccreditationController::class, 'edit'])->name('rcef-accreditation.edit');
    Route::post('/rcef-accreditation-update', [RCEFAccreditationController::class, 'update'])->name('rcef-accreditation.update');
});

//Group for E-Linkage routes
Route::middleware('auth')->group(function () {
    Route::get('/e-linkage', [ELinkageController::class, 'view'])->name('e-linkage');
    Route::post('/e-linkage-create', [ELinkageController::class, 'store'])->name('e-linkage.create');
    Route::get('/commodities/{commodity}', function (Commodities $commodity) {
        return response()->json($commodity->subCommodities);
    });
});

//Group for Interventions routes
Route::middleware('auth')->group(function () {
    Route::get('/interventions', [InterventionsController::class, 'view'])->name('interventions');
    Route::post('/interventions', [InterventionsController::class, 'store'])->name('interventions.create');
});

//Group for RTDMF routes
Route::middleware('auth')->group(function () {
    Route::get('/rtdmf-list', [RTDMFController::class, 'view'])->name('rtdmf-list');
});

//Group for APCO routes
Route::middleware('auth')->group(function () {
    Route::get('/apco-requests', [APCOController::class, 'show'])->name('apco-requests');
    Route::get('/apco-view/{referenceNumber}', [APCOController::class, 'view'])->name('apco.view');
    Route::post('/apco-update', [APCOController::class, 'update'])->name('apco.update');
});

//Group for Buyer Linkage routes
Route::middleware('auth')->group(function () {
    Route::get('/buyer-e-linkage', [BuyerLinkageController::class, 'view'])->name('buyer.view');
    Route::post('/buyer-e-linkage', [BuyerLinkageController::class, 'store'])->name('buyer.create');
});

//Group for ADMIN routes
Route::middleware('auth')->group(function () {
    Route::get('/admin-rtdmf-create', [AdminController::class, 'create'])->name('rtdmf.create');
    Route::post('/admin-rtdmf-store', [AdminController::class, 'store'])->name('rtdmf.store');
    Route::get('/admin-user-management', [AdminController::class, 'list'])->name('users.list');
    Route::get('/admin-user-management/fca/{id}', [AdminController::class, 'fcaView'])->name('fcaProfile.view');
    Route::get('/admin-user-management/rsbsa-details/{id}', [AdminController::class, 'rsbsaView'])->name('rsbsaDetails.view');
    Route::get('/admin-user-management/e-request/{id}', [AdminController::class, 'eRequestView'])->name('eRequest.view');
    Route::get('/admin-user-management/accreditations/{id}', [AdminController::class, 'accreditationView'])->name('accreditation.view');
    Route::get('/admin-user-management/e-linkage/{id}', [AdminController::class, 'eLinkageView'])->name('eLinkage.view');
    Route::get('/admin-user-management/interventions/{id}', [AdminController::class, 'interventionView'])->name('intervention.view');
    Route::get('/admin-user-management/user/{id}', [AdminController::class, 'userView'])->name('userProfile.view');
    Route::post('/admin-user-management/{id}', [AdminController::class, 'update'])->name('users.update');
});

// Group for RSBSA routes
Route::middleware('auth')->group(function () {
    Route::get('/rsbsa-details', [RsbsaController::class, 'index'])->name('rsbsa.index');
    Route::post('/rsbsa-details', [RsbsaController::class, 'store'])->name('rsbsa.store');
});

Route::get('/dropdown-options', 'DropdownController@getOptions');


require __DIR__ . '/auth.php';
