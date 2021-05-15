<?php
declare(strict_types=1);

namespace App\Application\Actions\Video;

use Psr\Http\Message\ResponseInterface as Response;

class ViewVideoAction extends VideoAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $videoId = $this->resolveArg('video_id');
        $video = $this->videoRepository->findVideoOfVideoId($videoId);

        $this->logger->info("Video of id `${videoId}` was viewed.");

        return $this->respondWithData($video);
    }
}
