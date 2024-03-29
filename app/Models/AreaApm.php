<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AreaApm extends Model
{

    protected $table = "area_apms";
    public $timestamps = false;
    protected $primaryKey = "id_area";
    protected $fillable = [
        'nama_area'
    ];
    public function apm()
    {
        return $this->hasMany('App\Models\Apm', 'id_area','id_area');
    }
}
