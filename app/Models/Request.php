<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function major()
    {
        return $this->belongsTo(Majors::class,'major_id');
    }//end fun
    public function service_type()
    {
        return $this->belongsTo(ServicesTypes::class,'services_type_id');
    }//end fun
}
