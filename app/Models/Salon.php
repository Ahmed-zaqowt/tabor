<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Salon extends Model
{
    use HasFactory;
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $guarded=[];
    const PATH_CR = "/upload/user/cover/";
    const PATH_TAX = "/upload/user/personal/";
    const PATH_MAIL_NUMBER = "/upload/user/video/";
    const PATH_CONTRACT = "/upload/user/id/";




//Boot
    public static function boot()
    {
        parent::boot();
        self::creating(function ($item) {
            $item->uuid = Str::uuid();
        });
    }

}
