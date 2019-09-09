<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temp_order extends Model
{
	protected $primaryKey = 'temp_order_row_id';
    public function catname(){
    	return $this->belongsTo('\App\Product','product_row_id','product_row_id');
    }
}
