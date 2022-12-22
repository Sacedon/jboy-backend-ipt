<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    protected $fillable = ['shop_id', 'parts', 'accessories'];

    public function motors(){
        return $this->belongsTo('App\Models\Motor', 'shop_id');
    }
}
