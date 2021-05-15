<?php
declare(strict_types=1);

namespace App\Application\Actions\Video;

use Psr\Http\Message\ResponseInterface as Response;

class ListVideosAction extends VideoAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $videos = $this->videoRepository->findAll();

        $this->logger->info("Videos list was viewed.");

        return $this->respondWithData($videos);
    }
}
