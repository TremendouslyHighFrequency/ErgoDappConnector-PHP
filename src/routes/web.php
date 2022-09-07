<?php 
use Illuminate\Support\Facades\Route;
use Terahertz\ErgoDappConnector\Controllers\DappAuthController;

Route::post('nautilus-login', [DAPPAuthController::class, 'nautilusLogin']);