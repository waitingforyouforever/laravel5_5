<?php

namespace Modules\Monitor\Entities;

use Illuminate\Database\Eloquent\Model;

class subwayCity extends Model
{
    public $connection = 'mysql1';
    public $table = 'subway_city';
    public $primaryKey = 'id';

    protected $guarded = [];
//    protected $fillable = [];
}
