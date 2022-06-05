<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentArticle extends Model
{
    use HasFactory;

    const   ID                    = "id";
    const   ID_ARTICLE            = "idArticle";
    const   ID_DOCUMENT           = "idDocument";
}
