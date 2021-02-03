<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;
use MemberService;
use Mockery\Exception;

class MembersController extends Controller
{
    private $memberService;

    public function __construct(
        MemberService $memberService
    )
    {
        $this->memberService = $memberService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Member[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return $this->memberService->index();
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
     * @param MemberRequest $request
     * @return bool
     */
    public function store(MemberRequest $request)
    {
        return $this->memberService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function show($id)
    {
        return $this->memberService->show($id);
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
     * @param MemberRequest $request
     * @param Member $member
     * @return bool
     */
    public function update(MemberRequest $request, Member $member)
    {
        return $this->memberService->update($request, $member);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Member $member
     * @return bool|null
     * @throws \Exception
     */
    public function destroy(Member $member)
    {
        return $this->memberService->delete($member);
    }
}
