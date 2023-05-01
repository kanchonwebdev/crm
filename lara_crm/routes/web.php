<?php

use App\Http\Controllers\PeopleleadController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('organizations', function () {
    return view('organizations');
});

Route::get('customer-list', function () {
    return view('customer-list');
});

Route::get('invoices', function () {
    return view('invoices');
});

Route::get('payment', function () {
    return view('payment');
});

Route::get('recent-sale', function () {
    return view('recent-sale');
});

Route::get('estimates', function () {
    return view('estimates');
});

Route::get('expenses', function () {
    return view('expenses');
});

Route::get('deposit', function () {
    return view('deposit');
});

Route::get('transaction', function () {
    return view('transaction');
});

Route::get('transfer-report', function () {
    return view('transfer-report');
});

Route::get('running-task', function () {
    return view('running-task');
});
Route::get('archive-task', function () {
    return view('archive-task');
});

Route::get('client-payment', function () {
    return view('client-payment');
});

Route::get('expense-management', function () {
    return view('expense-management');
});

Route::get('products', function () {
    return view('products');
});

Route::get('warehouse', function () {
    return view('warehouse');
});

Route::get('product-transfer', function () {
    return view('product-transfer');
});

Route::get('expense-management', function () {
    return view('expense-management');
});

Route::get('dealing-info', function () {
    return view('dealing-info');
});

Route::get('client-report', function () {
    return view('client-report');
});

Route::get('employee', function () {
    return view('employee');
});

Route::get('projects', function () {
    return view('projects');
});

Route::get('salary-grade', function () {
    return view('salary-grade');
});

Route::get('employee-salary-list', function () {
    return view('employee-salary-list');
});

Route::get('time-history', function () {
    return view('time-history');
});

Route::get('subscription', function () {
    return view('subscription');
});

Route::get('notice-board', function () {
    return view('notice-board');
});


Route::get('people', [PeopleleadController::class, 'index']);
Route::post('/people-lead-add', [PeopleleadController::class, 'store']);
Route::post('/people-lead-update', [PeopleleadController::class, 'edit']);
Route::get('/people-lead-update/{id}', [PeopleleadController::class, 'update']);