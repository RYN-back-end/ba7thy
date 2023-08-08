<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $folderPath = "Admin.";
    protected $model;

    public function helperJson($data = null, $message = 'done', $code = 200, $status = 200)
    {
        $json = response()->json(['data' => $data, 'message' => $message, 'code' => (int)$code], $status);
        return $json;
    }//end fun

    public function editButton($id)
    {
        return "<a class='editBtn' data-id='{$id}'>
                        <span class='btn btn-link btn-sm text-primary'
                        title=' ".helperTrans('admin.edit')." '> <i class='fa-regular fa-pen-to-square'></i> </span>
                    </a>";
    }//end fun
    public function deleteButton($id)
    {
        return "<a class='delete' data-id='{$id}'>
                        <span class='btn btn-link btn-sm text-danger'
                        title='".helperTrans('admin.delete')."'> <i class='fa-regular fa-trash-can'></i> </span>
                    </a>";
    }//end fun

    public function showButton($id)
    {
        return "<a class='showBtn' data-id='{$id}'>
                        <span class='btn btn-link btn-sm text-success'
                        title='".helperTrans('admin.show')."'> <i class='fa-regular fa-eye'></i> </span>
                    </a>";
    }//end fun

    /**
     * @param $data
     * @param $rules
     * @return \Illuminate\Http\JsonResponse|true
     */
    public function checkValidate($data, $rules)
    {
        $mainValidate = Validator::make($data->all(), $rules);

        if ($mainValidate->fails()) {
            return $this->helperJson(null, $mainValidate->errors()->first(), 422);
        }
        return true;
    }
}
