<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DailyLuckyController extends Controller
{
    function index(Request $request) {
        if ($request->has('day')) {
            return $request;
        }
        else {
            return abort(404);
        }
    }
}
