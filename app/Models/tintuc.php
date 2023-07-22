<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    use HasFactory;
    protected $table = 'tintuc';
    protected $primaryKey = 'id';
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
