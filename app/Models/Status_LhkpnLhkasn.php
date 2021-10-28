<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status_LhkpnLhkasn extends Model
{
    protected $table = "status_lhkpnlhkasn";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_status', 'code'
    ];
    public function status_lhkpnlhkasn()
    {
        return $this->hasMany('App\Models\LhkpnLhkasn', 'code','status');
    }
}
