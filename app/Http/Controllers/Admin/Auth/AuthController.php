<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Drivers;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Warehouse;
use Illuminate\Http\Request;

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

    public function index()
    {

        return view('Admin.Home.index');
    }//end fun
}//end class
