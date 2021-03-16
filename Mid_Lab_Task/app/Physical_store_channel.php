<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physical_store_channel extends Model
{
    protected $table = 'physical_store_channel';
    public $timestamps = false;
    protected $primaryKey = 'product_id';
}
