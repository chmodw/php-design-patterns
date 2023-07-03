<?php

namespace FactoryMethod\Creators;

use ContentFactory;
use FactoryMethod\Interfaces\Content;
use FactoryMethod\Concretes\Movie;

class MovieFactory extends ContentFactory {

    public function content(): Content
    {
        return new Movie();
    }
}