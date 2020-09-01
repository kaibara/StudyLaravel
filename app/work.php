<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class work extends Model
{
	protected $table = 'works';
    protected $guarded = array('works_id');
}
