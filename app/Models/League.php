<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "flag",
        "contient_name",
        "country_name",
        "state_name",
        "city_name",
        "extra_info"
    ];
    public function teams()
    {
        return $this->hasMany(Team::class, 'team_id');
    }
}
