<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    const   ID                    = "id";
    const   ID_PUB                = "idPub";
    const   CHEMIN                = "chemin";
    const   TYPE                  = "type";

    protected $fillable = [
        self::ID_PUB,
        self::CHEMIN,
    ];

}
