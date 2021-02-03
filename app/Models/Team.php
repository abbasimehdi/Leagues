<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\Flysystem\Exception;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        "league_id",
        "name",
        "no_player",
        "flag",
        "state_name",
        "city_name",
        "extra_info"
    ];

    public function league()
    {
        return $this->hasOne(League::class, 'league_id');
    }
    public function members()
    {
        return $this->hasMany(Member::class, 'member_id');
    }
}
