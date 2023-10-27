<?php

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use App\ApiResource\ContentItemCollection;
use App\ApiResource\Media;
use App\ApiResource\MediaContentItem;
use App\ApiResource\Post;

class PostProvider implements ProviderInterface
{
    public function provide(Operation $operation, array $uriVariables = [], array $context = []): object|array|null
    {
        $media = new Media('1', 'My media');
        $contentItem1 = new MediaContentItem($media);
        $media = new Media('2', 'My media 2');
        $contentItem2 = new MediaContentItem($media);

        $collection = new ContentItemCollection($contentItem1, $contentItem2);

        $post = new Post('1', $collection);

        return $post;
    }
}
