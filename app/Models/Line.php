<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    use HasFactory;
    protected $guarded = [] ;
    // 'finished' , 'tabor' ,   'service' ,     'no_show_up' ,  'canceled'

    const FINISHED = 1 ;
    const TABOR = 2;
    const SERVICE = 3 ;
    const ON_SHOW_UP =4  ;
    const CANCELED = 5 ;

    function employee(){
       return $this->belongsTo(Employee::class  ) ;
    }
}
