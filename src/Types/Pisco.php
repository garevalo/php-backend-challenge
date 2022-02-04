<?php

namespace App\Types;

use App\Methods;

class Pisco implements Methods {

    public function getQuality($quality, $sellIn): int
    {

        if($quality < 50) {
            $quality = $quality + 1;
        }

        if ($sellIn <= 0 && $quality < 50) {
            $quality = $quality + 1;
        }

        return $quality;
    }

    public function getSellIn($quality, $sellIn): int
    {

        return $sellIn - 1;

    }

}