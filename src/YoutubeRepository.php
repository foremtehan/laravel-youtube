<?php

namespace Youtube;

class YoutubeRepository
{
    public function search(string $q = null)
    {
        $youtube = resolve(YoutubeSearch::class);

        return $q ? $youtube->search($q) : $youtube;
    }
}