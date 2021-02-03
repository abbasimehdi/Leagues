<?php
namespace App\Repositories;
use App\Models\Member;
use App\Models\Team;

class TeamRepository extends Repository
{
    public function model()
    {
        return Team::class;
    }

    public function show($id)
    {
        return Member::where('team_id', $id)->get();
    }
}