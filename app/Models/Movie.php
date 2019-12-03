<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  public static function search($title,$take)
  {
     return self::where('title', 'LIKE', '%'.$title.'%')->take($take)->get();
  }
}
