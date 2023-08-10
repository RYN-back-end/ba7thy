<?php

namespace App\Http\Controllers\Admin\CRUD;

use App\Http\Controllers\Controller;
use App\Http\Traits\Upload_Files;
use App\Models\AboutUsImages;
use App\Models\WhatPresent;
use Illuminate\Http\Request;

class AboutUsImagesController extends Controller
{
    use Upload_Files;

    public function __construct()
    {
        $this->model = new AboutUsImages();
        $this->folderPath .= "CRUD.AboutUsImages";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = $this->model->get();
        return view("$this->folderPath.index", compact('images'));
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
            'images' => 'required|array',
            'images.*' => 'required|image',
        ]);
        foreach ($request->images as $image) {
            $storeImage['image'] = $this->uploadFiles('aboutUs', $image);
            $this->model->create($storeImage);
        }
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
        $row =$this->model->find($id);
        deleteFile($row->image);
        $row->delete();
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
