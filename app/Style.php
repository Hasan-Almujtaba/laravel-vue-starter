<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
  protected $fillable = ['title', 'slug', 'content'];
}
