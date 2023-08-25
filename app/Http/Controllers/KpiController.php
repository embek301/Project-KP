<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class KpiController extends Controller
{
    //
    public function index()
    {
        $pagetitle='KPI';
        return view('home.kpi',compact('pagetitle'));
    }
}