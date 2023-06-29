<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mod extends Model
{
    protected $fillable = ['title'];
    use HasFactory;
    public function goods() {
        return $this->hasMany(Product::class, 'mod_id', 'id');
    }
}
