<?php

namespace App\Http\Controllers\Admin\Report\Provider;

use App\Http\Controllers\Controller;
use App\Models\Line;
use App\Models\Salon;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ProviderController extends Controller
{
    function index()
    {
        if (Auth::user()->role!=1&&Auth::user()->role!=2){
            abort(403);
        };
        $now = Carbon::now();
        $threeMonthsAgo = $now->subMonths(3);
        $oneYearAgo = $now->subYear();


        $today = Salon::whereDate('created_at', Carbon::today())->count();
        $lastWeek = Salon::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $lastMonth = Salon::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
        $lastQuarter = Salon::where('created_at', '>=', $threeMonthsAgo)->count();
        $lastYear = Salon::where('created_at', '>=', $oneYearAgo)->count();
        return view('admins.reports.provider.index' , compact('today' , 'lastMonth' , 'lastQuarter' , 'lastYear' , 'lastWeek')) ;
    }


    function getdata(){

        $item = Salon::query();
        return DataTables::of($item)
            ->make(true);
    }
}
