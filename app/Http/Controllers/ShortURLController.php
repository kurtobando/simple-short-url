<?php

namespace App\Http\Controllers;

use App\Services\ShortURLService;
use Illuminate\Http\Request;

class ShortURLController extends Controller
{
    public function __construct(
        private readonly ShortURLService $shortURLService
    ) {
    }

    public function index()
    {
        $this->shortURLService->setURL('https://google.com/');

        return $this->shortURLService->getURL();
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
