<?php

use App\Http\Requests\MemberRequest;
use App\Models\Member;

class MemberService
{
    private $memberRepository;
    public function __construct(
        \App\Repositories\MemberRepository $memberRepository
    )
    {
        $this->memberRepository = $memberRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return League[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return $this->memberRepository->all();
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
     * @param LeagueRequest $request
     * @return bool
     */
    public function store(MemberRequest $request)
    {
        return $this->memberRepository->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function show($id)
    {
        return $this->memberRepository->show($id);
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
     * @param MemberRequest $request
     * @param Member $member
     * @return bool
     */
    public function update(MemberRequest $request, Member $member)
    {
        return $this->memberRepository->update($member, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Member $team
     * @return bool|null
     */
    public function delete(Member $team)
    {
        return $this->memberRepository->delete($team);
    }


}

