<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        return wiew('businesses');

//        \DB::connection()->enableQueryLog();
//        $businesses = Business::where('name', 'LIKE', '%Well%')->get();
//        $queries = \DB::getQueryLog();
//        dd($queries);
    }

    public function store(){

    }
}
