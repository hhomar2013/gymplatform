<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class ControlPanel extends Controller
{
    public function index(){
            $companies = Companies::query()->count();
            return view('ControlPanel.index',compact('companies'));

    }
}
