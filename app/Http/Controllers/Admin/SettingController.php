<?php

namespace App\Http\Controllers\Admin;

use App\Enums\TextTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Traits\Upload_Files;
use App\Models\Setting;
use App\Models\SiteText;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use Upload_Files;

    public function __construct()
    {
        $this->folderPath .= "Setting";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obj = Setting::firstOrCreate([]);
        return view("$this->folderPath.index", compact('obj',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $setting = Setting::firstOrCreate([]);
        $settingData = $request->validate([
            'title' => 'nullable|array',
            'title.*' => 'nullable',
            'desc' => 'nullable|array',
            'desc.*' => 'nullable',
            'address_ar' => 'nullable',
            'address_en' => 'nullable',
            'work_time_ar' => 'nullable',
            'work_time_en' => 'nullable',
            'email' => 'required|email',
            'phone' => 'required',
            'whatsapp' => 'nullable',
            'telegram' => 'nullable',
            'twitter' => 'nullable|url',
            'facebook' => 'nullable|url',
            'snapchat' => 'nullable|url',
            'instagram' => 'nullable|url',
            'logo' => 'nullable|image',
            'terms_conditions_ar' => 'nullable',
            'terms_conditions_en' => 'nullable',
            'privacy_ar' => 'nullable',
            'privacy_en' => 'nullable',
            'return_policy_ar' => 'nullable',
            'return_policy_en' => 'nullable',
        ]);

        if ($request->hasFile('logo')) {
            $settingData['logo'] = $this->uploadFiles('logo', $request->logo, $setting->logo);
        }
        $setting->update($settingData);

        return response()->json(
            [
                'code' => 200,
                'message' => helperTrans('admin.operation accomplished successfully')
            ]);
        return $request;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
