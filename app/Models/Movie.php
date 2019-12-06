<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  public static function search($title,$take, $skip)
  {
     return self::where('title', 'LIKE', '%'.$title.'%')->skip($skip)->take($take)->get();
  }
}
