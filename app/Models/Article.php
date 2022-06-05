<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    const   ID                    = "id";
    const   ID_PUBLICATION        = "idPub";
    const   DESCRIPTION           = "description";

}
