<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShowLinkRequest;
use App\Models\Link;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class ShowLinkController extends Controller
{
    /**
     * Show a single short link
     *
     * @param ShowLinkRequest $request
     * @param Link $link
     * @return Application|RedirectResponse|Redirector
     */
    public function show(ShowLinkRequest $request, Link $link)
    {
        return redirect(
            url($link->original)
        );
    }
}
