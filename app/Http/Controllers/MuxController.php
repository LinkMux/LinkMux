<?php

namespace App\Http\Controllers;

use App\Models\Shortlink;
use App\Services\ShortlinkService;

class MuxController extends Controller
{
    /**
     * @var ShortlinkService
     */
    protected $shortlinkService;

    /**
     * MuxController constructor.
     *
     * @param ShortlinkService $shortlinkService
     */
    public function __construct(ShortlinkService $shortlinkService)
    {
        $this->shortlinkService = $shortlinkService;
    }

    /**
     * @param string $path
     *
     * @return string
     */
    public function index(string $path)
    {
        /** @var Shortlink $shortlink */
        $shortlink = $this->shortlinkService->findPublicShortlink($path);

        if (!$shortlink) {
            return abort(404);
        }

        return redirect($shortlink->original_url);
    }

    /**
     * Redirect to dashboard page.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function dashboard()
    {
        return redirect('/dashboard');
    }
}
