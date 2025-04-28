<?php

namespace App\Http\Controllers\Admin\CRUD;

use App\Http\Controllers\Controller;
use App\Http\Traits\Upload_Files;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AboutUsController extends Controller
{
    use Upload_Files;

    public function __construct()
    {
        $this->folderPath .= "CRUD.AboutUs";
        $this->model = new AboutUs();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->model::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row) {
                    return date('Y/m/d', strtotime($row->created_at));
                })
                ->editColumn('title', function ($row) {
                    return "<div style='width: 200px;white-space: initial'>$row->title</div>";
                })
                ->editColumn('text', function ($row) {
                    return "<div style='width: 200px;white-space: initial'>$row->text</div>";
                })
                ->addColumn('actions', function ($row) {
                    return $this->editButton($row->id) . $this->deleteButton($row->id);
                })->escapeColumns([])->make(true);
        }//end fun
        $oneObjectTitle = helperTrans('admin.About Us Text');
        return view("$this->folderPath.index", compact('oneObjectTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("$this->folderPath.parts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|array',
            'title.*' => 'required',
            'text' => 'required|array',
            'text.*' => 'required',

        ]);

        $this->model::create($data);
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
        $obj = $this->model::findOrFail($id);
        return view("$this->folderPath.parts.edit", compact('obj'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required|array',
            'title.*' => 'required',
            'text' => 'required|array',
            'text.*' => 'required',

        ]);

        $this->model::find($id)->update($data);
        return response()->json(
            [
                'code' => 200,
                'message' => helperTrans('admin.operation accomplished successfully')
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->model::destroy($id);
        return response()->json(
            [
                'code' => 200,
                'message' => helperTrans('admin.operation accomplished successfully')
            ]);
    }
}
