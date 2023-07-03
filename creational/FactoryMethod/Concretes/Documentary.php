<?php

namespace FactoryMethod\Concretes;

use FactoryMethod\Interfaces\Content;

class Documentary implements Content
{
    private ?int $length;
    private ?string $title;
    private ?string $description;

    public function __construct()
    {
        $this->length = 120;
        $this->title = "Documentary";
        $this->description = "Informative exploration of real events, people, or phenomena through film.";
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