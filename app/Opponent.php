<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opponent extends Model
{
    protected $fillable = [
        'team_name',
        'coach_name',
        'coach_email',
        'coach_phone',
        'field_address',
        'field_number',
        'notes'
    ];

    public function games() {
        return $this->hasMany('App\Game');
    }
}
