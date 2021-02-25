<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = "files";
    protected $guarded = [];
    protected $primaryKey = "id_file";
    protected $fillable = [

        'id_apm','title','name'

    ];
    public function apm()
    {
        return $this->hasMany('App\Models\Apm', 'id_apm','id_apm');
    }
}
