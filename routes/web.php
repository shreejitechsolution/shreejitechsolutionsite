<?php

use App\Http\Controllers\website\v1\siteconterller;
use Illuminate\Support\Facades\Route;

Route::get('/',[siteconterller::class,'welcome']);
