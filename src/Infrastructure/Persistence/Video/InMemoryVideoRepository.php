<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence\Video;

use App\Domain\Video\Video;
use App\Domain\Video\VideoNotFoundException;
use App\Domain\Video\VideoRepository;

class InMemoryVideoRepository implements VideoRepository
{
    /**
     * @var Video[]
     */
    private $videos;

    /**
     * InMemoryUserRepository constructor.
     *
     * @param array|null $videos
     */
    public function __construct(array $videos = null)
    {
        $this->videos = $videos ?? [
            1 => new Video(1, 'What It\'s Like To Work At AlgaeCal', 'Discover what it\'s like to work at AlgaeCal with this quick video!', 'm3ralniniq', 'about'),
            2 => new Video(2, 'Esther Mangini Testimonial', 'Esther\'s journey to healthier bones', 'ybyot0dm7q','testimonials'),
            3 => new Video(3, 'Teresa Cucurull Testimonial', 'Teresa\'s journey to healthier bones', 'mhmv73k989', 'testimonials'),
            4 => new Video(4, 'Perfect Pilates For Osteoporosis - Legwork', 'Bone Healthy Exercises!', '3n5p02h26w', 'excercises'),
            5 => new Video(5, 'Perfect Pilates For Osteoporosis - Amazing Abs', 'Bone Healthy Exercises!', 'kkgeu7v2va', 'excercises'),
            6 => new Video(6, 'Lara\'s Homemade Granola', 'Bone Healthy Recipes', 'm6amjftj3w', 'recipes'),
            7 => new Video(7, 'Brazil Nut Pesto', 'Bone Healthy Recipes', 'ajoe5d0jk0', 'recipes'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function findAll(): array
    {
        return array_values($this->videos);
    }

    /**
     * {@inheritdoc}
     */
    public function findVideoOfVideoId(string $video_id): Video
    {
        foreach ($this->videos as $video) {
          if ($video->getVideo_id() == $video_id) {
            return $video;
          }
        }
        throw new VideoNotFoundException();
    }
}