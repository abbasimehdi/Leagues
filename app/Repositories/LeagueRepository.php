<?php
namespace App\Repositories;
use App\Models\League;
use App\Models\Team;

class LeagueRepository extends Repository
{
    /**
     * @return string
     */
    public function model()
    {
        return League::class;
    }

    public function show($id)
    {
        return Team::where('league_id', $id)->get();
    }
}