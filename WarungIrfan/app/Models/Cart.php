<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $fillable = [
        'user_id',
        'menu_id',
        'menu_qty'
    ];

    public function menu(){
        return $this->belongsTo(menu::class,'menu_id', 'id');
    }
}
