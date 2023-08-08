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
            'title' => 'required|array',
            'title.*' => 'required',
            'desc' => 'required|array',
            'desc.*' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'whatsapp' => 'required',
            'twitter' => 'required|url',
            'facebook' => 'required|url',
            'snapchat' => 'required|url',
            'instagram' => 'required|url',
            'logo' => 'nullable|image'
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
