<?php

namespace App\Http\Controllers;

use App\Services\ShortURLService;
use Illuminate\Http\Request;

class ShortURLRedirectController extends Controller
{
    public function __construct(
        private readonly ShortURLService $shortURLService
    ) {
    }

    public function show(string $url_short)
    {
        $url = $this->shortURLService->getURLShort($url_short);

        if(is_null($url)) {
            abort(404, 'URL not found.');
        }

        return redirect($url);
    }
}
