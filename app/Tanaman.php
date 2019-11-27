<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    protected $table = 'tanam';
    protected $primarykey = 'id_tanam';
    public $timestamps = false;
}
