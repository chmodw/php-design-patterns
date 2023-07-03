<?php

use FactoryMethod\Interfaces\Content;

abstract class ContentFactory
{
    abstract public function content(): Content;

    public function watch(): void
    {
        $content = $this->content();
        echo $content->getTitle() . " Started playing, it will take amount " . $content->getLength() . " Minutes";
    }
}