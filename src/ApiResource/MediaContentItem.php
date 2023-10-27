<?php

namespace App\ApiResource;

class MediaContentItem implements ContentItemInterface
{
    public function __construct(
        private readonly Media $media,
    )
    {
    }

    public function getMedia(): Media
    {
        return $this->media;
    }
}
