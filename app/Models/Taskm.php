<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taskm extends Model
{
    protected $table = 'taskms';
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(Userm::class, 'user_id', 'id');
    }
}
