<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

  protected $primaryKey = 'order_row_id';
  public function product_name(){
    return $this->belongsTo('\App\Product','product_row_id','product_row_id');
  }
  public function user_name(){
    return $this->belongsTo('\App\User','user_id','id');
  }
}
