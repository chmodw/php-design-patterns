<?php

namespace FactoryMethod\Concretes;

use FactoryMethod\Interfaces\Content;

class Serial implements Content
{
    private ?int $length;
    private ?string $title;
    private ?string $description;

    public function __construct()
    {
        $this->length = 40;
        $this->title = "Serial";
        $this->description = "Compelling storytelling of interconnected events or characters in a sequence.";
    }

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}