<?php

namespace App\Http\Controllers\Admin\CRUD;

use App\Http\Controllers\Controller;
use App\Http\Traits\Upload_Files;
use App\Models\WhatPresent;
use Illuminate\Http\Request;

class WhatPresentController extends Controller
{
    use Upload_Files;

    public function __construct()
    {
        $this->model = new WhatPresent();
        $this->folderPath .= "CRUD.WhatPresent";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obj = $this->model->firstOrCreate([]);
        return view("$this->folderPath.index", compact('obj'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'text' => 'required|array',
            'text.*' => 'required',
            'video' => 'nullable|mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
            'image'=>'nullable|image'
        ]);
        $obj = $this->model->firstOrCreate([]);
        if ($request->hasFile('video')) {
            $data['video'] = $this->uploadFiles('whatPresent', $request->video, $obj->video);
        }
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFiles('whatPresent', $request->image, $obj->image);
        }
        $obj->update($data);
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
