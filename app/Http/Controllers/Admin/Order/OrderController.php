<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Line;
use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    function index(){
         return view('admins.order.index');
    }

    function getdata(){
        // ['pending' , 'Communicated' , 'Signed' , 'registered' , 'Training']
        $collge = Order::query();
        return DataTables::of($collge)
            ->addIndexColumn()
            ->addColumn('action', function ($qur) {
                return '<form method="post" id="form_status" action="' . route('order.update_status') . '">
                            <input type="hidden" name="id" id="id" value="' .$qur->id .  '">
                            <input type="hidden" name="_token" id="id" value="' . csrf_token() .  '">
                            <div class="select">
                                        <select name="status"
                                         class="select_ select_status">
                                            <option selected disabled>Change</option>
                                            <option value="pending">pending</option>
                                            <option value="communicated">Communicated</option>
                                            <option value="signed">Signed</option>
                                            <option value="registered">registered</option>
                                            <option value="training">Training</option>
                                        </select>
                                    </div>
                                 </form>
                              ' ;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    function update_status(Request $request)
    {
        $emp = Order::query()->findOrFail($request->id) ;


        if($request->status == 'pending'){
            $emp->update([
                'status' => Order::PENDING
            ]);
        }elseif ($request->status == 'communicated'){
            $emp->update([
                'status' => Order::COMMUNICATED
            ]);
        }elseif ($request->status == 'signed'){
            $emp->update([
                'status' => Order::SIGNED
            ]);
        }elseif ($request->status == 'registered'){
            $emp->update([
                'status' => Order::REGISTERED
            ]);
        }elseif ($request->status == 'training'){
            $emp->update([
                'status' => Order::TRAINING
            ]);
        }

        return  response()->json([
            'success' => 'Update Status Successfully'
        ] , 201 ) ;
    }
}
