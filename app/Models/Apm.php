<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Apm extends Model
{
  
    protected $table = "apms";
    public $timestamps = false;
    protected $primaryKey = "id_apm";
    protected $fillable = [
        'id_area', 'area_rb', 'penilaian', 'a', 'b', 'c', 'nilai', 'id_kriteria', 'bobot', 'skor', 'panduan_eviden', 'catatan_eviden','slug'
    ];
    public function area_apm()
    {
        return $this->belongsTo('App\Models\AreaApm', 'id_area','id_area');
    }
    public function kriteria_apm()
    {
        return $this->belongsTo('App\Models\KriteriaApm', 'id_kriteria','id_kriteria');
    }
}
