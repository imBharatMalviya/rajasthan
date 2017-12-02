<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['place_name','category_id','place_history','lang','lat','place_address','timing_open','timing_close','entry_fee'];
}
