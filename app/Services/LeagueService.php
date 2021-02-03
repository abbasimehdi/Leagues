<?php /** @noinspection ALL */

namespace App\Services;

use App\Contracts\DeleteInterface;
use App\Contracts\StoreInterface;
use App\Contracts\UpdateInterface;
use App\Http\Requests\LeagueRequest;
use App\Contracts\IndexInterface;
use App\Models\League;
use App\Repositories\LeagueRepository;

class LeagueService
{
    private $leagueRepository;
    public function __construct(
//        IndexInterface $index,
        LeagueRepository $leagueRepository
    )
    {
        $this->leagueRepository = $leagueRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return League[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return $this->leagueRepository->all();
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
        return $this->leagueRepository->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function show($id)
    {
        return $this->leagueRepository->show($id);
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
        return $this->leagueRepository->update($league, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param League $league
     * @return bool|null
     * @throws \Exception
     */
    public function delete(League $league)
    {
        return $this->leagueRepository->delete($league);
    }


}

