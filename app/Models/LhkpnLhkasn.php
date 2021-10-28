<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LhkpnLhkasn extends Model
{
    protected $table = "lhkpnlhkasn";
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 'jabatan', 'link_dokumen', 'status'
    ];
    public function status_lhkpnlhkasn()
    {
        return $this->belongsTo('App\Models\Status_LhkpnLhkasn', 'status','code');
        
    }
    public function jabatan_lhkpnlhkasn()
    {
        return $this->belongsTo('App\Models\Jabatan', 'jabatan','id_jabatan');
        
    }
}
