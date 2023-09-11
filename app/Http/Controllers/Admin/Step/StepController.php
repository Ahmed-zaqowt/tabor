<?php

namespace App\Http\Controllers\Admin\Step;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StepController extends Controller
{

    function index(){
        return view('admins.steps.index');
    }
}
