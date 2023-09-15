<?php

namespace App\Http\Controllers\Admin\Report\User;

use App\Http\Controllers\Controller;
use App\Models\Line;
use App\Models\Salon;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;


class UserController extends Controller
{
    function index()
    {
        $now = Carbon::now();
        $threeMonthsAgo = $now->subMonths(3);
        $oneYearAgo = $now->subYear();


        $today = User::whereDate('created_at', Carbon::today())->count();
        $lastWeek = User::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $lastMonth = User::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
        $lastQuarter = User::where('created_at', '>=', $threeMonthsAgo)->count();
        $lastYear = User::where('created_at', '>=', $oneYearAgo)->count();
        return view('admins.reports.users.index' , compact('today' , 'lastMonth' , 'lastQuarter' , 'lastYear' , 'lastWeek')) ;
    }


    function getdata(){
        $item = User::query();
        return DataTables::of($item)
            ->addIndexColumn()
            ->addColumn('details', function ($qur) {
                $string='';


                $string .= '<button class="btn btn-outline-info ahmed" id="det">Details</button>';
                return $string;
            })
            ->addColumn('queuing', function ($qur) {
                $count = Line::query()->where('phone' , $qur->phone)->count();
                return $count ;
            })
            ->addColumn('cancel', function ($qur) {
                $count_cancel = Line::query()->where('phone' , $qur->phone)
                    ->where('status' , Line::CANCELED)->count();
                return $count_cancel ;
            })
            ->rawColumns(['details','queuing' , 'cancel'])
            ->make(true);
    }
}
