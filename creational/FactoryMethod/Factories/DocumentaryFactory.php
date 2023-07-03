<?php

namespace FactoryMethod\Creators;

use ContentFactory;
use FactoryMethod\Concretes\Documentary;
use FactoryMethod\Interfaces\Content;

class DocumentaryFactory extends ContentFactory {

    public function content(): Content
    {
        return new Documentary();
    }
}