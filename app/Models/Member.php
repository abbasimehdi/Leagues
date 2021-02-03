<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'team_id',
        'name',
        'position',
        'post',
        'bit',
        'nationality',
        'age',
        'extra_info',
    ];
    public function team()
    {
        return $this->hasOne(Team::class, 'team_id');
    }
}
