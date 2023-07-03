<?php

use FactoryMethod\Creators\DocumentaryFactory;
use FactoryMethod\Creators\MovieFactory;

$movie = new MovieFactory();
$movie->watch();

$documentary = new DocumentaryFactory();
$documentary->watch();