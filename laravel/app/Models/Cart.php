<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $fillable = [
        'user_id', 'prod_id', 'prod_quantity'
    ];

    public function products() {
        return $this->belongsTo(Produs::class, 'prod_id', 'id');
    }
    public $timestamps = false;
}
