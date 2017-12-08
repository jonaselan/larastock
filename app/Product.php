<?php

namespace larastock;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = array('name', 'description', 'value', 'count');
}
