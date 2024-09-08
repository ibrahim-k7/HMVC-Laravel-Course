<?php

use Illuminate\Support\Facades\Route;
use Modules\Sales\App\Http\Controllers\SalesController;
use Modules\Sales\Interfaces\HtmlOutput;
use Modules\Sales\Repository\SalesRepository;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function () {
    // Route::resource('sales', SalesController::class)->names('sales');
    // Route::resource('salesS', SalesController::class)->names('sales');
    // $s=new SalesController(new SalesRepository);
    // $be=Carbon\Carbon::now()->subDays(10);
    // $end=Carbon\Carbon::now();
    // $htmlOutput = new HtmlOutput();

    // $s->between($be,$end,$htmlOutput);
});
Route::get('/sales-report', function () {
    $salesController = new SalesController(new SalesRepository());
    $startDate = Carbon::now()->subDays(10);
    $endDate = Carbon::now();
    $htmlOutput = new HtmlOutput();

    echo $salesController->between($startDate, $endDate, $htmlOutput);
});