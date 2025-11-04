<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeecontroller; 

Route::get('/', [employeecontroller::class,"index"]);
Route::post('/add-employee', [employeecontroller::class,"addemployeedetails"]); 