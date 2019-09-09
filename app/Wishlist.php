<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
  protected $primaryKey = 'wishlist_id';
  public function product_list(){
    return $this->belongsTo('\App\Product','product_row_id','product_row_id');
  }
  public function user_name(){
    return $this->belongsTo('\App\User','user_id','id');
  }
}
