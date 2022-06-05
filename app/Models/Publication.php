<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    const   ID                    = "id";
    const   IDCAT                 = "idcat";
    const   IDPUB                 = "idPub";
    const   DATE_PUBLICATION      = "datePublication";
    const   ACTIFYN               = "actifYN";
}
