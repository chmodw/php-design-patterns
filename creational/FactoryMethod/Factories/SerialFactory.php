<?php

namespace FactoryMethod\Creators;

use ContentFactory;
use FactoryMethod\Concretes\Documentary;
use FactoryMethod\Concretes\Serial;
use FactoryMethod\Interfaces\Content;

class SerialFactory extends ContentFactory {

    public function content(): Content
    {
        return new Serial();
    }
}