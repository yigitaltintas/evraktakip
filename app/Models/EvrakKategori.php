<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvrakKategori extends Model
{

    protected $table = 'document_category';

    protected $fillable = ['evrak_kategori_adi'];

    CONST CREATED_AT = 'olusturulma_tarihi';
    CONST UPDATED_AT = 'guncellenme_tarihi';
    CONST DELETED_AT = 'silinme_tarihi';


}
