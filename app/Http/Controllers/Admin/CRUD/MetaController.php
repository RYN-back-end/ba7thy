<?php

namespace App\Http\Controllers\Admin\CRUD;

use App\Http\Controllers\Controller;
use App\Models\MetaOfSite;
use App\Models\Question;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class MetaController extends Controller
{

    public function __construct()
    {
        $this->folderPath .= "CRUD.Meta";
        $this->model = MetaOfSite::class;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->model::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('title_ar', function ($row) {
                    return "<div style='width: 200px;white-space: initial'>$row->title_ar <br> $row->title_en</div>";
                })
                ->editColumn('desc_ar', function ($row) {
                    return "<div style='width: 200px;white-space: initial'>$row->desc_ar</div>";
                })
                ->addColumn('actions', function ($row) {
                    return $this->editButton($row->id);
                })->escapeColumns([])->make(true);
        }//end fun
        $oneObjectTitle = helperTrans('admin.meta');
        return view("$this->folderPath.index", compact('oneObjectTitle'));
    }


    public function edit(int $id)
    {
        $obj = $this->model::findOrFail($id);
        return view("$this->folderPath.parts.edit", compact('obj'));

    }


    public function update(Request $request, $id)
    {
        $row = $this->model::findOrFail($id);
        $data = $request->validate([
            'title_ar' => 'required',
            'desc_ar' => 'required',
            'title_en' => 'required',
            'desc_en' => 'required',
        ]);


        $row->update($data);
        return response()->json(
            [
                'code' => 200,
                'message' => helperTrans('admin.operation accomplished successfully')
            ]);
    }

}
