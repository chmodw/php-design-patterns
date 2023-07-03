<?php

namespace FactoryMethod\Interfaces;

interface Content
{
    /**
     * Returns content length
     * @return int|null
     */
    public function getLength(): ?int;

    /**
     * Returns content title
     * @return string|null
     */
    public function getTitle(): ?string;

    /**
     * Returns content description
     * @return string|null
     */
    public function getDescription(): ?string;
}