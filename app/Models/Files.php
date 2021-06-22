<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $table = "files";
    protected $guarded = [];
    protected $primaryKey = "id_file";
    protected $fillable = [

        'id_apm','title','name','slugs'

    ];
    public function apm()
    {
        return $this->hasMany('App\Models\Apm', 'id_apm','id_apm');
    }
}
