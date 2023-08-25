<?php

namespace App\Http\Controllers\Provider\Step;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Location;
use App\Models\Salon;
use App\Models\Service;
use App\Models\Specification;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class StepController extends Controller
{
    public function index()
    {
        $salon = Salon::query()->find(Auth::guard('employee')->user()->salon_uuid);

        return view('providers.steps.index', compact('salon'));

    }

    public function salon(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'email' => 'required|email',
            'representing' => 'required|string',
            'phone' => 'required|string',
            'phone_other' => 'required|string',

        ];
        $uuid = Salon::query()->where('phone', $request->phone)->value('uuid');
        $this->validate($request, $rules);
        $salon = Salon::query()
            ->updateOrCreate(
                ['uuid' => $uuid],
                $request->only('name', 'email', 'representing', 'phone', 'phone_other'));

        return response()->json([
            'item_added'
        ]);
    }

    public function details(Request $request)
    {

        $rules = [
            'uuid' => 'required|exists:salons,uuid',
            'service_provider_name' => 'required|string',
            'company_name' => 'required|string',
            'category' => 'required|string',
            'cr' => 'required|string',
            'cr_image' => 'nullable|image',
            'tax' => 'required|string',
            'tax_image' => 'n   ullable|image',
            'mail_number' => 'required|string',
            'mail_number_image' => 'nullable|image',
            'country' => 'required|string',
            'city' => 'required|string',
            'contract' => 'required|string',
            'contract_image' => 'nullable|image',
            'location' => 'nullable|string',


        ];
        dd($request->all());
        $this->validate($request, $rules);
        $salon = Salon::query()
            ->updateOrCreate(
                ['uuid' => $request->uuid],
                $request->only('service_provider_name', 'company_name', 'category', 'cr', 'tax', 'mail_number', 'country', 'city', 'contract', 'location'));
        if ($request->hasFile('cr_image')) {
            UploadImage($request->cr_image, Salon::PATH_CR, Salon::class, $salon->uuid, true, null, Upload::IMAGE, 'cr');
        }
        if ($request->hasFile('tax_image')) {
            UploadImage($request->tax_image, Salon::PATH_TAX, Salon::class, $salon->uuid, true, null, Upload::IMAGE, 'tax');
        }
        if ($request->hasFile('mail_number_image')) {
            UploadImage($request->mail_number_image, Salon::PATH_MAIL_NUMBER, Salon::class, $salon->uuid, true, null, Upload::IMAGE, 'mail_number');
        }
        if ($request->hasFile('contract_image')) {
            UploadImage($request->contract_image, Salon::PATH_CONTRACT, Salon::class, $salon->uuid, true, null, Upload::IMAGE, 'contract');
        }
        return response()->json([
            'item_added'
        ]);
    }

    public function images(Request $request)
    {
        $rules = [
            'uuid' => 'required|exists:salons,uuid',
            'logo' => 'required|image',
            'images' => 'required',
            'images.*' => 'mimes:jpeg,jpg,png|max:2048'
        ];

        $salon = Salon::query()->findOrFail($request->uuid);
        $this->validate($request, $rules);;
        if ($request->hasFile('logo')) {
            UploadImage($request->logo, Salon::PATH_LOGO, Salon::class, $salon->uuid, true, null, Upload::IMAGE, 'logo');
        }
        if ($request->has('delete_images')) {

            $images = Upload::query()->where('imageable_type', Salon::class)->where('imageable_id', $salon->uuid)->whereNotIn('uuid', $request->delete_images)->get();
            foreach ($images as $item) {
                File::delete(public_path(Salon::PATH_GENERAL . $item->filename));
                $item->delete();
            }
        }
        if ($request->hasFile('images')) {
            foreach ($request->images as $item) {
                UploadImage($item, Salon::PATH_GENERAL, Salon::class, $salon->uuid, false, null, Upload::IMAGE, 'general');
            }
        }
        return response()->json([
            'item_added'
        ]);
    }


    public function service(Request $request)
    {
        $rules = [
            'uuid' => 'required|exists:salons,uuid',
            'title' => 'required',
            'title.*' => 'required|string',
            'cost' => 'required',
            'cost.*' => 'required|int',
            'time' => 'required',
            'time.*' => 'required|string',
        ];
        $this->validate($request, $rules);
        $salon = Salon::query()->findOrFail($request->uuid);
        $salon->service()->delete();
        for ($i = 0; $i < count($request->title); $i++) {
            Service::query()->create([
                'title' => $request->title[$i],
                'cost' => $request->cost[$i],
                'time' => $request->time[$i],
                'salon_uuid' => $request->uuid
            ]);
        }
        return response()->json([
            'item_added'
        ]);


    }

    public function employee(Request $request)
    {
        $rules = [
            'uuid' => 'required|exists:salons,uuid',
            'name' => 'required',
            'name.*' => 'required|string',
            'password' => 'required',
            'password.*' => 'required|int',
            'image' => 'required',
            'image.*' => 'required|image',
            'phone' => 'required',
            'phone.*' => 'required',
        ];

        $this->validate($request, $rules);

        for ($i = 0; $i < count($request->name); $i++) {
            $employee = Employee::query()->updateOrCreate(['phone' => $request->phone[$i],
            ], [
                'name' => $request->name[$i],
                'password' => Hash::make($request->password[$i]),
                'salon_uuid' => $request->uuid
            ]);
            UploadImage($request->image[$i], Employee::PATH_EMPLOYEE, Employee::class, $employee->uuid, true, null, Upload::IMAGE);

        }
        return response()->json([
            'item_added'
        ]);


    }

    public function time(Request $request)
    {
        $rules = [
            'waiting_time' => 'nullable|int',
            'waiting_time_1' => 'nullable|int',
        ];

        $this->validate($request, $rules);
        $salon = Salon::query()->findOrFail(Auth::guard('employee')->user()->salon_uuid);
        if ($request->has('waiting_time')) {
            $salon->update([
                'waiting_time' => $request->waiting_time
            ]);
        } elseif ($request->has('waiting_time_1')) {
            $salon->update([
                'waiting_time' => $request->waiting_time_1
            ]);
        } else {
            return response()->json([
                'not found'
            ]);
        }


        return response()->json([
            'item_added'
        ]);


    }

    public function pay(Request $request)
    {

        $rules = [
            'amount_paid' => 'required|int',
            'is_pay' => 'nullable|in:on',
        ];
        $this->validate($request, $rules);
        $salon = Salon::query()->findOrFail(Auth::guard('employee')->user()->salon_uuid);
            $salon->update([
                'is_pay' => ($request->is_pay)=='on'?1:"0",
                'amount_paid' => $request->amount_paid

            ]);

        return response()->json([
            'item_added'
        ]);


    }

}
