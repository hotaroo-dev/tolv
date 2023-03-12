<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  use HasFactory;

  protected $fillable = [
    'product_id',
    'name',
    'price',
    'count',
    'user_id'
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
