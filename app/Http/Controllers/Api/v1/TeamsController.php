<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use TeamService;

class TeamsController extends Controller
{

    private $teamService;

    public function __construct(
        TeamService $teamService
    )
    {
        $this->teamService = $teamService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return team[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {

        return $this->teamService->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TeamRequest $request
     * @return bool
     */
    public function store(TeamRequest $request)
    {
        return $this->teamService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function show($id)
    {
        return $this->teamService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TeamRequest $request
     * @param Team $team
     * @return bool
     */
    public function update(TeamRequest $request, Team $team)
    {
        return $this->teamService->update($request, $team);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param team $team
     * @return bool|null
     * @throws \Exception
     */
    public function destroy(Team $team)
    {
        return $this->teamService->delete($team);
    }
}
