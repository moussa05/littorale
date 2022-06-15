<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    const   ID                    = "id";
    const   ID_PUB                = "idPub";
    const   DATE_EVENEMENT        = "date_evenement";
    const   TITRE                 = "titre";
    protected $guarded = [] ; 
}
