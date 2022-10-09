<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index(){
        \DB::connection()->enableQueryLog();
        $businesses = Business::where('name', 'LIKE', '%Well%')->get();
        $queries = \DB::getQueryLog();
        dd($queries);
    }
}
