<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\Admin;
use App\Models\Salon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    function index(){
       return view('admins.admin.index');
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
                 return 'admin' ;
            })
            ->rawColumns(['action','status' , 'reset' , 'role'])
            ->make(true);
    }

    function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|min:3|max:20' ,
            'phone' => 'required' ,
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
            'password' => Hash::make('123456789') ,
         ]);

        return  response()->json([
            'success' => $msg
        ] , 201 ) ;
    }
}
