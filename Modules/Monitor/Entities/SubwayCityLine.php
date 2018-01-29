<?php

namespace Modules\Monitor\Entities;

use Illuminate\Database\Eloquent\Model;

class subwayCityLine extends Model
{
    public $connection = 'mysql1';
    public $table = 'subway_city_line';
    
    protected $guarded = [];
//    protected $fillable = [];
}
