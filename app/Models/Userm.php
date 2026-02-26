<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Taskm;

class Userm extends Model
{
    protected $table = 'userms';
    protected $primaryKey = 'id';

    public function tasks()
    {
        return $this->hasMany(Taskm::class, 'user_id', 'id');
    }
}
