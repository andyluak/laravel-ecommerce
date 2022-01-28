<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produs extends Model
{
    use HasFactory;


    protected $table = 'produse';
    protected $fillable = [
        'produs_id',
        'produs_nume',
        'produs_pret',
        'produs_img',
        'produs_descriere',
        'produs_descrierecompl',
        'produs_stare',
        'produs_oferta',
        'produs_noutati',
    ];
    public $timestamps = false;
}
