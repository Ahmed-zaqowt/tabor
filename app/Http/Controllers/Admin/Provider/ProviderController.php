<?php

namespace App\Http\Controllers\Admin\Provider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    function index()
    {
          return view('admins.providers.index');
    }


}
