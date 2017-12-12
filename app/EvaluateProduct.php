<?php

namespace larastock;

use Illuminate\Database\Eloquent\Model;

class EvaluateProduct extends Model {
    protected $fillable = [
      'product_id', 'note', 'comment'
    ];

    public function product(){
      return $this->belongsTo('larastock\Product');
    }
}
