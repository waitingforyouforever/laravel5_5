<?php

namespace Modules\Monitor\Entities;

use Illuminate\Database\Eloquent\Model;

class subwayCityLineStation extends Model
{
    public $connection = 'mysql1';
    public $table = 'subway_city_line_station';

    protected $guarded = [];
//    protected $fillable = [];
}
