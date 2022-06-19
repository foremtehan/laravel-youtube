<?php

namespace Youtube;

use Google\Service\YouTube;
use Illuminate\Support\Collection;

class YoutubeSearch
{
    public function __construct(protected GoogleApi $google)
    {
        //
    }

    public function search(string $q): Collection
    {
        $youtube = new YouTube($this->google->client);

        $result = $youtube->search->listSearch('snippet', compact('q'));

        return new Collection($result->getItems());
    }

    public function searchVideoId(string $q): string
    {
        return $this->search($q)->first()->id->videoId;
    }
}