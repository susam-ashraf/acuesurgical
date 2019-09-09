<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $primaryKey = 'product_row_id';

    public function catname(){
    	return $this->belongsTo('\App\Category','category_row_id','category_row_id');
    }
}
