<?php

namespace App\Http\Controllers\Admin\CRUD;

use App\Http\Controllers\Controller;
use App\Http\Traits\Upload_Files;
use App\Models\Articles;
use App\Models\Category;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ServicesController extends Controller
{
    use Upload_Files;

    public function __construct()
    {
        $this->folderPath .= "CRUD.Services";
        $this->model = Service::class;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->model::orderBy('position')->get();
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
                    $editUrl = route('services.edit',$row->id);
                    return "<a href='$editUrl'> <i class='fa fa-edit'></i></a>" . $this->deleteButton($row->id);
                })->escapeColumns([])->make(true);
        }//end fun
        $oneObjectTitle = helperTrans('admin.Service');
        return view("$this->folderPath.index", compact('oneObjectTitle'));
    }


    public function create()
    {
        return view("$this->folderPath.parts.create");

    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required',
            'title' => 'required|array',
            'title.*' => 'required',
            'text' => 'required|array',
            'text.*' => 'required',
            'other_text' => 'required|array',
            'other_text.*' => 'required',
            'meta_title_ar' => 'required',
            'meta_title_en' => 'required',
            'meta_desc_ar' => 'required',
            'meta_desc_en' => 'required',
            'url_title' => 'required|unique:services,url_title',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFiles('Articles', $request->image);
        }
        $this->model::create($data);
        my_toaster(helperTrans('admin.operation accomplished successfully'));
        return redirect(route('services.index'));
//        return response()->json(
//            [
//                'code' => 200,
//                'message' => helperTrans('admin.operation accomplished successfully')
//            ]);
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
            'image' => 'nullable',
            'title' => 'required|array',
            'title.*' => 'required',
            'text' => 'required|array',
            'text.*' => 'required',
            'other_text' => 'required|array',
            'other_text.*' => 'required',
            'meta_title_ar' => 'required',
            'meta_title_en' => 'required',
            'meta_desc_ar' => 'required',
            'meta_desc_en' => 'required',
            'url_title' => "required|unique:services,url_title,$row->id",
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFiles('Articles', $request->image, $row->image);
        }
        $row->update($data);
        my_toaster(helperTrans('admin.operation accomplished successfully'));
        return redirect(route('services.index'));

    }


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

    public function editServicesPosition(){
        $services = Service::orderBy('position')->get();
        return view("$this->folderPath.parts.reorder", compact('services'));
    }

    public function reorder(request $request){
        $positions = $request->input('positions');
        // Loop through the positions and update the corresponding services
        foreach ($positions as $serviceId => $position) {
            $service = Service::find($serviceId);
            $service->position = $position;
            $service->save();
        }
        return redirect()->back()->with('success', 'Positions updated successfully');
    }
}
