<?php

namespace App;

class Product {

    private Methods $methods;

    public function __construct(Methods $methods){
        $this->methods = $methods;
    }

    public function getQuality($quality, $sellIn){

        return $this->methods->getQuality($quality, $sellIn);

    }

    public function getSellIn($quality, $sellIn){

        return $this->methods->getSellIn($quality, $sellIn);

    }

}

