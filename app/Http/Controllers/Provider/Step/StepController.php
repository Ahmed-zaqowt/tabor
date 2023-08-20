<?php

namespace App\Http\Controllers\Provider\Step;

use App\Http\Controllers\Controller;
use App\Models\Salon;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StepController extends Controller
{
    public function index(){
        $salon=Salon::query()->find(Auth::guard('employee')->user()->salon_uuid);

        return view('providers.steps.index',compact('salon'));

    }
    public function salon(Request $request){
        $rules = [
            'name' => 'required|string',
            'email' => 'required|string|email',
            'representing' => 'required|string',
            'phone' => 'required|string',
            'phone_other' => 'required|string',

        ];
$uuid= Salon::query()->where('phone',$request->phone)->value('uuid');
        $this->validate($request, $rules);
        $salon= Salon::query()
            ->updateOrCreate(
                ['uuid'=>$uuid],
               $request->only('name','email','representing','phone','phone_other'));

        return response()->json([
            'item_added'
        ]);
    }

    public function details(Request $request){
        $rules = [
            'uuid' => 'required|exists:salons,uuid',
            'service_provider_name' => 'required|string',
            'company_name' => 'required|string',
            'category' => 'required|string',
            'cr' => 'required|string',
            'cr_image' => 'nullable|image',
            'tax' => 'required|string',
            'tax_image' => 'nullable|image',
            'mail_number' => 'required|string',
            'mail_number_image' => 'nullable|image',
            'country' => 'required|string',
            'city' => 'required|string',
            'contract' => 'required|string',
            'contract_image' => 'nullable|image',
            'location' => 'required|string',


        ];
        $this->validate($request, $rules);
        $salon= Salon::query()
            ->updateOrCreate(
                ['uuid'=>$request->uuid],
                $request->only('service_provider_name','company_name','category','cr','tax','mail_number','country','city','contract','location'));
        if ($request->hasFile('cr_image')) {
            UploadImage($request->cr_image, Salon::PATH_CR, Salon::class, $salon->uuid, true, null, Upload::IMAGE, 'cr');
        }
        if ($request->hasFile('tax_image')) {
            UploadImage($request->tax_image, Salon::PATH_TAX, Salon::class, $salon->uuid, true, null, Upload::IMAGE, 'tax');
        }
        if ($request->hasFile('mail_number_image')) {
            UploadImage($request->mail_number_image, Salon::PATH_MAIL_NUMBER, Salon::class, $salon->uuid, true, null, Upload::IMAGE,'mail_number');
        }
        if ($request->hasFile('contract_image')) {
            UploadImage($request->contract_image, Salon::PATH_CONTRACT, Salon::class, $salon->uuid, true, null, Upload::IMAGE,'contract');
        }
        return response()->json([
            'item_added'
        ]);
    }
}
