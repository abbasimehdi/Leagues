<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LeagueRequest;
use App\Models\League;
use App\Services\LeagueService;

class LeaguesController extends Controller
{
    private $leagueService;

    public function __construct(
        LeagueService $leagueService
    )
    {
        $this->leagueService = $leagueService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return League[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return $this->leagueService->index();
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
     * @param LeagueRequest $request
     * @return bool
     */
    public function store(LeagueRequest $request)
    {
        return $this->leagueService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function show($id)
    {
        return $this->leagueService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param LeagueRequest $request
     * @param League $league
     * @return bool
     */
    public function update(LeagueRequest $request, League $league)
    {
        return $this->leagueService->update($request, $league);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param League $league
     * @return bool|null
     * @throws \Exception
     */
    public function destroy(League $league)
    {
        return $this->leagueService->delete($league);
    }
}
