<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\Admin;
use App\Models\Salon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    function index(){
        if (Auth::user()->role==1){
            return view('admins.admin.index');
        };
        abort(403);

    }

    function getdata(){
        $item = Admin::query();
        return DataTables::of($item)
            ->addIndexColumn()
            ->addColumn('status', function ($qur) {
                return 'active' ;
            })
            ->addColumn('action', function ($qur) {
                $data_attr = '';
                $data_attr .= 'data-id="' . $qur->id  . '" ';
                $data_attr .= 'data-name="' . $qur->name . '"';
                $data_attr .= 'data-phone="' . $qur->phone . '"';
                $data_attr .= 'data-email="' . $qur->email . '"';
                $data_attr .= 'data-role="' . $qur->role . '"';

                $string='';

                $string .= '<button class="edit_btn btn btn-sm btn-outline-primary btn_edit" ' . $data_attr . '>' . __('edit') . '</button>';
                return $string;
            })
            ->addColumn('reset', function ($qur) {
                $string='';
                $string .= '<button class="btn btn-sm btn-outline-info" data-toggle="modal"
                    data-target="#edit_modal" data-uuid="' . $qur->uuid . '">' . __('reset') . '</button>';
                return $string;
            })
            ->addColumn('role', function ($qur) {
                if ($qur->role==1){
                    return __('super');
                }elseif ($qur->role==2){
                    return __('super without finances');
                }elseif ($qur->role==3){
                    return __('super without finances and reports');
                }elseif ($qur->role==4){
                    return __('only add provider');
                }



            })
            ->rawColumns(['action','status' , 'reset' , 'role'])
            ->make(true);
    }

    function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|min:3|max:20' ,
            'phone' => 'required' ,
            'role' => 'required|in:1,2,3,4' ,

            'email' => 'required|email' ,
        ]);

        if ($request->id != null){
            $msg = 'Admin Updated Successfully' ;
        }else{
            $msg = 'Admin Added Successfully' ;
        }

        Admin::updateOrCreate(['id' => $request->id] ,
            [
            'name' => $request->name ,
            'phone' => $request->phone ,
            'email' => $request->email ,
            'role'=>$request->role,
            'password' => Hash::make('123456789') ,
         ]);

        return  response()->json([
            'success' => $msg
        ] , 201 ) ;
    }
}
