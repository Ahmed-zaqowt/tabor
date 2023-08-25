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
    const PATH_CR = "/upload/cr/";
    const PATH_TAX = "/upload/tax/";
    const PATH_MAIL_NUMBER = "/upload/mail_number/";
    const PATH_CONTRACT = "/upload/contract/";
    const PATH_LOGO = "/upload/logo/";
    const PATH_GENERAL  = "/upload/general/";

public function service(){
    return $this->hasMany(Service::class,'salon_uuid');
}
    public function employee(){
        return $this->hasMany(Employee::class,'salon_uuid');
    }
//Boot
    public static function boot()
    {
        parent::boot();
        self::creating(function ($item) {
            $item->uuid = Str::uuid();
        });
    }

}
