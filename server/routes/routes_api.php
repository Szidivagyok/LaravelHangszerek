<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstrumentController;

Route::get('instruments',[InstrumentController::class,'index']);
Route::get('instruments/{id}',[InstrumentController::class,'show']);
Route::post('instruments',[InstrumentController::class,'store']);
Route::patch('instruments/{id}',[InstrumentController::class,'update']);
Route::delete('instruments/{id}',[InstrumentController::class,'destroy']);
