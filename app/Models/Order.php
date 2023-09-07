<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // ['pending' , 'Communicated' , 'Signed' , 'registered' , 'Training']

    use HasFactory;

    const PENDING = 1 ;
    const COMMUNICATED = 2 ;
    const SIGNED = 3 ;
    const REGISTERED = 4 ;
    const TRAINING = 5 ;

    protected $guarded = [] ;

}
