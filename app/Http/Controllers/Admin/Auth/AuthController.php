<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Drivers;
use App\Models\Order;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use App\Models\Warehouse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->folderPath .= "Auth";
    }

    public function login(Request $request)
    {

        if (admin()->check()) {
            return redirect()->route('admin.index');
        }

        if ($request->ajax()) {

            $data = $request->validate([
                'email' => 'required|exists:admins',
                'password' => 'required'
            ]);
            if (admin()->attempt($data, 1)) {
                return response()->json(200);
            }
//            return Admin::all();
            return response()->json(405);
        }
        return view("$this->folderPath.login");
    }//end fun

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout()
    {
        admin()->logout();
        my_toaster(helperTrans('admin.Signed out successfully'), 'info');
        return redirect()->route('admin.index');
    }//end fun

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = \App\Models\ContactUs::latest();
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
                    return  $row->major->title??"-";
                })
                ->editColumn('services_type_id', function ($row) {
                    return  $row->service_type->title??"-";
                })
                ->addColumn('actions', function ($row) {
                    return  $this->deleteButton($row->id);
                })->escapeColumns([])->make(true);
        }//end fun
        $oneObjectTitle = helperTrans('admin.Request');
        $nums = Setting::first();
        $today = Carbon::today();
        $isFirstDayOfMonth = $today->day === 1;
        if ($isFirstDayOfMonth) {
            $nums['whatsapp_clicks'] = 0;
            $nums['telegram_clicks'] = 0;
            $nums->save();
        }
        return view("Admin.Home.index", compact('oneObjectTitle','nums'));
    }//end fun
}//end class
