<?php

namespace App\Http\Controllers\Admin\CRUD;

use App\Http\Controllers\Controller;
use App\Http\Traits\Upload_Files;
use App\Models\Articles;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ArticlesController extends Controller
{
    use Upload_Files;

    public function __construct()
    {
        $this->folderPath .= "CRUD.Articles";
        $this->model = Articles::class;
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
                ->editColumn('image', function ($row) {
                    return ' <img src="' . get_file($row->image) . '" class="rounded" style="height:60px;width:60px;"
                             onclick="window.open(this.src)">';
                })
                ->editColumn('title', function ($row) {
                    return "<div style='width: 200px;white-space: initial'>$row->title</div>";
                })
                ->editColumn('text', function ($row) {
                    return "<div style='width: 200px;white-space: initial'>$row->text</div>";
                })
                ->addColumn('actions', function ($row) {
                    $editUrl = route('articles.edit',$row->id);
                    return "<a href='$editUrl'> <i class='fa fa-edit'></i></a>" . $this->deleteButton($row->id);
                })->escapeColumns([])->make(true);
        }//end fun
        $oneObjectTitle = helperTrans('admin.article');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required',
            'title' => 'required|array',
            'title.*' => 'required',
            'text' => 'required|array',
            'text.*' => 'required',
            'meta_title_ar' => 'required',
            'meta_title_en' => 'required',
            'meta_desc_ar' => 'required',
            'meta_desc_en' => 'required',
            'url_title' => 'required|unique:articles,url_title',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFiles('Articles', $request->image);
        }
        $this->model::create($data);
        my_toaster(helperTrans('admin.operation accomplished successfully'));
        return redirect(route('articles.index'));
//        return response()->json(
//            [
//                'code' => 200,
//                'message' => helperTrans('admin.operation accomplished successfully')
//            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $obj = $this->model::findOrFail($id);
        return view("$this->folderPath.parts.edit", compact('obj'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $row = $this->model::findOrFail($id);
        $data = $request->validate([
            'image' => 'nullable',
            'title' => 'required|array',
            'title.*' => 'required',
            'text' => 'required|array',
            'text.*' => 'required',
            'meta_title_ar' => 'required',
            'meta_title_en' => 'required',
            'meta_desc_ar' => 'required',
            'meta_desc_en' => 'required',
            'url_title' => "required|unique:articles,url_title,$row->id",
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFiles('Articles', $request->image, $row->image);
        }
        $row->update($data);
        my_toaster(helperTrans('admin.operation accomplished successfully'));
        return redirect(route('articles.index'));
//        return response()->json(
//            [
//                'code' => 200,
//                'message' => helperTrans('admin.operation accomplished successfully')
//            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = $this->model::findOrFail($id);
        deleteFile($row->image);
        $row->delete();
        return response()->json(
            [
                'code' => 200,
                'message' => helperTrans('admin.operation accomplished successfully')
            ]);
    }//end fun
}
