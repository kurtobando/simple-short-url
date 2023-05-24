<?php

namespace App\Services;

use App\Models\ShortURL;

class ShortURLService
{
    private string $url;
    private string $url_short;
    private int $url_length;

    public function __construct(private readonly ShortURL $shortURL)
    {
        $this->url_length = 5;
        $this->url_short = '';
    }

    public function setURL(string $url): void
    {
        $this->url = $url;
    }

    public function getURL()
    {
        $this->url_short = $this->generateShortURL();

        if ($this->shortURL->where('url', $this->url)->exists()) {
            return $this->shortURL->where('url', $this->url)->first()->url_short;
        }

        $this->shortURL->url_short = $this->url_short;
        $this->shortURL->url = $this->url;
        $this->shortURL->save();

        return $this->url_short;
    }

    public function getURLShort(string $url_short)
    {
        if ($this->shortURL->where('url_short', $url_short)->exists()) {
            return $this->shortURL->where('url_short', $url_short)->first()->url;
        }

        return null;
    }

    private function generateShortURL()
    {
        return str()->random($this->url_length);
    }
}
