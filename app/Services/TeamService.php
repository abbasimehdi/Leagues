<?php /** @noinspection ALL */

use App\Contracts\DeleteInterface;
use App\Contracts\IndexInterface;
use App\Contracts\StoreInterface;
use App\Contracts\UpdateInterface;
use App\Http\Requests\TeamRequest;
use App\Models\League;
use App\Models\Member;
use App\Models\Team;
use App\Repositories\TeamRepository;

class TeamService
{
    private $teamRepository;
    public function __construct(
        TeamRepository $teamRepository
    )
    {
        $this->teamRepository = $teamRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return League[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return $this->teamRepository->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TeamRequest $request
     * @param Team $team
     * @return bool
     */
    public function store(TeamRequest $request, Team $team)
    {
        return $this->teamRepository->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function show($id)
    {
        return $this->teamRepository->show($id);
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
     * @param TeamRequest $request
     * @param Member $member
     * @return bool
     */
    public function update(TeamRequest $request, Team $team)
    {
        return $this->teamRepository->update($team, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Team $team
     * @return bool|null
     */
    public function delete(Team $team)
    {
        return $this->teamRepository->delete($team);
    }


}

