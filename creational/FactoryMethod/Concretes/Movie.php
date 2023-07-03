<?php

namespace FactoryMethod\Concretes;

use FactoryMethod\Interfaces\Content;

class Movie implements Content
{
    private ?int $length;
    private ?string $title;
    private ?string $description;

    public function __construct()
    {
        $this->length = 148;
        $this->title = "Movie";
        $this->description = "Thrilling heist leads to unexpected twists, testing loyalty and alliances.";
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