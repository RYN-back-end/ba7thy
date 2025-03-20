<?php

namespace App\Http\Controllers\Admin\CRUD;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->folderPath .= "CRUD.Questions";
        $this->model = Question::class;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->model::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row) {
                    return date('Y/m/d', strtotime($row->created_at));
                })
                ->editColumn('title_ar', function ($row) {
                    return "<div style='width: 200px;white-space: initial'>$row->title_ar</div>";
                })
                ->editColumn('desc_ar', function ($row) {
                    return "<div style='width: 200px;white-space: initial'>$row->desc_ar</div>";
                })
                ->addColumn('actions', function ($row) {
                    return $this->editButton($row->id) . $this->deleteButton($row->id);
                })->escapeColumns([])->make(true);
        }//end fun
        $oneObjectTitle = helperTrans('admin.question');
        return view("$this->folderPath.index", compact('oneObjectTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("$this->folderPath.parts.create");

    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title_ar' => 'required',
            'desc_ar' => 'required',
            'title_en' => 'required',
            'desc_en' => 'required',
        ]);

        $this->model::create($data);
        return response()->json(
            [
                'code' => 200,
                'message' => helperTrans('admin.operation accomplished successfully')
            ]);
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

    public function destroy($id)
    {
        $row = $this->model::findOrFail($id);
        $row->delete();
        return response()->json(
            [
                'code' => 200,
                'message' => helperTrans('admin.operation accomplished successfully')
            ]);
    }//end fun
}
