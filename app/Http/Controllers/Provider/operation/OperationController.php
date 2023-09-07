<?php

namespace App\Http\Controllers\Provider\operation;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Line;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class OperationController extends Controller
{
    function index()
    {
         $emps =  Employee::query()->where('salon_uuid' , Auth::user()->salon_uuid)->get() ?? [];
          return view('providers.main.index' , compact('emps'));
    }

    function add_user(Request $request)
    {
        $request->validate([
            'phone' => 'required' ,
             'name' => 'required|string' ,
        ]);

        Line::create([
            'phone' => $request->phone ,
             'name' => $request->name ,
            'employee_uuid' => $request->id ,
        ]);

        return redirect()->back() ;
    }


    function update_status(Request $request){
       $emp = Line::query()->where('phone' , $request->id)->first() ;


         if($request->status == 'finish'){
            $emp->update([
               'status' => Line::FINISHED
            ]);
        }elseif ($request->status == 'service'){
            $emp->update([
                'status' => Line::SERVICE
            ]);
        }elseif ($request->status == 'on_show_up'){
            $emp->update([
                'status' => Line::ON_SHOW_UP
            ]);
        }elseif ($request->status == 'waiting'){
            $emp->update([
                'status' => Line::TABOR
            ]);
        }elseif ($request->status == 'cancel'){
            $emp->update([
                'status' => Line::CANCELED
            ]);
        }

        return  response()->json([
            'success' => 'Update Status Successfully'
        ] , 201 ) ;

    }
    function service()
    {

        $collge = Line::query()->where('status' , 'service')->get();
        return DataTables::of($collge)
            ->addIndexColumn()
            ->addColumn('action', function ($qur) {
                return '<form method="post" id="form_status" action="' . route('operation.update_status') . '">
                            <input type="hidden" name="id" id="id" value="' .$qur->phone .  '">
                            <input type="hidden" name="_token" id="id" value="' . csrf_token() .  '">
                            <div class="select">
                                        <select name="status"
                                         class="select_ select_status">
                                            <option selected disabled value="service">service</option>
                                            <option value="finish">finish</option>
                                            <option value="on_show_up">on show up</option>
                                            <option value="go_back">go back</option>
                                            <option value="waiting">waiting</option>
                                            <option value="cancel">cancel</option>
                                        </select>
                                    </div>
                                 </form>
                              ' ;
            })
            ->addColumn('staff' , function($qur){
                return $qur->employee->name ;
            })
            ->addColumn('amount' , function($qur){
                return '22' ;
            })

            ->rawColumns(['action' ,'amount' , 'status'  ,'staff'])
            ->make(true);
    }


    function tabor()
    {
        $collge = Line::query()->where('status' , 'tabor')->get();
        return DataTables::of($collge)
            ->addIndexColumn()
            ->addColumn('action', function ($qur) {
                return '<form method="post" id="form_status" action="' . route('operation.update_status') . '">
                            <input type="hidden" name="id" id="id" value="' .$qur->phone .  '">
                            <input type="hidden" name="_token" id="id" value="' . csrf_token() .  '">
                            <div class="select">
                                        <select name="status"
                                         class="select_ select_status">
                                            <option  value="service">service</option>
                                            <option value="finish">finish</option>
                                            <option value="on_show_up">on show up</option>
                                            <option value="go_back">go back</option>
                                            <option selected disabled value="waiting">waiting</option>
                                            <option value="cancel">cancel</option>
                                        </select>
                                    </div>
                                 </form>
                              ' ;
            })
            ->addColumn('staff' , function($qur){
                return $qur->employee->name ;
            })
            ->addColumn('amount' , function($qur){
                return '22' ;
            })

            ->rawColumns(['action' ,'amount' , 'status'  ,'staff'])
            ->make(true);
    }

    function finished(){
        $collge = Line::query()->where('status' , 'finished')->get();
        return DataTables::of($collge)
            ->addIndexColumn()
            ->addColumn('action', function ($qur) {
                return '<form method="post" id="form_status" action="' . route('operation.update_status') . '">
                            <input type="hidden" name="id" id="id" value="' .$qur->phone .  '">
                            <input type="hidden" name="_token" id="id" value="' . csrf_token() .  '">
                            <div class="select">
                                        <select name="status"
                                         class="select_ select_status">
                                            <option  value="service">service</option>
                                            <option selected disabled value="finish">finish</option>
                                            <option value="on_show_up">on show up</option>
                                            <option value="go_back">go back</option>
                                            <option  value="waiting">waiting</option>
                                            <option value="cancel">cancel</option>
                                        </select>
                                    </div>
                                 </form>
                              ' ;
            })
            ->addColumn('staff' , function($qur){
                return $qur->employee->name ;
            })
            ->addColumn('amount' , function($qur){
                return '22' ;
            })

            ->rawColumns(['action' ,'amount' , 'status'  ,'staff'])
            ->make(true);
    }

    function canceled()
    {
        $collge = Line::query()->where('status' , 'canceled')->get();
        return DataTables::of($collge)
            ->addIndexColumn()
            ->addColumn('action', function ($qur) {
                return '<form method="post" id="form_status" action="' . route('operation.update_status') . '">
                            <input type="hidden" name="id" id="id" value="' .$qur->phone .  '">
                            <input type="hidden" name="_token" id="id" value="' . csrf_token() .  '">
                            <div class="select">
                                        <select name="status"
                                         class="select_ select_status">
                                            <option  value="service">service</option>
                                            <option  value="finish">finish</option>
                                            <option value="on_show_up">on show up</option>
                                            <option value="go_back">go back</option>
                                            <option  value="waiting">waiting</option>
                                            <option selected disabled value="cancel">cancel</option>
                                        </select>
                                    </div>
                                 </form>
                              ' ;
            })
            ->addColumn('staff' , function($qur){
                return $qur->employee->name ;
            })
            ->addColumn('amount' , function($qur){
                return '22' ;
            })

            ->rawColumns(['action' ,'amount' , 'status'  ,'staff'])
            ->make(true);
    }

    function no_show_up()
    {
        $collge = Line::query()->where('status' , 'no_show_up')->get();
        return DataTables::of($collge)
            ->addIndexColumn()
            ->addColumn('action', function ($qur) {
                return '<form method="post" id="form_status" action="' . route('operation.update_status') . '">
                            <input type="hidden" name="id" id="id" value="' .$qur->phone .  '">
                            <input type="hidden" name="_token" id="id" value="' . csrf_token() .  '">
                            <div class="select">
                                        <select name="status"
                                         class="select_ select_status">
                                            <option  value="service">service</option>
                                            <option  value="finish">finish</option>
                                            <option selected disabled value="on_show_up">on show up</option>
                                            <option value="go_back">go back</option>
                                            <option  value="waiting">waiting</option>
                                            <option  value="cancel">cancel</option>
                                        </select>
                                    </div>
                                 </form>
                              ' ;
            })
            ->addColumn('staff' , function($qur){
                return $qur->employee->name ;
            })
            ->addColumn('amount' , function($qur){
                return '22' ;
            })

            ->rawColumns(['action' ,'amount' , 'status'  ,'staff'])
            ->make(true);
    }





}
