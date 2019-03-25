<?php

namespace App\Http\Controllers;

use App\Models\Shortlink;
use App\Models\User;
use App\Services\ShortlinkService;
use Illuminate\Http\Request;

class ShortlinkController extends Controller
{
    use ApiTrait;

    /**
     * @var ShortlinkService
     */
    protected $shortlinkService;

    /**
     * ShortlinkController constructor.
     * @param ShortlinkService $shortlinkService
     */
    public function __construct(ShortlinkService $shortlinkService)
    {
        // 登入完成暫時這樣處理
        auth()->loginUsingId(1);
        $this->shortlinkService = $shortlinkService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        /** @var User $user */
        $user = auth()->user();
        $shortlinks = $this->shortlinkService->getShortlink($user);

        return $this->returnSuccess("Success", $shortlinks);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shortlink  $shortlink
     * @return \Illuminate\Http\Response
     */
    public function show(Shortlink $shortlink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shortlink  $shortlink
     * @return \Illuminate\Http\Response
     */
    public function edit(Shortlink $shortlink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shortlink  $shortlink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shortlink $shortlink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shortlink  $shortlink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shortlink $shortlink)
    {
        //
    }
}
