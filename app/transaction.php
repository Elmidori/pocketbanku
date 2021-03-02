<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $table= 'transactions';
    
    public $primaryKey = 'id';
    
    public $timestamps = true;
   
}
