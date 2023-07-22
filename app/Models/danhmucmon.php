<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tuvan extends Model
{
    use HasFactory;
    protected $table = 'tuvan';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
