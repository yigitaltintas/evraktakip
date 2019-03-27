<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Kullanici extends Authenticatable
{

    Use SoftDeletes;

    protected  $table = "user";

    protected $fillable = ['adsoyad', 'email', 'sifre'];
    protected $hidden = ['sifre'];

    const CREATED_AT = 'olusturulma_tarihi';
    const UPDATED_AT = 'guncellenme_tarihi';
    const DELETED_AT = 'silinme_tarihi';

    public function getAuthPassword()
    {
        return $this -> sifre;
    }
}
