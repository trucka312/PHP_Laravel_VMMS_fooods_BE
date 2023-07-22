<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;
    protected $table = 'sampham';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function danhmucmon()
    {
        return $this->belongsTo(danhmucmon::class, 'danhmucmon_id', 'id');
    }

}
