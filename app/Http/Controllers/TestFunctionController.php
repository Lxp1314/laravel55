<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TestFunctionController extends Controller
{
    public function mysql(){
        dd(DB::select("select * from " . config('test.mysql-table')));
    }
}
