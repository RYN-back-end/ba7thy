<?php

namespace App\Http\Controllers\Admin\CRUD;

use App\Http\Controllers\Controller;
use App\Http\Traits\Upload_Files;
use App\Models\AboutPage;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    use Upload_Files;

    public function __construct()
    {
        $this->folderPath .= "CRUD/AboutPage";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obj = AboutPage::firstOrCreate([]);
        return view("$this->folderPath.index", compact('obj',));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $row = AboutPage::firstOrCreate([]);
        $rowData = $request->validate([
            'text_ar' => 'required',
            'text_en' => 'required',
            'image_ar' => 'nullable|image',
            'image_en' => 'nullable|image',
        ]);
        if ($request->hasFile('image_ar')) {
            $rowData['image_ar'] = $this->uploadFiles('about', $request->image_ar, $row->image_ar);
        }
        if ($request->hasFile('image_en')) {
            $rowData['image_en'] = $this->uploadFiles('about', $request->image_en, $row->image_en);
        }
        $row->update($rowData);

        return response()->json(
            [
                'code' => 200,
                'message' => helperTrans('admin.operation accomplished successfully')
            ]);
    }
}
