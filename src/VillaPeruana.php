<?php

namespace App;

class VillaPeruana
{
    public $name;

    public $quality;

    public $sellIn;

    public function __construct($name, $quality, $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public static function of($name, $quality, $sellIn) {
        return new static($name, $quality, $sellIn);
    }

    public function tick()
    {
        $article = new ProductFactory($this->name, $this->quality, $this->sellIn);

        $this->quality = $article->quality();

        $this->sellIn = $article->sellIn();
    }
}
