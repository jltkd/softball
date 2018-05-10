<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function opponent() {
        return $this->belongsTo('Opponent');
    }
}
