<?php

namespace App\Models;

use Cake;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;

    protected $table = 'type';

    public function cake()
    {
        return $this->hasMany(Cake::class);
    }
}
