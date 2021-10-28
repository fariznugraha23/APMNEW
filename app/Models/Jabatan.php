<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = "jabatan";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_jabatan', 'id_jabatan'
    ];
    public function status_lhkpnlhkasn()
    {
        return $this->hasMany('App\Models\LhkpnLhkasn', 'id_jabatan','jabatan');
    }
}
