<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
  protected $fillable = ['title', 'slug', 'content'];
}
