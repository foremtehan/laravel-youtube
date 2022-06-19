<?php

namespace Youtube;

class YoutubeRepository
{
    public function search(): YoutubeSearch
    {
        return resolve(YoutubeSearch::class);
    }
}