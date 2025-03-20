<?php

namespace App\Http\Controllers\Admin\CRUD;

use App\Http\Controllers\Controller;
use App\Http\Traits\Upload_Files;
use App\Models\Review;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ReviewController extends Controller
{
    use Upload_Files;
    public function __construct()
    {
        $this->folderPath .= "CRUD.Review";
        $this->model = Review::class;
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
                ->editColumn('name_ar', function ($row) {
                    return "<div style='width: 200px;white-space: initial'>$row->name_ar</div>";
                })
                ->editColumn('image', function ($row) {
                    return ' <img src="' . get_file($row->image) . '" class="rounded" style="height:60px;width:60px;"
                             onclick="window.open(this.src)">';
                })
                ->addColumn('actions', function ($row) {
                    return $this->editButton($row->id) . $this->deleteButton($row->id);
                })->escapeColumns([])->make(true);
        }//end fun
        $oneObjectTitle = helperTrans('admin.review');
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
            'name_ar' => 'required',
            'name_en' => 'required',
            'comment_ar' => 'required',
            'comment_en' => 'required',
            'image' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFiles('Reviews', $request->image);
        }
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
            'name_ar' => 'required',
            'name_en' => 'required',
            'comment_ar' => 'required',
            'comment_en' => 'required',
            'image' => 'nullable',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFiles('Reviews', $request->image, $row->image);
        }

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
