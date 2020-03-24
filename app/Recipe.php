<?php

namespace App;

use App\Model;

class Recipe extends Model
{
    protected $fillable = [
      'name',
      'notes',
      'origin',
      'original_gravity',
      'original_gravity_unit',
      'ibu',
      'color',
      'color_unit'
    ];
}
