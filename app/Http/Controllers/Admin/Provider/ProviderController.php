<?php

namespace App\Http\Controllers\Admin\Provider;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Salon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProviderController extends Controller
{
    function index()
    {
          return view('admins.providers.index');
    }
    function getdata(){
        $item = Salon::query();
        return DataTables::of($item)
            ->addIndexColumn()
            ->addColumn('status', function ($qur) {
                return '<form method="post" id="form_status" action="' . route('order.update_status') . '">
                            <input type="hidden" name="id" id="id" value="' .$qur->uuid .  '">
                            <input type="hidden" name="_token" id="id" value="' . csrf_token() .  '">
                            <div class="select">
                                        <select name="status"
                                         class="select_ select_status">
                                            <option selected disabled>Change</option>
                                            <option value="pending">'.__('pending').'</option>
                                            <option value="active">'.__('active').'</option>

                                        </select>
                                    </div>
                                 </form>
                              ' ;
            })
            ->addColumn('action', function ($qur) {
                $string='';
                $string .= '<button class="edit_btn btn btn-sm btn-outline-primary btn_edit" data-toggle="modal"
                    data-target="#edit_modal" data-uuid="' . $qur->uuid . '">' . __('edit') . '</button>';
                $string .= ' <button type="button" class="btn btn-sm btn-outline-danger btn_delete" data-uuid="' . $qur->uuid .
                    '">' . __('delete') . '</button>';
                return $string;
            })
            ->rawColumns(['action','status'])
            ->make(true);
    }



}
