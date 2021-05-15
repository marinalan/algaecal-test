<?php
declare(strict_types=1);

namespace App\Domain\Video;

use JsonSerializable;

class Video implements JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $category;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $video_id;

    /**
     * @param int|null  $id
     * @param string    $title
     * @param string    $description
     * @param string    $video_id
     * @param string    $category
     */
    public function __construct(?int $id, string $title, string $description, string $video_id, ?string $category=null)
    {
        $this->id = $id;
        $this->title = ucfirst($title);
        $this->description = ucfirst($description);
        $this->video_id = strtolower($video_id);
        if ($category != null) {
          $this->category = ucfirst($category);
        }
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getVideo_id(): string
    {
        return $this->video_id;
    }

    /**
     * @return string
     */
    public function geteCategory(): string
    {
        return $this->category;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
      if ($this->category) {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'category' => $this->category,
            'description' => $this->description,
            'video_id' => $this->video_id,
        ];

      } else {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'video_id' => $this->video_id,
        ];

      }
    }
}
