<?php

namespace App\Http\Controllers\Admin\CRUD;

use App\Http\Controllers\Controller;
use App\Http\Traits\Upload_Files;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class Requestsontroller extends Controller
{
    use Upload_Files;

    public function __construct()
    {
        $this->folderPath .= "CRUD.Requests";
        $this->model = \App\Models\Request::class;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->model::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row) {
                    return date('Y/m/d H:i', strtotime($row->created_at));
                })
                ->editColumn('phone', function ($row) {
                    try {
                        return "<a href='tel:".$row->phone."'>$row->phone</a>";
                    } catch (\Exception $e) {
                        return $e->getMessage();
                    }
                })
                ->editColumn('email', function ($row) {
                    try {
                        return "<a href='mailto:".$row->email."'>$row->email</a>";
                    } catch (\Exception $e) {
                        return $e->getMessage();
                    }
                })
                ->editColumn('major_id', function ($row) {
                    return  $row->major->title??"";
                })
                ->editColumn('services_type_id', function ($row) {
                    return  $row->service_type->title??"";
                })
                ->addColumn('actions', function ($row) {
                    return  $this->deleteButton($row->id);
                })->escapeColumns([])->make(true);
        }//end fun
        $oneObjectTitle = helperTrans('admin.Request');
        return view("$this->folderPath.index", compact('oneObjectTitle'));
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
