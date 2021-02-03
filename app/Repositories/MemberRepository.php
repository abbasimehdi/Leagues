<?php
namespace App\Repositories;
use App\Models\Member;
use App\Models\Team;

class MemberRepository extends Repository
{
    public function model()
    {
        return Member::class;
    }
}