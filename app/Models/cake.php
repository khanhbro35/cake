<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cake extends Model
{
    use HasFactory;
    protected $table = 'cake';
    public function type(){
        return $this->beLongsTo(type::class);
    }
}
