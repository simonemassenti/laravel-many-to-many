<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'hex_color']; 

    public function setNameAttribute($_name){
        $this->attributes['name'] = $_name;
        $this->attributes['slug'] = Str::slug($_name);
    }

    public function portfolios() {
        return $this->belongsToMany(Portfolio::class);
    }
}
