<?php

namespace App\ApiResource;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use App\State\PostProvider;

#[ApiResource(
    operations: [
        new Get(
            provider: PostProvider::class
        )
    ]
)]
class Post
{
    public function __construct(
        private readonly string $id,
        private readonly ?ContentItemCollection $content,
    )
    {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getContent(): ?ContentItemCollection
    {
        return $this->content;
    }
}
