<?php 
use Illuminate\Support\Facades\Route;
use Terahertz\ErgoDappConnector\Controllers\DappAuthController;

Route::group(['middleware' => ['web']], function () {

    Route::post('nautilus-login', [DAPPAuthController::class, 'nautilusLogin']);

});